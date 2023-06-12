<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){

        // $nama_depan = "Siti";
        // $nama_belakang = "AAA";
        // return view('user', ['namadpn'=>$nama_depan, 'namablk'=>$nama_belakang]);

        $user = [
            [
                "id" => 1,
                "nama" => "Siti"
            ],
            [
                "id" => 2,
                "nama" => "Jhon"
            ]
        ];
        return view('user', ['user'=>$user]);
        // return dd($user);
    }

    public function product($category, $any){
        return view('product', ['category'=>$category], ['any'=>$any]);
    }

    public function form(){
        return view('form');
    }

    public function proses(Request $request){
        $teks = $request->input('teks');
        return view('hasil', ['teks'=>$teks]);
    }
}
