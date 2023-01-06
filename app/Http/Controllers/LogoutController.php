<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class LogoutController extends Controller
{
    protected $jwt;

    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    public function logout(Request $request)
    {
        $this->jwt->parseToken()->invalidate();
        return response()->json([
            'success' => true,
            'message' => 'User logout successfully'
        ], 200);
    }
}
