<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function profile(){
        return view('profile');
    }
    

    public function contact(){
        return view('contact');
    }

    public function status($nama='Amelia', $status='cari jodoh'){
        return view('status', ['nama'=>$nama], ['status'=>$status]);
    }

    public function form(){
        return view('form');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $gender = $request->input('gender');
        $umur = $request->input('umur');
        $agama = $request->input('agama');
        $ketertarikan = $request->input('ketertarikan');
        return view('hasil', ['nama'=>$nama, 'gender'=>$gender, 
        'umur'=>$umur, 'agama'=>$agama, 'ketertarikan'=>$ketertarikan]);
    }
}
