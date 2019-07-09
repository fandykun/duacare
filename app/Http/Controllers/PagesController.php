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
        $news = News::orderBy('created_at', 'desc')->get();
        // $news = News::orderBy('created_at', 'desc')->paginate(5);
        return view('pages.news', compact('news'));
    }

    public function getNewsDetailPage($id)
    {
        $news = News::findOrFail($id);
        return view('pages.newsDetail', compact('news'));
    }

    public function getContactPage()
    {
        return view('pages.contact');
    }
}
