<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Otp;
use App\Query\UserQuery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ], errorMsg());

        if ($validate->fails()) {
            return Response::error('Validation failed', ['message' => $validate->errors()->first()]);
        }

        try {
            if (UserQuery::findUsername($request->username) instanceof \App\Models\User) {
                return Response::error('Username already exists', [], 409);
            }

            if (UserQuery::findEmail($request->email) instanceof \App\Models\User) {
                return Response::error('Email already exists', [], 409);
            }

            if ($user = UserQuery::create($request)) {
                $token = api()->login($user);

                return $this->respondWithToken($token);
            }

            return Response::error('Failed to register', [], 500);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $validate = Validator::make(request()->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ], errorMsg());

        if ($validate->fails()) {
            return Response::error('Validation failed', $validate->errors());
        }

        try {
            $credentials = request(['username', 'password']);

            if (UserQuery::findUsername($credentials['username']) === null) {
                return Response::error('Username not found', [], 401);
            }

            if (!$token = api()->attempt($credentials)) {
                return Response::error('Password is incorrect', [], 401);
            }

            return $this->respondWithToken($token);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        api()->logout();

        return Response::success([], 'Successfully logged out');
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(api()->refresh(), true);
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
            $user = UserQuery::findEmail(api()->user()->email);

            if (!Hash::check(request()->old_password, $user->password)) {
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

        try {
            $user = UserQuery::findEmail(request()->email);

            if ($user === null) {
                return Response::error('Email not found', [], 404);
            }

            return $this->sendResetPasswordEmail($user);
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
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

        // $user->sendPasswordResetNotification($token);
        Mail::to($user->email)->send(new \App\Mail\ForgotPassword($this->createOtp($user), $token));

        return Response::success([], 'Reset password email sent');
    }

    protected function createToken($user)
    {
        $token = app('auth.password.broker')->createToken($user);

        return $token;
    }

    public function otp()
    {
        try {
            $this->sendResetPasswordEmail(api()->user());
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    public function validateOtp()
    {
        $validate = Validator::make(request()->all(), [
            'otp' => 'required|numeric',
        ]);

        if ($validate->fails()) {
            return Response::error('Validation failed', $validate->errors());
        }

        try {
            $this->removeOtp();

            $otp = $this->getOtp();

            if ($otp === null) {
                return Response::error('OTP is invalid', [], 401);
            }

            Otp::where('code', request()->otp)->update([
                'is_valid' => false,
            ]);

            return Response::success([], 'OTP is valid');
        } catch (\Throwable $th) {
            return Response::internalServerError($th->getMessage());
        }
    }

    /**
     * Get the otp.
     *
     * @return null|\App\Models\Otp
     */
    protected function getOtp()
    {
        if (api()->user() != null) {
            $otp = Otp::where('user_id', api()->user()->id)
                ->where('code', request()->otp)
                ->where('expired_at', '>', Carbon::now())
                ->where('is_valid', true)
                ->first();
        } else {
            $otp = Otp::where('code', request()->otp)
                ->where('expired_at', '>', Carbon::now())
                ->where('is_valid', true)
                ->first();
        }
        return $otp;
    }

    protected function createOtp($user)
    {
        $otp = rand(1000, 9999);

        $this->removeOtp();

        Otp::create([
            'user_id' => $user->id,
            'code' => $otp,
            'expired_at' => Carbon::now()->addMinutes(5),
        ]);

        $this->sendOtpEmail($user, $otp);

        return $otp;
    }
    // add for sendOtpToEmail 
    protected function sendOtpEmail($user, $otp)
    {
        $data = [
                'otp' => $otp,
        ];
        
        Mail::send('mails.otp', $data, function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('OTP Email');
        });
        
        return Response::success([], 'OTP email sent');
    }
    
    protected function removeOtp()
    {
        Otp::where('expired_at', '<', Carbon::now())->delete();
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
            'expires_in' => api()->factory()->getTTL() * 1440,
        ];

        if (!$refresh) {
            $data['user'] = formatUser();
        }

        return Response::success($data);
    }
}
