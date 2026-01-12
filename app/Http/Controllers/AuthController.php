<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'username' => $request->login,
            'password' => $request->password,
        ])) {
            $request->session()->regenerate();

            if (auth()->user()->role === 'admin') {
                return redirect('/admin/home');
            }

            return redirect('/siswa/home');
        }

        return back()->with('error', 'Login gagal');
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
