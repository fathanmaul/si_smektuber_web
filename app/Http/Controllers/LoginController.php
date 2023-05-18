<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function create()
    {
        return view('admin.login.index');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password_1' => 'required'
        ], [
            'username.required' => 'Username tidak boleh kosong!',
            'password_1.required' => 'Password tidak boleh kosong!',
        ]);

        $loginData = [
            'username' => $request->username,
            'password' => $request->password_1
        ];

        if (Auth::attempt($loginData)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        };

        // return redirect()->route('login')->with('flash', [
        //     'type' => 'danger',
        //     'message' => 'Username atau Password Salah!',
        //     'value' => $request->username   
        // ]);

        return redirect()->route('login')->withErrors([
            'username' => 'Username dan Password tidak terdaftar'
        ])->withInput($request->only('username'));

    }
    public function destroy()
    {
        try {
            Auth::logout();
            return $this->backWithSuccess('login', 'Anda berhasil logout!');
        } catch (Exception $e) {        
            dd($e->getMessage());   
        }
    }
}