<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Mengambil data user
            $user = Auth::user();
            return response()->json([
                'message' => 'Login successful',
                'type' => 'alert-success',
                'user' => [
                    'id' => $user->id,
                    'username' => $user->name, // atau sesuaikan field `username`
                    'email' => $user->email
                ]
            ]);
        }

        return response()->json(['message' => 'Email atau Password Salah !','type' => 'alert-danger',], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Logged out successfully']);
    }

    public function getUser()
    {
        $user = Auth::user();

        if ($user) {
            return response()->json([
                'id' => $user->id,
                'username' => $user->name, // atau sesuaikan field `username`
                'email' => $user->email
            ]);
        }

        return response()->json(['message' => 'Not authenticated'], 401);
    }
}
