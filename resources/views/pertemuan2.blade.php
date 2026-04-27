<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2 - CSS & Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <center>
        <h2>Pertemuan 2</h2>
        <p><a href="{{ url('/pertemuan2/news') }}"><button class="btn btn-info mt-2">News (dengan CSS eksternal)</button></a></p>
        <p><a href="{{ url('/pertemuan2/news1') }}"><button class="btn btn-info mt-2">News 1 (dengan CSS internal)</button></a></p>
        <p><a href="{{ url('/') }}">← Kembali ke Home</a></p>
    </center>
</div>
</body>
</html>
