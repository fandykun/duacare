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
        return view('pages.home', compact('testimonies', 'events'));
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
        $latest_items = News::orderBy('created_at', 'desc')->take(5)->get();
        $news = News::findOrFail($id);
        $events = Event::all();
        return view('pages.newsDetail', compact('news', 'latest_items', 'events'));
    }

    public function getContactPage()
    {
        return view('pages.contact');
    }
}
