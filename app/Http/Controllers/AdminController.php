<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->cari;
        $admins = User::whereIn('role_id', [1, 2])
            ->where('users.name', 'LIKE', '%' . $keyword . '%')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->select('users.*', 'role.name as role_name')
            ->orderBy('id', 'asc')->paginate(10);
        $admins->appends(['cari' => $keyword]);
        // return $admins;
        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        $roles = Role::query()->where('id', '1')->orWhere('id', '2')->get();
        // return Response::json($roles);
        return view('admin.admins.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // return Response::json($request->all());
        $request->validate([
            'name' => 'required|min:3|max:150',
            'username' => 'required|min:8|max:150|unique:users,username',
            'role' => 'required|regex:/^[12]$/',
        ], [
            'name.required' => 'Nama harap diisi!',
            'name.min' => 'Nama minimal 3 karakter!',
            'name.max' => 'Nama maksimal 150 karakter!',
            'username.required' => 'Username harap diisi!',
            'username.min' => 'Username minimal 8 karakter!',
            'username.max' => 'Username maksimal 150 karakter!',
            'username.unique' => 'Username sudah digunakan!',
            'role.required' => 'Role harap diisi!',
            'role.regex' => 'Role tidak valid!',
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = Hash::make('admin123');
            if ($request->role == 1) {
                $user->role_id = 1;
            } else {
                $user->role_id = 2;
            }
            $user->save();
            return $this->backWithSuccess('admin.index', 'Berhasil menambahkan admin! | Username : ' . $request->username . ' Password : admin123');
        } catch (\Throwable $th) {
            return $this->backWithError('admin.create', 'Terdapat kesalahan! | Code:500 <br>' . $th);
        }
    }

    public function edit($id)
    {
        $admin = User::query()->where('id', $id)->first();
        if (!$admin) return $this->backWithError('admin.index', 'Admin tidak ditemukan!');
        if ($admin->id == 1) return $this->backWithError('admin.index', 'Admin developer tidak dapat diubah!');
        // $roles = Role::query()->where('id', '1')->orWhere('id', '2')->get();
        // return Response::json($roles);
        return view('admin.admins.edit', compact('admin'));
    }

    public function put(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if (!$user) return $this->backWithError('admin.index', 'Admin tidak ditemukan!');
        if ($user->id == 1) return $this->backWithError('admin.index', 'Admin tidak dapat diubah!');
        $request->validate([
            'name' => 'required|min:3|max:150',
            'username' => 'required|min:3|max:150|unique:users,username,' . $id,

        ], [
            'name.required' => 'Nama harap diisi!',
            'name.min' => 'Nama minimal 3 karakter!',
            'name.max' => 'Nama maksimal 150 karakter!',
            'username.required' => 'Username harap diisi!',
            'username.min' => 'Username minimal 8 karakter!',
            'username.max' => 'Username maksimal 150 karakter!',
            'username.unique' => 'Username sudah digunakan!',

        ]);

        if ($user->id != Auth::user()->id && $user->role_id == 1) {
            $request->validate([
                'role' => 'required|regex:/^[12]$/',
            ], [
                'role.required' => 'Role harap diisi!',
                'role.regex' => 'Role tidak valid!',
            ]);
        }

        // return Response::json($request->all());
        try {
            $data = [
                'name' => $user->name,
                'username' => $user->username,
                'role_id' => $user->role_id,
            ];
            if ($request->name != $user->name) $data['name'] = $request->name;
            if ($request->username != $user->username) $data['username'] = $request->username;
            // if ($user->id != Auth::user()->id && $user->role_id == 1) {
            if ($request->role) if ($request->role != $user->role_id) $data['role_id'] = $request->role;
            // }
            $user->update($data);
            return $this->backWithSuccess('admin.index', 'Berhasil mengubah data admin!');
        } catch (\Throwable $th) {
            return $th;
        }
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (!$user) return $this->backWithError('admin.index', 'Admin tidak ditemukan!');
        if ($user->id == 1 && $user->id == auth()->user()->id) return $this->backWithError('admin.index', 'Admin tidak dapat dihapus!');
        try {
            $user->delete();
            return $this->backWithSuccess('admin.index', 'Berhasil menghapus admin!');
        } catch (\Throwable $th) {
            return $this->backWithError('admin.index', 'Terdapat kesalahan! | Code:500 <br>' . $th);
        }
    }
}
