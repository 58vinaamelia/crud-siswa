<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 550px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 5px;
        }
        p {
            text-align: center;
            color: #777;
            margin-bottom: 25px;
        }
        a {
            display: inline-block;
            margin-bottom: 15px;
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #333;
        }
        select, input[type="text"], input[type="email"],
        input[type="password"], input[type="tel"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }
        select:focus, input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 4px rgba(52,152,219,0.4);
        }
        small {
            color: red;
        }
        button {
            width: 100%;
            background: #3498db;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Halaman Tambah Siswa</h1>
        <p>Tambah Data Siswa</p>
        <a href="/">← Kembali</a>

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
                    <small>{{ $message }}</small>
                @enderror
            </div>

            {{-- Name --}}
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            {{-- NISN --}}
            <div>
                <label for="nisn">NISN</label>
                <input type="text" name="nisn" id="nisn" value="{{ old('nisn') }}">
                @error('nisn')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            {{-- Alamat --}}
            <div>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            {{-- No Handphone --}}
            <div>
                <label for="no_handphone">No Handphone</label>
                <input type="tel" name="no_handphone" id="no_handphone" value="{{ old('no_handphone') }}">
                @error('no_handphone')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            {{-- Photo --}}
            <div>
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" accept="image/*">
                @error('photo')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>

</body>
</html>
