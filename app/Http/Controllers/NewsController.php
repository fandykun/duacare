<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class NewsController extends Controller
{
    public function readNewsPage()
    {
        $news = News::all();
        $events = Event::all();
        return view('admin.news.index', compact('news', 'events'));
    }

    public function createNewsPage()
    {
        $events = Event::all();
        return view('admin.news.create', compact('events'));
    }

    public function storeNews(Request $request)
    {
        try {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/news', $imageName);

            News::create([
                'title' => $request->name,
                'description' => $request->description,
                'image' => $imageName,
                'event_id' => $request->event_id
            ]);
        } catch (\Exception $e) {
            $eMessage = 'add news, error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }

        return redirect()->back()->with('success', 'success');
    }

    public function getNews($id)
    {
        try {
            $news = News::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($news);
    }

    public function updateNews(Request $request)
    {
        try {
            News::find($request->id)->update([
                'title' => $request->title,
                'description'  =>  $request->description,
                'event_id' =>  $request->event_id,
                'created_at'    =>  $request->created_at,
                'updated_at'    =>  $request->created_at,
            ]);
        } catch (\Exception $e) {
            $eMessage = 'update news - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function deleteNews(Request $request)
    {
        try {
            News::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete news - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }

    public function exportNews()
    {
        try {
            $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv',
                'Content-Disposition' => 'attachment; filename=Duacare-Berita.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
            ];

            $list = News::all()->toArray();

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
            $eMessage = 'delete news - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
    }
}
