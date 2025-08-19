@extends('layouts.app')
@section('title')
    <title>Create Siswa</title>
@endsection
@section('content')
    <div class="container">
        <h1>Halaman Tambah Siswa</h1>
        <p>Tambah Data Siswa</p>
        <a href="/">Kembali</a>

        <form action="/siswa/store" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Pilih Kelas --}}
            <div>
                <label for="clas_id">Kelas</label><br>
                <select name="clas_id" id="clas_id">
                    @foreach ($clases as $clas)
                        <option value="{{ $clas->id }}">{{ $clas->name }}</option>
                    @endforeach
                </select>
                @error('clas_id')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Name --}}
            <div>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- NISN --}}
            <div>
                <label for="nisn">Nisn</label><br>
                <input type="text" name="nisn" id="nisn" value="{{ old('nisn') }}">
                @error('nisn')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Alamat --}}
            <div>
                <label for="alamat">Alamat</label><br>
                <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password">
                @error('password')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- No Handphone --}}
            <div>
                <label for="no_handphone">No Handphone</label><br>
                <input type="tel" name="no_handphone" id="no_handphone" value="{{ old('no_handphone') }}">
                @error('no_handphone')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Photo --}}
            <div>
                <label for="photo">Photo</label><br>
                <input type="file" name="photo" id="photo" accept="image/*">
                @error('photo')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Tombol Submit --}}
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
