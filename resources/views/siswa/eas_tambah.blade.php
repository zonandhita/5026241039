<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Soal nilai_peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">5026241039</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/pegawai">Pegawai</a></li>
                <li class="nav-item"><a class="nav-link" href="/sepatu">PR 1</a></li>
                <li class="nav-item"><a class="nav-link active" href="/eas">EAS</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- Jumbotron --}}
<div class="bg-primary text-white text-center py-5 mb-4">
    <h1 class="display-5 fw-bold">Kode Soal nilai_peserta</h1>
    <p class="lead">Tambah Data Nilai Peserta</p>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Form Tambah Data Nilai Peserta</h5>
                </div>
                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/eas_store" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">No Peserta</label>
                            <div class="col-sm-8">
                                <input type="text" name="nopeserta" class="form-control" maxlength="5" value="{{ old('nopeserta') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Nilai Teori</label>
                            <div class="col-sm-8">
                                <input type="text" name="nilaiteori" class="form-control" value="{{ old('nilaiteori') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Nilai Praktek</label>
                            <div class="col-sm-8">
                                <input type="text" name="nilaipraktek" class="form-control" value="{{ old('nilaipraktek') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="offset-sm-4 col-sm-8 d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                <a href="/eas" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
