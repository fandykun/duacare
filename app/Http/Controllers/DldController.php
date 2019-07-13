<?php

namespace App\Http\Controllers;

use App\Dld;
use Illuminate\Http\Request;

class DldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dlds = Dld::all();
        return view('admin.dld.index', compact('dlds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dld  $dld
     * @return \Illuminate\Http\Response
     */
    public function show(Dld $dld)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dld  $dld
     * @return \Illuminate\Http\Response
     */
    public function edit(Dld $dld)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dld  $dld
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dld $dld)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dld  $dld
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dld $dld)
    {
        //
    }

    public function submitDLD(Request $request){
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
                'amount'  => str_replace('.','',$request->amount)
            ]);
        } catch (Exception $e) {
            $eMessage = 'add dld, error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!'); 
        }
        return redirect()->back()->with('success', 'success'); 
    }
}
