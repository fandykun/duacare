<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
use App\Event;
use App\News;
use App\Article;

class PagesController extends Controller
{

    public function getHomePage()
    {
        $testimonies = Testimony::all();
        $events = Event::all();
        $news = News::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.home', compact('testimonies', 'events', 'news'));
    }

    public function getVisiMisiPage()
    {
        return view('pages.visi-misi');
    }

    public function getOrganizerPage()
    {
        return view('pages.organizer');
    }

    public function getFinanceReportPage()
    {
        return view('pages.finance-report');
    }
    
    public function getDLDPage()
    {
        return view('pages.dld');
    }


    public function getNewsPage()
    {
        // $news = News::orderBy('created_at', 'desc')->get();
        $latest_items = News::orderBy('created_at', 'desc')->take(6)->get();
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        $events = Event::all();
        return view('pages.news', compact('news', 'latest_items', 'events'));
    }

    public function getNewsDetailPage($id, $title)
    {

        $news = News::findOrFail($id);
        $events = Event::all();

        $latest_items = News::orderBy('created_at', 'desc')->take(6)->get();
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
        $latest_items = News::orderBy('created_at', 'desc')->take(6)->get();
        $events = Event::all();
        $news = News::Where('title', 'like', '%' . $r->q . '%')->paginate(6)->appends(request()->query());
        return view('pages.news', compact('news', 'latest_items', 'events'));
    }

    // TODO: view articles
    public function getArticlesPage()
    {
        $latest_items = Article::orderBy('created_at', 'desc')->take(6)->get();
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        $events = Event::all();
        return view('pages.articles', compact('articles', 'latest_items', 'events'));
    }

    public function getArticlesDetailPage($id, $title)
    {

        $articles = Article::findOrFail($id);
        $events = Event::all();

        $latest_items = Article::orderBy('created_at', 'desc')->take(6)->get();
        $previous_item = Article::where('created_at', '<', $articles->created_at)
            ->orderBy('created_at', 'desc')
            ->first();
        $next_item = Article::where('created_at', '>', $articles->created_at)
            ->orderBy('created_at', 'asc')
            ->first();

        return view('pages.articlesDetail', compact('articles', 'latest_items', 'previous_item', 'next_item', 'events')
        );
    }

    public function getArticlesBySearch(Request $r)
    {
        $latest_items = Article::orderBy('created_at', 'desc')->take(6)->get();
        $events = Event::all();
        $articles = Article::Where('title', 'like', '%' . $r->q . '%')->paginate(6)->appends(request()->query());
        return view('pages.articles', compact('articles', 'latest_items', 'events'));
    }

    public function getContactPage()
    {
        return view('pages.contact');
    }

    public function getDGTSPage()
    {
        return "todo";
    }

    public function getDFRPage()
    {
        return "todo";
    }

    public function getBeasiswaPage()
    {
        return "todo";
    }

    public function getCampPage()
    {
        return "todo";
    }

}
