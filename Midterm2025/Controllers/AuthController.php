<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm() { return view('auth.login'); }
    public function showSignupForm() { return view('auth.signup'); }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function signup(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('auth.login');
    }

    public function showForgotPasswordForm() { return view('auth.forgot-password'); }
    public function sendResetLinkEmail(Request $request) { /* Logic to send email */ }
    public function showResetForm($token) { return view('auth.reset-password', compact('token')); }
    public function reset(Request $request) { /* Logic to reset password */ }
}
