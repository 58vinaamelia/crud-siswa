<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1100px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .list-data-siswa h2 {
            margin-top: 0;
            color: #444;
        }
        a {
            text-decoration: none;
        }
        a[href*="create"] {
            display: inline-block;
            margin-bottom: 10px;
            background-color: #28a745;
            padding: 8px 12px;
            color: white;
            border-radius: 5px;
            transition: 0.3s;
        }
        a[href*="create"]:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        img {
            border-radius: 5px;
            object-fit: cover;
        }
        .option-links a {
            margin-right: 10px;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
        }
        /* Tombol Delete */
        .option-links a:first-child {
            background-color: #dc3545;
            color: white;
        }
        .option-links a:first-child:hover {
            background-color: #c82333;
        }
        /* Tombol Edit */
        .option-links a:nth-child(3) {
            background-color: #ffc107;
            color: black;
        }
        .option-links a:nth-child(3):hover {
            background-color: #e0a800;
        }
        /* Tombol Detail */
        .option-links a:last-child {
            background-color: #17a2b8;
            color: white;
        }
        .option-links a:last-child:hover {
            background-color: #138496;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Beranda</h1>

        <div class="list-data-siswa">
            <h2>List Data Siswa</h2>
            <a href="{{ url('siswa/create') }}">Tambah Data Siswa</a>
            <table>
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Name</th>
                        <th>Kelas</th>
                        <th>NISN</th>
                        <th>Alamat</th>
                        <th colspan="3">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td><img src="{{ asset('storage/' . $siswa->photo) }}" alt="" width="70" height="70"></td>
                        <td>{{ $siswa->name }}</td>
                        <td>{{ $siswa->clas->name ?? '-' }}</td>
                        <td>{{ $siswa->nisn }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td class="option-links">

                            {{-- Tombol Delete --}}
                            <a href="#"
                               onclick="event.preventDefault();
                               if(confirm('Apakah kamu yakin ingin menghapus data ini?')) {
                                   document.getElementById('delete-form-{{ $siswa->id }}').submit();
                               }">
                                Delete
                            </a>

                            {{-- Form delete tersembunyi --}}
                            <form id="delete-form-{{ $siswa->id }}"
                                  action="{{ url('/siswa/' . $siswa->id) }}"
                                  method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            {{-- Tombol Edit --}}
                            <a href="{{ url('/siswa/edit/' . $siswa->id) }}">Edit</a>

                            {{-- Tombol Detail --}}
                            <a href="{{ url('/siswa/show/' . $siswa->id) }}">Detail</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
