<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function createUserPage()
    {
        return view('admin.user.create');
    }

    public function storeUser(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/user', $imageName);
            } else $imageName = NULL;
            User::create([
                'name' => $request->name,
                'division' => $request->division,
                'description' => $request->description,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'phone_number' => $request->phone_number,
                'image' => $imageName,
            ]);
        } catch (\Exception $e) {
            $eMessage = 'Add User - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }

        return redirect('/admin/user')->with('message', 'success');
    }

    public function getUser($id)
    {
        try {
            $user = User::find($id);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($user);
    }

    public function updateUser(Request $request)
    {
        try {
            User::find($request->id)->update([
                'name' => $request->name,
                'division' => $request->division,
                'description' => $request->description,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'phone_number' => $request->phone_number
            ]);
        } catch (\Exception $e) {
            $eMessage = 'update User - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteUser(Request $request)
    {
        try {
            User::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete User - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function exportUser()
    {
        try {
            $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv',
                'Content-Disposition' => 'attachment; filename=Duacare-Users.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
            ];

            $list = User::all()->toArray();

            # add headers for each column in the CSV download
            array_unshift($list, array_keys($list[0]));

            $callback = function () use ($list) {
                $FH = fopen('php://output', 'w');
                foreach ($list as $row) {
                    fputcsv($FH, $row);
                }
                fclose($FH);
            };

            return new StreamedResponse($callback, 200, $headers);
        } catch (\Exception $e) {
            $eMessage = 'Export User - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
    }
}
