<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status Mahasiswa</title>
</head>
<body>
    @foreach ($mahasiswas as $mahasiswa)
        <h1>Nama: {{ $mahasiswa['nama'] }}</h1>
    
        @if($mahasiswa['status'] == 'Aktif')
            <p style='color: green;'>Status: {{ $mahasiswa['status'] }}</p>
        @elseif($mahasiswa['status'] == 'Tidak Aktif')
            <p style='color: red;'>Status: {{ $mahasiswa['status'] }}</p>
        @else
            <p style='color: yellow;'>Status: {{ $mahasiswa['status'] }}</p>
        @endif
    @endforeach

    @include('component.buttonBackToHome')
</body>
</html>

