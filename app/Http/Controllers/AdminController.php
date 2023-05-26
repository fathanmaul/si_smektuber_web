<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $admins = User::query();
        $admins = $admins->join('role', 'role.id', '=', 'users.role_id');
        $admins->where('role_id', '1')
        ->orWhere('role_id', '2');
        if ($keyword) {
            $admins = $admins->where('name', 'like', "%$keyword%");
        }
        // $admins->join('role', 'role_id.id', '=', 'users.role_id');
        $admins = $admins->select('users.*', 'role.name as role_name');
        $admins = $admins->paginate(10);
        $admins->appends(['cari' => $keyword]);
        // return Response::json($admins);
        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        $roles = Role::query()->where('id', '1')->orWhere('id', '2')->get();
        // return Response::json($roles);
        return view('admin.admins.create', compact('roles'));

    }
}
