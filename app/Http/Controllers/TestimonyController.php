<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Http\Request;

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
            Testimony::find($request->id)->update([
                'title' => $request->title,
                'description'  =>  $request->description
            ]);
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
}
