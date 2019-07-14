<?php

namespace App\Http\Controllers;

use App\Dld;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class DldController extends Controller
{
    public function index()
    {
        $dlds = Dld::all();
        return view('admin.dld.index', compact('dlds'));
    }

    public function submitDLD(Request $request)
    {
        try {
            Dld::create([
                'name'  => $request->name,
                'graduation_year'  => $request->graduation_year,
                'origin_address'  => $request->origin_address,
                'current_address'  => $request->current_address,
                'email'  => $request->email,
                'phone_number'  => $request->phone_number,
                'line'  => $request->line,
                'instagram'  => $request->instagram,
                'bank'  => $request->bank,
                'donation_type'  => $request->donation_type,
                'amount'  => str_replace('.', '', $request->amount)
            ]);
        } catch (Exception $e) {
            $eMessage = 'add dld, error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('success', 'success');
    }

    public function getDLD($id)
    {
        try {
            $dld = Dld::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($dld);
    }

    public function updateDLD(Request $request)
    {
        try {
            Dld::find($request->id)->update([
                'name'  => $request->name,
                'graduation_year'  => $request->graduation_year,
                'origin_address'  => $request->origin_address,
                'current_address'  => $request->current_address,
                'email'  => $request->email,
                'phone_number'  => $request->phone_number,
                'line'  => $request->line,
                'instagram'  => $request->instagram,
                'bank'  => $request->bank,
                'donation_type'  => $request->donation_type,
                'amount'  => str_replace('.', '', $request->amount)
            ]);
        } catch (\Exception $e) {
            $eMessage = 'update DLD - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteDLD(Request $request)
    {
        try {
            Dld::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete DLD - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }
}
