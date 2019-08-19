<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Validator;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function getDashboardPage()
    {
        return view('admin.dashboard');
    }

    public function exportDatabase()
    {
        $headers = [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Content-type'        => 'text/csv',
            'Content-Disposition' => 'attachment; filename=database.csv',
            'Expires'             => '0',
            'Pragma'              => 'public'
        ];

        $list = App\User::all()->toArray();

        # add headers for each column in the CSV download
        array_unshift($list, array_keys($list[0]));

        $callback = function () use ($list) {
            $FH = fopen('php://output', 'w');
            foreach ($list as $row) {
                fputcsv($FH, $row);
            }
            fclose($FH);
        };

        return (new StreamedResponse($callback, 200, $headers))->sendContent();
    }

    public function changePasswordPage()
    {
        return view('admin.change-password');
    }

    public function changePassword(Request $request)
    {
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return redirect()->back()->with(['error' => 'Wrong current password']);
        }

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|max:30|different:old_password|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator);
        }

        try {
            $user = User::find(Auth::user()->id);
            $user->update([
                'password' => bcrypt($request->password)
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Change Password Failed']);
        }
        return redirect()->back()->with(['success' => 'Change Password Success']);
    }
    
}
