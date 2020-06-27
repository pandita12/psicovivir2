<?php

namespace App\Http\Controllers;

use Auth;
use JWTAuth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
	    public function register(Request $request)
            {
                $v = Validator::make($request->all(), [
                	'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'password'  => 'required|min:3|confirmed',
                ]);
                if ($v->fails())
                {
                    return response()->json([
                        'status' => 'error',
                        'errors' => $v->errors()
                    ], 422);
                }
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->save();
                return response()->json(['status' => 'success'], 200);
            }

    public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if ( ! $token = JWTAuth::attempt($credentials)) {
                    return response([
                        'status' => 'error',
                        'error' => 'invalid.credentials',
                        'msg' => 'Credenciales invalidades, intenta de nuevo.'
                    ], 400);
            }

            return response([
                    'status' => 'success',
                    
                ])
                ->header('Authorization', $token);
        }

        public function user(Request $request)
            {
                $user = User::find(Auth::user()->id);

                return response([
                        'status' => 'success',
                        'data' => $user
                    ]);
            }

    public function refresh()
        {
            return response([
                    'status' => 'success'
                ]);
        }

    public function logout()
    
    {
        JWTAuth::invalidate();

        return response([
                'status' => 'success',
                'msg' => 'Logged out Successfully.',
                
            ], 200);
    }

}
