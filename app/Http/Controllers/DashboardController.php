<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Extracurricular;
use App\Models\Major;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $artikel = Article::orderBy('created_at', 'desc')->take(5)->get();
        $countJurusan = Major::count();
        $countExtra = Extracurricular::count();
        $countArtikel = Article::count();
        // dd(auth()->user());
        // return view('admin.dashboard.index');
        return view('admin.dashboard.new.index', compact('artikel', 'countJurusan', 'countArtikel'));
    }
}
