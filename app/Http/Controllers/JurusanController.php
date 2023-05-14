<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Major::paginate(5);
        return view('admin.jurusan.index', ['jurusans' => $jurusans]);
    }


    public function create()
    {
        return view('admin.jurusan.create');
    }
}