<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
use App\Event;
use App\News;

class PagesController extends Controller
{

    public function getHomePage()
    {
        $testimonies = Testimony::all();
        $events = Event::all();
        $news = News::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.home', compact('testimonies', 'events', 'news'));
    }

    public function getAboutPage()
    {
        return view('pages.about');
    }

    public function getDLDPage()
    {
        return view('pages.dld');
    }

    public function getOrganizerPage()
    {
        return view('pages.organizer');
    }

    public function getNewsPage()
    {
        // $news = News::orderBy('created_at', 'desc')->get();
        $latest_items = News::orderBy('created_at', 'desc')->take(5)->get();
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        $events = Event::all();
        return view('pages.news', compact('news', 'latest_items', 'events'));
    }

    public function getNewsDetailPage($id, $title)
    {

        $news = News::findOrFail($id);
        $events = Event::all();

        $latest_items = News::orderBy('created_at', 'desc')->take(5)->get();
        $previous_item = News::where('created_at', '<', $news->created_at)
            ->orderBy('created_at', 'desc')
            ->first();
        $next_item = News::where('created_at', '>', $news->created_at)
            ->orderBy('created_at', 'asc')
            ->first();

        return view(
            'pages.newsDetail',
            compact('news', 'latest_items', 'previous_item', 'next_item', 'events')
        );
    }

    public function getNewsBySearch(Request $r)
    {
        $latest_items = News::orderBy('created_at', 'desc')->take(5)->get();
        $events = Event::all();
        $news = News::Where('title', 'like', '%' . $r->q . '%')->paginate(5)->appends(request()->query());
        return view('pages.news', compact('news', 'latest_items', 'events'));
    }

    public function getContactPage()
    {
        return view('pages.contact');
    }
}
