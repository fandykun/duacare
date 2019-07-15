<?php

namespace App\Http\Controllers;

use App\Organizer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{

    public function index()
    {
        $organizers = Organizer::all();
        return view('admin.organizer.index', compact('organizers'));
    }

    public function createOrganizerPage()
    {
        return view('admin.organizer.create');
    }

    public function storeOrganizer(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/organizer', $imageName);
            } else $imageName = 'dummy.png';
            Organizer::create([
                'name' => $request->name,
                'position' => $request->position,
                'phone_number' => $request->phone_number,
                'image' => $imageName,
            ]);
        } catch (\Exception $e) {
            $eMessage = 'Add Organizer - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }

        return redirect('/admin/organizer')->with('message', 'success');
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

    public function exportOrganizer()
    {
        try {
            $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv',
                'Content-Disposition' => 'attachment; filename=Duacare-Organizer.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
            ];

            $list = Organizer::all()->toArray();

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
            $eMessage = 'Export Organizer - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
    }
}
