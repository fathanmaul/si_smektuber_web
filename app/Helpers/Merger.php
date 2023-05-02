<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Merger
{
    public static function login($username, $password)
    {
        $user = User::where('username', $username)->first();
        // Auth::attempt(['username' => $username, 'password' => $password]);
        if ($user instanceof User) {
            if (self::hash($password, $user->password)) {
                return $user;
            } else {
                return "Password not match";
            }
        } else {
            return "Username not found";
        }
    }

    private static function hash($password, $hash)
    {
        return password_verify($password, $hash);
    }
}
