<?php

namespace App\Query;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * User Query
 */
class UserQuery
{
    /**
     * Find user by email
     * 
     * @param string $email
     * @return User|null|false
     */
    public static function findEmail($email)
    {
        try {
            return User::where('email', $email)->first();
        } catch (\Throwable $th) {
            return false;
        }
    }

    /**
     * Find user by username
     * 
     * @param string $username
     * @return User|null|false
     */
    public static function findUsername($username)
    {
        try {
            return User::where('username', $username)->first();
        } catch (\Throwable $th) {
            return false;
        }
    }

    /**
     * Create new user
     * 
     * @param array $data
     * @return User|false
     */
    public static function create(Request $request)
    {
        if (UserQuery::findEmail($request->email)) {
            return false;
        }

        return User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role_id' => Role::where('name', 'member')->first()->id,
            'password' => bcrypt($request->password),
        ]);
    }

    /**
     * Update user
     * 
     * @param User $user
     * @param array $data
     * @return User|false
     */
    public static function update(Request $request)
    {
        if (UserQuery::findEmail($request->email)) {
            return false;
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return $user;
    }
}
