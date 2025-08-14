<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
        public function login()
        {
            // Handle user login logic here
            return view('auth.login');
        }

        public function authenticated(request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            
            $credentials = $request->only('email', 'password');

            if (auth()->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard'); // Redirect to intended page after login
            }
            return back()->withErrors([
                'loginError'=> 'Email atau password salah'
            ]);
        }

        public function logout()
        {
            auth()->logout();
            return redirect('/login')->with('message', 'Anda telah berhasil logout');
        }
}
