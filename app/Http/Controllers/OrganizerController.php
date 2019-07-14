<?php

namespace App\Http\Controllers;

use App\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{

    public function index()
    {
        $organizers = Organizer::all();
        return view('admin.organizer.index', compact('organizers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function getOrganizer($id)
    {
        try {
            $organizer = Organizer::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($organizer);
    }

    public function updateOrganizer(Request $request)
    {
        try {
            Organizer::find($request->id)->update([
                'name' => $request->name,
                'position'  =>  $request->position,
                'phone_number' =>  $request->phone_number
            ]);
        } catch (\Exception $e) {
            $eMessage = 'update Organizer - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteOrganizer(Request $request)
    {
        try {
            Organizer::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete Organizer - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }
}
