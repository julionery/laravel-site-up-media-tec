<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthApiController extends Controller
{
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => true,
                    'message' => 'Email ou Senha inválidos!']);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => true,
                'message' => 'could_not_create_token']);
        }

        // all good so return the token
        $error = false;
        $user_id = auth()->user()->id;
        return response()->json(compact('error', 'user_id', 'token'));
    }

    public function refreshToken(Request $request)
    {
        if (!$token = $request->get('token'))
            return response()->json(['error' => true,
                'message' => 'token_not_send']);

        try {
            $token = JWTAuth::refresh($token);
        } catch (TokenInvalidException $ex) {
            return response()->json(['error' => true,
                'message' => 'token_invalid']);
        }

        return response()->json(compact('token'));
    }

}
