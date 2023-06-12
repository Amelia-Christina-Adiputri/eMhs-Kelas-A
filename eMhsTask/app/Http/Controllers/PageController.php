<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class PageController extends Controller
{
    public function home(){
        return view('home', ['key'=>'Home']);
    }
    public function profile(){
        return view('profile', ['key'=>'Profile']);
    }
    public function mahasiswa(){
        $mhs = Mahasiswa::orderBy('id', 'desc')->paginate(10);
        return view('mahasiswa', ['key'=>'Mahasiswa', 'mhs'=>$mhs]);
    }
    public function contact(){
        return view('contact', ['key'=>'Contact']);
    }
    public function search(Request $request){
        $cari = $request->q;
        $mhs = Mahasiswa::where(function($find)use($cari) 
            {
                $find->where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%');
            }
        ) ->orderBy('id', 'desc')->paginate(10);
        $mhs->appends($request->all());
        return view('mahasiswa', ['key'=>'Mahasiswa', 'mhs'=>$mhs]);
    }
    public function formadd(){
        return view('formadd', ['key'=>'Mahasiswa']);
    }
    public function save(request $request){
        $minat=implode(",",$request->get('minat'));
        Mahasiswa::create([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'prodi'=>$request->prodi,
            'minat'=>$minat
        ]);
        return redirect('/mahasiswa')->with('alert', 'Data telah berhasil ditambahkan!');
    }
    Public function edit($id){
        $mhs = Mahasiswa::find($id);
        return view('formedit', ['key'=>'Mahasiswa', 'mhs'=>$mhs]);
    }
    Public function update($id, Request $request){
        $minat=implode(",",$request->minat);
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
        $mhs->save();
        return redirect('mahasiswa')->with('alert', 'Data telah berhasil diubah!');
    }
    Public function delete($id){
        $mhs=Mahasiswa::find($id);
        $mhs->delete();
        return redirect('mahasiswa')->with('alert', 'Data telah berhasil dihapus!');
    }

    Public function taskindex(){
        return view('taskindex');
    }
}