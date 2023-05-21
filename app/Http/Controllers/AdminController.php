<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('developer');
    // }
    public function index()
    {
        return view('admin.admins.index');

    }
}
