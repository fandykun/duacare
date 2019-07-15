<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function createSliderPage()
    {
        return view('admin.slider.create');
    }

    public function getSlider($id)
    {
        try {
            $slider = Slider::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($slider);
    }

    public function storeSlider(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $imageName = $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/slider', $imageName);
            } else $imageName = 'dummy.png';
            Slider::create([
                'name' => $request->name,
                'image' => $imageName,
            ]);
        } catch (\Exception $e) {
            $eMessage = 'Add Slider - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }

        return redirect('/admin/slider')->with('message', 'success');
    }

    public function updateSlider(Request $request)
    {
        try {
            Slider::find($request->id)->update([
                'name' => $request->name
            ]);
        } catch (\Exception $e) {
            $eMessage = 'update Slider - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteSlider(Request $request)
    {
        try {
            Slider::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete Slider - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function exportSlider()
    {
        try {
            $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv',
                'Content-Disposition' => 'attachment; filename=Duacare-Slider.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
            ];

            $list = Slider::all()->toArray();

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
            $eMessage = 'delete Slider - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
    }
}
