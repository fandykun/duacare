<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
use App\Event;
use App\News;
use App\Article;
use App\FinancialReport;
use App\Organizer;

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
        $organizers = Organizer::where('division', '!=', 'RM')->get();
        return view('pages.organizer', compact('organizers'));
    }

    private function getNumberFromMonthName($month)
    {
        $monthName = [
            'Januari', 'Februari', 'Maret', 'April',
            'Mei', 'Juni', 'Juli', 'Agustus',
            'September', 'Oktober', 'November', 'Desember'
        ];
        return $monthName[$month];
    }

    public function getFinanceReportPage()
    {
        // $financialReports = FinancialReport::all()->first();
        // $monthName = [
        //     'Januari', 'Februari', 'Maret', 'April',
        //     'Mei', 'Juni', 'Juli', 'Agustus',
        //     'September', 'Oktober', 'November', 'Desember'
        // ];
        // $test = array_search($financialReports->month, $monthName) + 1;

        //sek gak wero carane nge-custom sort gawe karo bulan
        $financialReports = FinancialReport::orderBy('year', 'ASC')->get();

        return view('pages.finance-report', compact('financialReports'));
    }

    public function getFinanceReportData(){
        $financialReports = FinancialReport::all();
        return response()->json($financialReports);
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
        $news = News::orderBy('created_at', 'desc')->first();
        $latest_items = Article::orderBy('created_at', 'desc')->take(6)->get();
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        $events = Event::all();
        return view('pages.articles', compact('articles', 'latest_items', 'events', 'news'));
    }

    public function getArticlesDetailPage($id, $title)
    {

        $article = Article::findOrFail($id);
        $events = Event::all();

        $latest_items = Article::orderBy('created_at', 'desc')->take(6)->get();
        $previous_item = Article::where('created_at', '<', $article->created_at)
            ->orderBy('created_at', 'desc')
            ->first();
        $next_item = Article::where('created_at', '>', $article->created_at)
            ->orderBy('created_at', 'asc')
            ->first();

        return view(
            'pages.articlesDetail',
            compact('article', 'latest_items', 'previous_item', 'next_item', 'events')
        );
    }

    public function getArticlesBySearch(Request $r)
    {
        $news = News::orderBy('created_at', 'desc')->first();
        $latest_items = Article::orderBy('created_at', 'desc')->take(6)->get();
        $events = Event::all();
        $articles = Article::Where('title', 'like', '%' . $r->q . '%')->paginate(6)->appends(request()->query());
        return view('pages.articles', compact('articles', 'latest_items', 'events', 'news'));
    }

    public function getContactPage()
    {
        return view('pages.contact');
    }

    public function getDGTSPage()
    {
        return view('pages.dgts');
    }

    public function getDFRPage()
    {
        return view('pages.dfr');
    }

    public function getBeasiswaPage()
    {
        return view('pages.scholarship');
    }

    public function getCampPage()
    {
        return view('pages.duacare-camp');
    }
}
