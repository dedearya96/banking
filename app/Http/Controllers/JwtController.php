<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UsersResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\JWT;

class JwtController extends Controller
{
    public function loginJwt(LoginRequest $request)
    {
        try {
            if (!$jwt_token = JWTAuth::attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid Email or Password'
                ], JsonResponse::HTTP_UNAUTHORIZED);
            }
        } catch (JWTException $e) {
            return response()->json([
                'error' => $e,
            ]);
        }
        return response()->json([
            'success' => true,
            'token' => $jwt_token,
            'users' => new UsersResource(auth()->user()),
        ]);
    }

    public function getCurrentUsers()
    {
        try {
            if (!$user = JwtAuth::parseToken()->authenticate()) {
                return response()->json([
                    'User Not Found'
                ], 404);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json([
                'Token Expired'
            ]);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json([
                'Token Invalid'
            ]);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json([
                'Token Absent'
            ]);
        }
        return new UsersResource($user);
    }
}
