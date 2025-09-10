<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
{
    public function log()
    {
        return view("auth.login");
    }

    public function reg()
    {
        return view("auth.register");
    }

        public function logged(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string',
            'password' => 'required|min:6',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            // Authentication successful
            return redirect()->route('home')->with('success', 'Login successfull');
        }

       return redirect()->route('log')->with('error', 'Invalid credentials');
    }

    /**
     * Handle the registration request.
     */
    public function up(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Authenticate the user after registration
        Auth::login($user);

        // Return a success response
        return redirect()->route('log')->with('success', 'Register successfull');
    }

}
