<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function Resposta()
    {
        return response()->json([
            'message' => 'ok'
        ], 200);
    }
}
