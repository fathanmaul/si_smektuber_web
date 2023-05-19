<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Query\UserQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email',
        ], errorMsg());

        if ($validate->fails()) {
            return Response::error('Validation failed', ['message' => $validate->errors()->first()]);
        }

        try {
            if (api()->user()->username != $request->username && UserQuery::findUsername($request->username) instanceof User) {
                return Response::error('Username already exists', [], 409);
            }

            if (api()->user()->email != $request->email && UserQuery::findEmail($request->email)) {
                return Response::error('Email already exists', [], 409);
            }

            $this->doUpdate($request);

            return Response::success(formatUser(), 'Profile updated successfully');
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function doUpdate(Request $request)
    {
        $user = api()->user();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;

        if (api()->user()->email != $request->email) {
            $user->email_verified_at = null;
        }

        $user->save();
    }

    public function updateAvatar(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ], errorMsg());

        if ($validate->fails()) {
            return Response::error('Validation failed', ['message' => $validate->errors()->first()]);
        }
        
        $mime = $request->file('avatar')->getMimeType();

        try {
            $user = api()->user();
            $user->avatar = $request->file('avatar')->storeAs('avatars', $user->id . '.' . explode('/', $mime)[1]);
            $user->save();

            return Response::success(formatUser(), 'Avatar updated successfully');
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }
}
