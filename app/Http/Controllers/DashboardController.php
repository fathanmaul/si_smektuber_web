<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\DetailRegistration;
use App\Models\Extracurricular;
use App\Models\Major;
use App\Models\Registration;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

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
        $ppdb = DetailRegistration::select([
            'registration.id',
            'school_year.school_year',
            'registration.date_start',
            'registration.date_end',
            DB::raw('COUNT(detail_registration.id) AS total')
        ])->join('registration', 'registration.id', '=', 'detail_registration.registration_id')
        ->join('school_year', 'school_year.id', '=', 'registration.school_year')
        ->where('registration.status', '=', '1')
        ->groupBy('registration.id')->first();
            // return Response::json($ppdb);   
        // dd(auth()->user());
        // return view('admin.dashboard.index');
        return view('admin.dashboard.new.index', compact('artikel', 'countJurusan', 'countArtikel', 'ppdb'));
    }
}
