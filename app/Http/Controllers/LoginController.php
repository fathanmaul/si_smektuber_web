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
        // dd(Auth::user());
        return view('login.index');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'exists' => ':attribute tidak ditemukan!'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
            // dd(auth()->user());
        }

        return redirect()->route('login')->with('flash', [
            'type' => 'danger',
            'message' => 'Username atau Password Salah!',
        ]);



        // dd('Berhasil Login');
        // $credentials = $request->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ], [
        //     'required' => ':attribute tidak boleh kosong!',
        //     'exists' => ':attribute tidak ditemukan!'
        // ]);

        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }

    }
    public function destroy()
    {
        try {
            Auth::logout();
            return redirect()->route('login');
        } catch (Exception $e) {        
            dd($e->getMessage());   
        }
    }
}
