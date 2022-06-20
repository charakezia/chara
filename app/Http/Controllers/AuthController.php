<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\user;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function formulir_user()
    {
        return view('formulir_user');
    }

    public function simpan_user(Request $request)
    {
        $user = User::create([
            'name'=>$request -> name,
            'email'=>$request -> email,
            'password'=> Hash::make($request -> password)
        ]);
        return redirect('/user');
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view('edituser', ['user' => $user]);
    }

    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
        $user->nama = $request->name;
        $email->email = $request->email;
        $user->save();
        return redirect('/user')->with('alert', 'Berhasil diubah');
    }

    public function hapus_user($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $user = User::where('nama', 'like', '%'.$cari.'%')->orWhere('email', 'like', '%'.$cari.'%')->paginate(10);
        return view('user', ['user'=>$user], ['cek'=>'user']);
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if(!Auth::attempt(['email' => $request->email, 'password' =>$request->password]))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/mahasiswa');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');

    }
}
