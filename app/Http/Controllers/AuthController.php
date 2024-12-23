<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\Order;

class AuthController extends Controller
{
    // Register new user
    public function register(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if (User::where('email', $request->email)->exists()) {
            return response()->json([
                'error' => 'Email is already taken.'
            ], 400); // HTTP 400 Bad Request
        }
        // Create the new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Issue a token after registration
        $token = $user->createToken('catchyTat')->plainTextToken;

        // Log the response before returning
        Log::info('Registration successful', ['token' => $token]);

        return response()->json([
            'message' => 'Registration successful',
            'token' => $token,
        ], 201); // HTTP 201 Createds
    }



    // Login user
    public function login(Request $request)
    {
        // Validate input fields
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Retrieve only the email and password from the request
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // If authentication is successful, retrieve the user
            $user = Auth::user();

            // Generate a personal access token for the authenticated user
            $token = $user->createToken('catchyTat')->plainTextToken;

            // Return a success response with the token
            return response()->json([
                'message' => 'Login successful',
                'token' => $token
            ], 200); // HTTP 200 OK
        }

        // If authentication fails, return an error response
        return response()->json([
            'error' => 'Invalid credentials'
        ], 401); // HTTP 401 Unauthorized
    }

    // Get the authenticated user
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    // Logout user
    public function logout(Request $request)
    {
        $request->user()->tokens->each(function($token) {
            $token->delete();
        });

        return response()->json(['message' => 'Logged out successfully']);
    }
    public function userPage(){
        $user = auth()->user();
        $addresses = Address::where('user_id', Auth::id())->get();
        $orderList = Order::where('user_id', Auth::id())->get();

        return view('information.orderHistory',compact('user','addresses','orderList'));
    }
}
