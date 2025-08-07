<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\SiswaController;

class SiswaController extends Controller
{
  public function index() {
    $siswas = User::all(); // GANTI ini
    return view('siswa.index', compact('siswas'));

    }

    public function create(){
        $clases = Clas::all();
        return view('siswa.create', compact('clases'));
    }

    //fungsi store data siswa
    public function store (Request $request) {
    //validasi data
    $request->validate([
        'name'             => 'required',
        'nisn'             => 'required | unique:users,email',
        'alamat'           => 'required',
        'email'            => 'required | unique:users,email',
        'password'         => 'required',
        'no_handphone'     => 'required | unique:users,no_handphone',
    ]);

    $datasiswa_store =[
        'clas_id'          => $request->kelas_id,
        'name'             => $request->name,
        'nisn'             => $request->nisn,
        'alamat'           => $request->alamat,
        'email'            => $request->email,
        'password'         => $request->password,
        'no_handphone'     => $request->no_handphone,
    ];

    $datasiswa_store['photo'] =$request->file('photo')->store('profilesiswa', 'public');

    // masukan data ke tabel user
    User::create($datasiswa_store);

    //arahkan user ke halaman beranda
        return redirect('/');
    }

    //fungsi delete
    public function destroy($id){
        //cari user didalam database berdasarkan id yang dikirimkan
        $datauser = user::find($id);

        //lakukan delete pada data tersebut jika data user tersebut ada
        if ($datauser != null){
           Storage::disk('public')->delete($datauser->photo);
            $datauser->delete();
        }

        //kembalikan user ke halaman beranda / home
        return redirect('/');
    }
}
