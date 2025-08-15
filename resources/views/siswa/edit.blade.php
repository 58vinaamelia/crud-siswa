<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #fffafc;
            margin: 0;
            padding: 0;
            color: #444;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(255, 182, 193, 0.4);
        }
        h1 {
            text-align: center;
            color: #ff69b4;
            margin-bottom: 10px;
        }
        a {
            display: inline-block;
            background-color: #ffb6c1;
            color: white;
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 12px;
            margin-bottom: 15px;
            transition: background-color 0.2s ease-in-out;
        }
        a:hover {
            background-color: #ff91af;
        }
        form {
            margin-top: 15px;
        }
        label {
            font-weight: bold;
            color: #ff7aa2;
        }
        input[type="text"],
        input[type="password"],
        input[type="file"],
        select {
            width: 100%;
            padding: 8px 10px;
            margin-top: 4px;
            margin-bottom: 8px;
            border: 2px solid #ffc0cb;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="file"]:focus,
        select:focus {
            border-color: #ff91af;
            box-shadow: 0 0 5px rgba(255, 145, 175, 0.5);
        }
        small {
            font-size: 13px;
        }
        small[style*="color:red"] {
            display: block;
            margin-top: -5px;
            margin-bottom: 5px;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            background-color: #ff8da1;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }
        button[type="submit"]:hover {
            background-color: #ff6f91;
        }
        img {
            display: block;
            margin: 0 auto 15px auto;
            border-radius: 50%;
            border: 2px solid #ffb6c1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Edit Siswa</h1>
        <h1>Edit Data Siswa</h1>
        <a href="/">Kembali</a>
        <img width="70" src="{{ asset('storage/'. $datauser->photo) }}">

        <form action="/siswa/update/{{ $datauser->id }}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="">Kelas</label>
            <select name="clas_id">
                @foreach ($clases as $clas)
                <option {{ $clas->id == $datauser->class_id ? 'selected' : '' }} value="{{ $clas->id }}">{{ $clas->name }}</option>
                @endforeach
            </select>
            @error('kelas_id')
                <small style="color:red">{{ $message }}</small>
            @enderror

            <label for="">Name</label>
            <input type="text" name="name" value="{{ $datauser->name }}">
            @error('name')
                <small style="color:red">{{ $message }}</small>
            @enderror

            <label for="">Nisn</label>
            <input type="text" name="nisn" value="{{ $datauser->nisn }}">
            @error('nisn')
                <small style="color:red">{{ $message }}</small>
            @enderror

            <label for="">Alamat</label>
            <input type="text" name="alamat" value="{{ $datauser->alamat }}">
            @error('alamat')
                <small style="color:red">{{ $message }}</small>
            @enderror

            <label for="">Email</label>
            <input type="text" name="email" value="{{ $datauser->email }}">
            @error('email')
                <small style="color:red">{{ $message }}</small>
            @enderror

            <label for="">Password</label>
            <input type="password" name="password">
            <small style="color:green">Abaikan jika tidak ingin diubah</small>
            @error('password')
                <small style="color:red">{{ $message }}</small>
            @enderror

            <label for="">No Handphone</label>
            <input type="text" name="no_handphone" value="{{ $datauser->no_handphone }}">
            @error('no_handphone')
                <small style="color:red">{{ $message }}</small>
            @enderror

            <label for="">Photo</label>
            <input type="file" name="photo">

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
