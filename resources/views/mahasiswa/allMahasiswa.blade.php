<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Mahasiswa</title>
</head>
<body>
    @foreach ($mahasiswas as $mahasiswa)
        <h1>Nama : {{ $mahasiswa['nama'] }}</h1>
        <p>Status : {{ $mahasiswa['status'] }}</p>
    @endforeach
</body>
</html>

