<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ------------------------
    // User Registration
    // ------------------------
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'nullable|email|unique:users',
            'password' => 'required|string|min:6',
            'full_name' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'role' => 'user', // default role is user
        ]);

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user
        ], 201);
    }

    // ------------------------
    // Customer Login
    // ------------------------
    public function customerLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)
                    ->where('role', 'user') // ensure role is user
                    ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Optional simple token for frontend
        $token = base64_encode($user->id . '|' . now());

        return response()->json([
            'message' => 'Customer logged in successfully',
            'user' => $user,
            'token' => $token
        ]);
    }

    // ------------------------
    // Admin Login
    // ------------------------
    public function adminLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)
                    ->where('role', 'admin') // ensure role is admin
                    ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Optional simple token for frontend
        $token = base64_encode($user->id . '|' . now());

        return response()->json([
            'message' => 'Admin logged in successfully',
            'user' => $user,
            'token' => $token
        ]);
    }
}
