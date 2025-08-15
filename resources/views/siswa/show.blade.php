<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show siswa</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: #fff7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff0f6;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(255, 182, 217, 0.5);
            text-align: center;
            max-width: 300px;
        }
        .card h1 {
            color: #ff6fae;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .card img {
            border-radius: 50%;
            border: 4px solid #ffb6d9;
            box-shadow: 0 0 10px #ffd1e8;
            margin-bottom: 20px;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .info {
            background: white;
            color: #ff69b4;
            padding: 10px;
            margin: 8px 0;
            border-radius: 12px;
            font-size: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
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
