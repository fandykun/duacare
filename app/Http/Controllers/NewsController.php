<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        $events = Event::all();
        return view('admin.news.index', compact('news', 'events'));
    }

    public function create()
    {
        $events = Event::all();
        return view('admin.news.create', compact('events'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|max:1999',
            'event_id' => 'required'
        ]);
        // dd($validatedData);

        try {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $storeFile = $request->file('image')->storeAs('public/news', $filenameWithExt);

            $news = new News();
            $news->title = $request->title;
            $news->description = $request->description;
            $news->image = $filenameWithExt;
            $news->event_id = $request->event_id;
            $news->save();
        } catch (\Exception $e) { }

        return redirect('/admin/news');
    }

    public function getNews($id){
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
            News::where('id',$request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete news - User: ' . Auth::user()->id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!'); 
        }
        return redirect()->back()->with('message', 'success'); 
    }
}
