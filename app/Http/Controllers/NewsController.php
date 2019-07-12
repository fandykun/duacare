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
        return view('admin.news.index', compact('news'));
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
}
