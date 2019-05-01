<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // load all views currently in web.php routes
    public function getHome() {
        return view('home');
    }

    public function getAbout() {
        return view('about');
    }

    public function getContact() {
        return view('contact');
    }
}
