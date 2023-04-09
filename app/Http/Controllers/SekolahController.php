<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        return view('ProfilSekolah.index');
    }

    public function namaShow()
    {
        return view('ProfilSekolah.NamaSekolah.index');
    }
}
