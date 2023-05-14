<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiJurusanController extends Controller
{
    public function index()
    {
        return view('admin.Jurusan.new.prestasi.index');
    }
}
