<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tambah Siswa</title>
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
        p {
            text-align: center;
            color: #ff8da1;
            font-weight: bold;
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
        input[type="email"],
        input[type="tel"],
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
        input:focus,
        select:focus {
            border-color: #ff91af;
            box-shadow: 0 0 5px rgba(255, 145, 175, 0.5);
        }
        small {
            font-size: 13px;
        }
        small[style*="color: red"] {
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Tambah Siswa</h1>
        <p>Tambah Data Siswa</p>
        <a href="/">Kembali</a>

        <form action="/siswa/store" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Pilih Kelas --}}
            <div>
                <label for="clas_id">Kelas</label>
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
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- NISN --}}
            <div>
                <label for="nisn">Nisn</label>
                <input type="text" name="nisn" id="nisn" value="{{ old('nisn') }}">
                @error('nisn')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Alamat --}}
            <div>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                @error('password')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- No Handphone --}}
            <div>
                <label for="no_handphone">No Handphone</label>
                <input type="tel" name="no_handphone" id="no_handphone" value="{{ old('no_handphone') }}">
                @error('no_handphone')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Photo --}}
            <div>
                <label for="photo">Photo</label>
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
</body>
</html>
