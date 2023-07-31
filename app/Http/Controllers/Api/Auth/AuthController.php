<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Response(): JsonResponse
    {
        return response()->json([
            'message' => 'ok'
        ], 200);
    }
}
