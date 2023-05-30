<?php
namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function create()
    {
        return view('admin.login.index');
    }

    public function store(Request $request)
    {
        
        $loginData = [
            'username' => $request->username,
            'password' => $request->password_1
        ];
        $request->validate([
            'username' => 'required',
            'password_1' => 'required'
        ], [
            'username.required' => 'Username tidak boleh kosong!',
            'password_1.required' => 'Password tidak boleh kosong!',
        ]);
        
        $user = User::where('username', $request->username)->first();
        
        if($user){
            if($user->role_id > 2) return abort(403, 'Unauthorized action.');
        }

        if (Auth::attempt($loginData)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        };
        return redirect()->route('login')->withErrors([
            'username' => 'Username dan Password tidak terdaftar',
            'password_1' => 'Username dan Password tidak terdaftar'
        ])->withInput($request->only('username', 'password_1'));

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