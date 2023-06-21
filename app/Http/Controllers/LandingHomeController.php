<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Extracurricular;
use App\Models\Major;
use App\Models\Registration;
use DB;
use Illuminate\Support\Facades\Response;

class LandingHomeController extends Controller
{
    //
    public function index()
    {
        $artikel = Article::orderBy('created_at', 'desc')->take(4)->get();
        // dd($artikel);

        // return 'storage/app/'.$artikel->thumbnail;
        return view('landing.new.home.index', compact('artikel'));
    }

    public function showProfilSekolah()
    {
        $about = About::first();
        // return Response::json($about);
        return view('landing.new.tentang.profil.index', compact('about'));
    }

    public function showJurusan()
    {
        $jurusan = Major::all();
        return view('landing.new.tentang.jurusan.index', compact('jurusan'));
    }

    public function showEkstrakurikuler()
    {
        $ekstra = Extracurricular::all();
        return view('landing.new.tentang.ekstrakurikuler.index', compact('ekstra'));
    }

    public function showArticle()
    {
        $artikel = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('landing.new.artikel.index', compact('artikel'));
    }

    public function showArticleDetail($slug)
    {
        $artikel = Article::where('slug', $slug)->first();
        if ($artikel == null || $artikel == '') {
            return abort('404');
        } else {
            return view('landing.new.artikel.detail', compact('artikel'));
        }
    }

    public function showAbout()
    {
        return view('landing.about');
    }

    public function showPpdb()
    {
        $registration = DB::table('registration')->join('school_year', 'school_year.id', '=', 'registration.school_year')->select('school_year.school_year as tahun_ajaran', 'registration.*')->first();
        // return Response::json($registration);
        return view('landing.new.ppdb.index', compact('registration'));
    }

    // public function showArticle()
    // {
    //     return view('landing.article');
    // }

    public function showKonsultasi()
    {
        return view('landing.konsultasi');
    }
}
