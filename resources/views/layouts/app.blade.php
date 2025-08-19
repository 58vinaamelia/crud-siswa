<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{  asset('assets/style.css')}}">


    <style>
    </style>
</head>
<body>
    <div>
        <a href="/">Menu SIswa</a>
        |
        <a href="/clas">Menu Kelas</a>
    </div>
    <hr>
    @yield('content')
</body>
</html>
