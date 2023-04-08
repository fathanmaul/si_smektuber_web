<?php

use App\Models\Role;

/**
 * Format user model to array for response json
 * 
 * @return array
 */
function formatUser()
{
    $avatar = (auth()->user()->avatar) ? asset('storage/' . auth()->user()->avatar) : null;

    $user = [
        'name' => auth()->user()->name,
        'username' => auth()->user()->username,
        'email' => auth()->user()->email,
        'email_verified_at' => auth()->user()->email_verified_at,
        'role' => Role::where('id', auth()->user()->role_id)->first()->name,
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
        'username.numeric' => 'Username must be numeric',
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
