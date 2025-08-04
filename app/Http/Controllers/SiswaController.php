<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\SiswaController;

class SiswaController extends Controller
{
    public function index() {
        return view('siswa.index');
    }

    public function create(){
        return view('siswa.create');
    }

    //fungsi store data siswa
    public function store (Request $request) {
    //validasi data
    $request->validate([
        'name'             => 'required',
        'nisn'             => 'required',
        'alamat'           => 'required',
        'email'            => 'required | unique:users,email',
        'password'         => 'required',
        'no_handphone'     => 'required',
    ]);

    $datasiswa_store =[
        'clas_id'          => $request->kelas_id,
        'photo'            => 'foto.jpg',
        'name'             => $request->name,
        'nisn'             => $request->nisn,
        'alamat'           => $request->alamat,
        'email'            => $request->email,
        'password'         => $request->password,
        'no_handphone'     => $request->no_handphone,
    ];
    // masukan data ke tabel user
    User::create($datasiswa_store);

    //arahkan user ke halaman beranda
        return redirect('/');
    }
}
