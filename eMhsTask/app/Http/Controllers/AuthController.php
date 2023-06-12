<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view ('register');
    }

    public function simpan(Request $request)
    {
        User::create([
            'nik_user'=>$request->nik,
            'nama_user'=>$request->nama,
            'no_hp'=>$request->no_hp,
            'password'=>Hash::make($request->password)
        ]);
        return redirect('/');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if(Auth::attempt([
            'nik_user'=>$request->nik,
            'password'=>$request->password
        ]))
        {
            return redirect('/home');
        } else{
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
