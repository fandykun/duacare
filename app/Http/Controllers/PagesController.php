<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function getHomePage() {
        return view('pages.home');
    }

    public function getAboutPage() {
        return view('pages.about');
    }

    public function getDLDPage() {
        return view('pages.dld');
    }

    public function getOrganizerPage() {
        return view('pages.organizer');
    }

    public function getNewsPage() {
        return view('pages.news');
    }

    public function getNewsDetailPage() {
        return view('pages.newsDetail');
    }

    public function getContactPage() {
        return view('pages.contact');
    }
}
