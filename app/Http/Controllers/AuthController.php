<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Menentukan apakah checkbox Remember Me dicentang
        $remember = $request->has('rememberMe');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            session()->flash('success', 'Selamat datang, ' . Auth::user()->name . '!');
            return redirect()->intended('/dashboard');
        }

        return back()-> with('error', 'Username dan password tidak sesuai.');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
