<?php

namespace App\Query;

/**
 * User Query
 */
class UserQuery
{
    /**
     * Find user by email
     * 
     * @param string $email
     * @return \App\Models\User|null
     */
    public static function findEmail($email)
    {
        return \App\Models\User::where('email', $email)->first();
    }

    /**
     * Find user by username
     * 
     * @param string $username
     * @return \App\Models\User|null
     */
    public static function findUsername($username)
    {
        return \App\Models\User::where('username', $username)->first();
    }

    /**
     * Create new user
     * 
     * @param array $data
     * @return \App\Models\User
     */
    public static function create(\Illuminate\Http\Request $request)
    {
        return \App\Models\User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role_id' => \App\Models\Role::where('name', 'member')->first()->id,
            'password' => bcrypt($request->password),
        ]);
    }

    /**
     * Update user
     * 
     * @param \App\Models\User $user
     * @param array $data
     * @return \App\Models\User|false
     */
    public static function update(\Illuminate\Http\Request $request)
    {
        if (UserQuery::findEmail($request->email)) {
            return false;
        }

        $user = new \App\Models\User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return $user;
    }
}
