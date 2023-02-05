<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        ], [
            'username.required' => 'Harap Isi  Username',
            'password.required' => 'Harap Isi Password'
        ]);

        $admin = array_merge(Request()->except('_token'), ['role' => 'admin']);
        $pegawai = array_merge(Request()->except('_token'), ['role' => 'pegawai']);

        if (Auth::attempt($admin)) {
            return redirect('/dashboard');
        } else if (Auth::attempt($pegawai)) {
            return redirect('/dashboard');
        } else return redirect()->back()->with('pesan', 'Username Atau Kata Sandi Tidak Dapat Di Temukan');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
