<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Human</title>
</head>
<body>
    <h1>Nama Human: {{ $human->nama }}</h1>
    
    <p>Berikut informasi tentang jantung human:</p>
    <ul>
        <li>Kode Jantung: {{ $human->heart->id }}</li>
        <li>Volume Jantung: {{ $human->heart->volume }}</li>
    </ul>
</body>
</html>