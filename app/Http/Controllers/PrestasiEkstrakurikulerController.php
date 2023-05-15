<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiEkstrakurikulerController extends Controller
{
    public function index()
    {
        return view('admin.Ekstrakurikuler.new.prestasi.index');
    }
}
