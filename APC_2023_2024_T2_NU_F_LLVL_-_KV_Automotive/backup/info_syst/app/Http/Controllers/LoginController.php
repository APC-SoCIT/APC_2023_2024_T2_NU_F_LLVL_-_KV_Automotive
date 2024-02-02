<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return response()->json(['redirect' => route('login')]);
        } else {
            // Authentication failed
            return response()->json(['message' => 'Invalid email or password'], 422);
        }
    }
}
