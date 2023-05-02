<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Major;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = DB::table('major')->get();
        return view('jurusan.index', ['jurusans' => $jurusans]);
    }
}