<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskAPIController extends Controller
{
    public function create(Request $request)
    {
        $tsk = Task::create([
            'nama'=>$request->nama,
            'judul_task'=>$request->judul_task,
            'deskripsi_task'=>$request->deskripsi_task
        ]);

        if($tsk)
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

    public function read()
    {
        $tsk = Task::all();
        return response()->json([
        'success'=>true,
        'message'=>'Data Berhasil ditampilkan',
        'data'=>$tsk
        ]);
    }

    Public function update($id, Request $request)
    {
        $tsk = Task::find($id)->update([
            'nama'=>$request->nama,
            'judul_task'=>$request->judul_task,
            'deskripsi_task'=>$request->deskripsi_task
        ]);

        if($tsk)
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
        $tsk = Task::find($id);
        $tsk->delete();

        if($tsk)
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
