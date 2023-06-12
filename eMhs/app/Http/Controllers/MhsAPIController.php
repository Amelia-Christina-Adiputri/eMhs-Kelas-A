<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
        'success'=>true,
        'message'=>'Data Berhasil ditampilkan',
        'data'=>$mhs
        ]);
    }

    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'prodi'=>$request->prodi,
            'minat'=>$request->minat
        ]);

        if($mhs)
        {
            return response()->json([
                'success'=>true,
                'message'=>'Data Berhasil ditambahkan'
            ],200);
        }else
        {
            return response()->json([
                'success'=>false,
                'message'=>'Data Gagal ditambahkan'
            ],400);
        }
    }

    Public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'prodi'=>$request->prodi,
            'minat'=>$request->minat
        ]);

        if($mhs)
        {
            return response()->json([
                'success'=>true,
                'message'=>'Data Berhasil diubah'
            ],200);
        }else
        {
            return response()->json([
                'success'=>false,
                'message'=>'Data Gagal diubah'
            ],400);
        }
    }

    Public function delete($id, Request $request)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        if($mhs)
        {
            return response()->json([
                'success'=>true,
                'message'=>'Data Berhasil dihapus'
            ],200);
        }else
        {
            return response()->json([
                'success'=>false,
                'message'=>'Data Gagal dihapus'
            ],400);
        }
    }
}

?>
