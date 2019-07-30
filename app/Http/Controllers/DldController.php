<?php

namespace App\Http\Controllers;

use App\Dld;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Telegram\Bot\Laravel\Facades\Telegram;
use Validator;
use App\Mail\DLDEmail;
use Illuminate\Support\Facades\Mail;

class DldController extends Controller
{
    public function index()
    {
        $dlds = Dld::all();
        return view('admin.dld.index', compact('dlds'));
    }

    public function submitDLD(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required|max:126',
            'name'  => 'bail|required|max:126',
            'graduation_year'  => 'bail|required|max:126',
            'origin_address'  => 'bail|required|max:126',
            'current_address'  => 'bail|required|max:126',
            'email'  => 'bail|required|email|max:126',
            'phone_number'  => 'bail|required|max:24',
            'line'  => 'bail|max:126',
            'instagram'  => 'bail|max:126',
            'bank'  => 'bail|required|max:126',
            'donation_type'  => 'bail|required|max:126',
            'amount'  => 'bail|max:16'
        ]);

        if (strlen(str_replace('.', '', $request->amount)) >= 12) {
            return redirect()->back();
        }

        if ($validator->fails()) {
            return redirect()->back();
        }

        try {
            $data = Dld::create([
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

            $message = "*[NEW DLD]*\n";
            $message = $message . "\n*Nama*\t : " . $data->name . "\n*Graduation Year*\t : " . $data->graduation_year . "\n*Origin Address*\t : " . $data->origin_address . "\n*Current Address*\t : " . $data->current_address . "\n*Email*\t : " . $data->email . "\n*Phone Number*\t : " . $data->phone_number . "\n*Line ID*\t : " . $data->line . "\n*Instagram*\t : " . $data->instagram . "\n*Bank Name*\t : " . $data->bank . "\n*Donation Type*\t : " . $data->donation_type . "\n*Amount*\t : " . $data->amount;

            try {
                Mail::to($data->email)->send(new DLDEmail($data));
            } catch (Exception $e) {
                $eMessage = 'Send Email to dld, error: ' . $e->getMessage();
                Log::emergency($eMessage);
                return redirect()->back()->with('error', 'Whoops, something error!');
            }

            Telegram::sendMessage([
                'chat_id' => '-392376502',
                'text' => $message,
                'parse_mode' => 'Markdown'
            ]);

            // Telegram::sendSticker([
            //     'chat_id' => '-392376502',
            //     'sticker' => 'CAADAgADsggAAgi3GQITL8y1531UoQI',
            // ]);
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

    public function exportDLD()
    {
        try {
            $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv',
                'Content-Disposition' => 'attachment; filename=Duacare-DLD.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
            ];

            $list = Dld::all()->toArray();

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
            $eMessage = 'Export DLD - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
    }
}
