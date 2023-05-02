<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Major;

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

    public function sejarah()
    {
        $dataProfil = About::first();
        return view('ProfilSekolah.sejarah.index', ['profil' => $dataProfil]);
    }

    public function visiMisi()
    {
        return view('ProfilSekolah.visi-misi.index');
    }
    
    public function kepalaSekolah()
    {
        return view('ProfilSekolah.kepalaSekolah.index');
    }
}
