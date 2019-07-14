<?php

namespace App\Http\Controllers;

use App\FinancialReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;

class FinancialReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financialReports = FinancialReport::all();
        return view('admin.financialReport.index', compact('financialReports'));
    }

    public function getFinancialReport($id)
    {
        try {
            $financialReport = FinancialReport::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($financialReport);
    }

    public function updateFinancialReport(Request $request)
    {
        try {
            FinancialReport::find($request->id)->update([
                'month' => $request->month,
                'year'  =>  $request->year,
                'link_url' => $request->link_url
            ]);
        } catch (\Exception $e) {
            $eMessage = 'update Financial Report - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteFinancialReport(Request $request)
    {
        try {
            FinancialReport::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete Financial Report - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function exportFinancialReport()
    {
        try {
            $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv',
                'Content-Disposition' => 'attachment; filename=Duacare-LaporanKeuangan.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
            ];

            $list = FinancialReport::all()->toArray();

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
            $eMessage = 'Export Financial Report - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
    }
}
