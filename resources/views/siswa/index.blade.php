<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #fffafc;
            color: #444;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(255, 182, 193, 0.4);
        }
        h1 {
            text-align: center;
            color: #ff69b4;
            margin-bottom: 20px;
        }
        h2 {
            color: #ff8da1;
            margin-bottom: 10px;
        }
        a[href*="create"] {
            display: inline-block;
            background-color: #ffb6c1;
            color: white;
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 15px;
            font-weight: bold;
            margin-bottom: 15px;
            transition: background-color 0.2s ease-in-out;
        }
        a[href*="create"]:hover {
            background-color: #ff91af;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            border-radius: 15px;
            overflow: hidden;
            font-size: 15px;
        }
        thead {
            background-color: #ffd6e7;
        }
        thead th {
            padding: 12px;
            text-align: center;
            color: #333;
        }
        tbody tr:nth-child(even) {
            background-color: #fff0f5;
        }
        tbody td {
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }
        td img {
            border-radius: 50%;
            border: 2px solid #ffb6c1;
        }
        /* Semua tombol */
        .option-links a {
            display: inline-block;
            color: white;
            text-decoration: none;
            padding: 6px 10px;
            margin: 3px;
            border-radius: 12px;
            font-size: 14px;
            transition: background-color 0.2s ease-in-out;
        }
        /* Tombol khusus */
        .btn-delete { background-color: #ff6f91; }
        .btn-delete:hover { background-color: #ff4d73; }
        .btn-edit { background-color: #ff9a76; }
        .btn-edit:hover { background-color: #ff7a4d; }
        .btn-detail { background-color: #6bcfff; }
        .btn-detail:hover { background-color: #4dbaff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Beranda</h1>

        <div class="list-data-siswa">
            <a href="{{ url('clas') }}">Menu kelas</a> | <a href="{{ url('/clas/siswa') }}">Menu Siswa</a>
            <h2>List Data Siswa</h2>
            <a href="{{ url('siswa/create') }}">Tambah</a>
            <table border="1">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Name</th>
                        <th>Kelas</th>
                        <th>Nisn</th>
                        <th>Alamat</th>
                        <th colspan="3">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td><img src="{{ asset('storage/' . $siswa->photo) }}" alt="" width="70"></td>
                        <td>{{ $siswa->name }}</td>
                        <td>{{ $siswa->clas->name ?? '-' }}</td>
                        <td>{{ $siswa->nisn }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td class="option-links">

                            <!-- Tombol Delete -->
                            <a href="#"
                               class="btn-delete"
                               onclick="event.preventDefault();
                               if(confirm('Apakah kamu yakin ingin menghapus data ini?')) {
                                   document.getElementById('delete-form-{{ $siswa->id }}').submit();
                               }">
                                Delete
                            </a>

                            <form id="delete-form-{{ $siswa->id }}"
                                  action="{{ route('siswa.destroy', $siswa->id) }}"
                                  method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            <!-- Tombol Edit -->
                            <a href="{{ url('/siswa/edit/'.$siswa->id) }}" class="btn-edit">Edit</a>

                            <!-- Tombol Detail -->
                            <a href="{{ url('/siswa/show/' . $siswa->id) }}" class="btn-detail">Detail</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
