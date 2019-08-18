<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = Testimony::all();
        return view('admin.testimony.index', compact('testimonies'));
    }

    public function createTestimonyPage()
    {
        return view('admin.testimony.create');
    }

    public function storeTestimony(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/testimony', $imageName);
            } else $imageName = NULL;
            Testimony::create([
                'title' => $request->title,
                'detail' => $request->detail,
                'description' => $request->description,
                'image' => $imageName,
            ]);
        } catch (\Exception $e) {
            $eMessage = 'Add Testimony - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }

        return redirect('/admin/testimony')->with('message', 'success');
    }

    public function getTestimony($id)
    {
        try {
            $testimony = Testimony::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($testimony);
    }

    public function updateTestimony(Request $request)
    {
        try {
            $testimony = Testimony::find($request->id);
            $testimony->title = $request->title;
            $testimony->description = $request->description;
            if ($request->hasFile('image')) {
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/testimony', $imageName);
                if ($testimony->image != NULL)
                    Storage::delete('public/testimony/' . $testimony->image);
            } else $imageName = $testimony->image;
            $testimony->image = $imageName;
            $testimony->save();
        } catch (\Exception $e) {
            $eMessage = 'update Testimony - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteTestimony(Request $request)
    {
        try {
            Testimony::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete Testimony - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function exportTestimony()
    {
        try {
            $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv',
                'Content-Disposition' => 'attachment; filename=Duacare-Testimoni.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
            ];

            $list = Testimony::all()->toArray();

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
            $eMessage = 'delete Testimony - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
    }
}
