<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Query\UserQuery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $errorMessages = [
        'name.required' => 'Name is required',
        'username.required' => 'Username is required',
        'username.numeric' => 'Username must be numeric',
        'email.required' => 'Email is required',
        'email.email' => 'Email is not valid',
        'password.required' => 'Password is required',
        'password.min' => 'Password must be at least 6 characters',
    ];

    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ], $this->errorMessages);

        if ($validate->fails()) {
            return Response::error('Validation failed', ['message' => $validate->errors()->first()]);
        }

        if (UserQuery::findUsername($request->username)) {
            return Response::error('Nisn already exists', [], 409);
        }
        
        if (UserQuery::findEmail($request->email)) {
            return Response::error('Email already exists', [], 409);
        }

        if ($user = UserQuery::create($request)) {
            $token = auth()->login($user);
    
            return $this->respondWithToken($token);
        }

        return Response::internalServerError();
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $validate = Validator::make(request()->all(), [
            'username' => 'required|numeric',
            'password' => 'required|string',
        ], $this->errorMessages);

        if ($validate->fails()) {
            return Response::error('Validation failed', $validate->errors());
        }

        $credentials = request(['username', 'password']);

        if (UserQuery::findUsername($credentials['username']) === false) {
            return Response::internalServerError();
        }

        if (UserQuery::findUsername($credentials['username']) === null) {
            return Response::error('Username not found', [], 401);
        }

        if (! $token = auth()->attempt($credentials)) {
            return Response::error('Password is incorrect', [], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return Response::success([], 'Successfully logged out');
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh(), true);
    }

    public function updatePassword()
    {
        $validate = Validator::make(request()->all(), [
            'old_password' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validate->fails()) {
            return Response::error('Validation failed', $validate->errors());
        }

        if (request()->old_password === request()->password) {
            return Response::error('New password must be different from old password', [], 401);
        }

        try {
            $user = UserQuery::findEmail(auth()->user()->email);

            if ($user == false) {
                return Response::internalServerError();
            }

            if (! Hash::check(request()->old_password, $user->password)) {
                return Response::error('Old password is incorrect', [], 401);
            }

            $user->password = bcrypt(request()->password);
            $user->save();

            return Response::success([], 'Password changed', 202);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function forgotPassword()
    {
        $validate = Validator::make(request()->all(), [
            'email' => 'required|email',
        ]);

        if ($validate->fails()) {
            return Response::error('Validation failed', $validate->errors());
        }

        $user = UserQuery::findEmail(request()->email);

        if ($user === false) {
            return Response::internalServerError();
        }

        if ($user === null) {
            return Response::error('Email not found', [], 404);
        }

        return $this->sendResetPasswordEmail($user);
    }

    /**
     * Get the authenticated User.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\JsonResponse
     */
    protected function sendResetPasswordEmail($user)
    {
        $token = $this->createToken($user);

        $user->sendPasswordResetNotification($token);

        return Response::success([], 'Reset password email sent');
    }

    protected function createToken($user)
    {
        $token = app('auth.password.broker')->createToken($user);

        return $token;
    }

    public function otp()
    {
        return Response::success(['otp' => $this->createOtp(auth()->user())]);
    }

    protected function createOtp($user)
    {
        $otp = rand(1000, 9999);

        return $otp;
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token, $refresh = false)
    {
        $data = [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ];

        if (!$refresh) {
            $data['user']['name'] = auth()->user()->name;
            $data['user']['username'] = auth()->user()->username;
            $data['user']['email'] = auth()->user()->email;
            $data['user']['email_verified'] = auth()->user()->email_verified_at ? true : false;
            $data['user']['role'] = Role::where('id', auth()->user()->role_id)->first()->name;
        }

        return Response::success($data);
    }

    
}