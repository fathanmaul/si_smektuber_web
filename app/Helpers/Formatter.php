<?php

use App\Models\Role;

/**
 * Format user model to array for response json
 * 
 * @return array
 */
function formatUser()
{
    $avatar = (api()->user()->avatar) ? asset('storage/' . api()->user()->avatar) : null;

    $user = [
        'name' => api()->user()->name,
        'username' => api()->user()->username,
        'email' => api()->user()->email,
        'email_verified_at' => api()->user()->email_verified_at != null ? true : false,
        'role' => Role::where('id', api()->user()->role_id)->first()->name,
        'avatar' => $avatar,
    ];

    return $user;
}

/**
 * Get error message for validation
 * 
 * @return array
 */
function errorMsg()
{
    return [
        // auth
        'name.required' => 'Name is required',
        'username.required' => 'Username is required',
        'username.string' => 'Username must be string',
        'email.required' => 'Email is required',
        'email.email' => 'Email is not valid',
        'password.required' => 'Password is required',
        'password.min' => 'Password must be at least 6 characters',

        // user
        'avatar.required' => 'Avatar is required',
        'avatar.image' => 'Avatar must be an image',
        'avatar.mimes' => 'Avatar must be a file of type: jpeg, png, jpg, svg',
        'avatar.max' => 'Avatar may not be greater than 2048 kilobytes',
    ];
}

if (!function_exists('api')) {
    /**
     * Get the available auth instance (API).
     *
     * @return \Illuminate\Contracts\Auth\Factory|\Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard|mixed
     */
    function api()
    {
        return auth('api');
    }
}