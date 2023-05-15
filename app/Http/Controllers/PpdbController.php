<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        return view('admin.Ppdb.new.daftar-ppdb.index');
    }
    public function create(){
        return view('admin.Ppdb.new.daftar-ppdb.create');
    }
}
