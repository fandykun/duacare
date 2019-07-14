<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    public function getEvent($id)
    {
        try {
            $event = Event::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($event);
    }

    public function updateEvent(Request $request)
    {
        try {
            Event::find($request->id)->update([
                'title' => $request->title,
                'description'  =>  $request->description
            ]);
        } catch (\Exception $e) {
            $eMessage = 'update Event - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteEvent(Request $request)
    {
        try {
            Event::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete Event - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }
}
