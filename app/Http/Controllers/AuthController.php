<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function check(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        var_dump($validated);
        if (Auth::attempt($validated)) {
            return redirect()->route('dashboard.home');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah.');
        }
    }
}
