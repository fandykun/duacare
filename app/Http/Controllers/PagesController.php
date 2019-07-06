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

}
