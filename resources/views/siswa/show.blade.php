@extends('layouts.app')
@section('title')
    <title>Detail Siswa</title>
@endsection
@section('content')
    <div class="card">
        <h1>Detail Siswa ✨</h1>

        {{-- profile siswa --}}
        <img src="{{ asset('storage/'.$datauser->photo) }}" alt="Foto Siswa">

        {{-- nama siswa --}}
        <div class="info">🧸 {{$datauser->name}}</div>

        {{-- nisn siswa --}}
        <div class="info">🎓 {{$datauser->nisn}}</div>

        {{-- alamat siswa --}}
        <div class="info">🏡 {{$datauser->alamat}}</div>

        {{-- email siswa --}}
        <div class="info">📧 {{$datauser->email}}</div>

        {{-- no handphone siswa --}}
        <div class="info">📱 {{$datauser->no_handphone}}</div>
    </div>
</body>
</html>
@endsection
