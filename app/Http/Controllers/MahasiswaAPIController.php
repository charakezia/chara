<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaAPIController extends Controller
{
    public function all()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Ditampilkan',
            'data' => $mahasiswa
        ], 200);
    }

    public function create(Request $request)
    {
        $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);

        if($mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Disimpan'
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Disimpan'
            ], 401);
        }
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::whereId($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);

        if($mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Diubah'
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Diubah'
            ], 400);
        }
        
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        if($mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Dihapus'
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Dihapus'
            ], 400);
        }
        
    }

}
