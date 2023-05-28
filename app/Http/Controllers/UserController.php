<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role_id > 2) {
            Auth::logout();
            return $this->backWithError('login', 'Anda tidak memiliki akses!');
        }
        $user = User::where('users.id', $user->id)->join('role', 'role.id', '=', 'users.role_id')->select(['users.*', 'role.name as role_name'])->first();
        // return $user->id;
        return view('admin.Profile.index', compact('user'));
    }

    public function putProfil(Request $request)
    {
        // return Response::json($request->all());
        
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username,' . Auth::user()->id,
            'email' => 'required|email|max:255|unique:users,email,' . Auth::user()->id,
        ], [
            'name.required' => 'Nama tidak boleh kosong!',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter!',
            'username.required' => 'Username tidak boleh kosong!',
            'username.max' => 'Username tidak boleh lebih dari 255 karakter!',
            'username.unique' => 'Username sudah digunakan!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter!',
            'email.unique' => 'Email sudah digunakan!',
        ]);

        try {
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;

            $user->save();

            return $this->backWithSuccess('akun.index', 'Berhasil mengubah profil!');
        } catch (\Throwable $th) {
            return $this->backWithSuccess('akun.index', 'Gagal mengubah profil!' . $th);
        }
    }


    public function editPassword()
    {
        $user = Auth::user();
        if ($user->role_id > 2) {
            Auth::logout();
            return $this->backWithError('login', 'Anda tidak memiliki akses!');
        }
        return view('admin.Profile.edit-password');
    }

    public function putPassword(Request $request)
    {
        $user = Auth::user();
        if ($user->role_id > 2) {
            Auth::logout();
            return $this->backWithError('login', 'Anda tidak memiliki akses!');
        }
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ], [
            'old_password.required' => 'Password lama tidak boleh kosong!',
            'password.required' => 'Password baru tidak boleh kosong!',
            'password.confirmed' => 'Password baru tidak sama dengan konfirmasi password!',
            'password.min' => 'Password baru minimal 8 karakter!',
        ]);

        if(!password_verify($request->old_password, $user->password)){
            return $this->backWithError('akun.password.edit', 'Password lama tidak sesuai! Silahkan coba lagi!');
        }

        try{
            User::where('id', $user->id)->update([
                'password' => bcrypt($request->password),
            ]);

            return $this->backWithSuccess('akun.index', 'Berhasil mengubah password!');
        }catch(\Throwable $th){
            return $this->backWithError('akun.index', 'Gagal mengubah password!'.$th);
        }
    }
}
