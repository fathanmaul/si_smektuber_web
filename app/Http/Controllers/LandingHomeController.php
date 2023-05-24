<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingHomeController extends Controller
{
    //
    public function index(){
        return view('landing.index');
    }

    public function showAbout(){
        return view('landing.about');
    }

    public function showPpdb(){
        return view('landing.ppdb');
    }

    public function showArticle(){
        return view('landing.article');
    }

    public function showKonsultasi(){
        return view('landing.konsultasi');
    }
}
