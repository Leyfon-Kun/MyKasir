<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\array_marge;

class AuthController extends Controller
{
    public function loginindex()
    {
        return view('auth.login');
    }

    public function logincheck()
    {
        Request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $checkAdmin = array_merge(Request()->except('_token'), ['role' => 'admin']);
        $checkUser = array_merge(Request()->except('_token'), ['role' => 'pegawai']);
        if (Auth::attempt($checkAdmin)) {
            return redirect('/admin/dashboard');
        } else if (Auth::attempt($checkUser)) {
            return redirect('/dashboard');
        } else return redirect()->back()->with('pesan', 'Username Atau Kata Sandi Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
