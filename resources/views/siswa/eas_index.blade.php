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
    <p class="lead">Data Nilai Peserta Ujian</p>
</div>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Daftar Nilai Peserta</h4>
        <a href="/eas_tambah" class="btn btn-primary">+ Tambah Data</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata-rata</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($nilaiPeserta as $data)
                @php
                    $rata  = ($data->nilaiteori + $data->nilaipraktek) / 2;
                    $lulus = $rata >= 75;
                @endphp
                <tr>
                    <td>{{ $data->ID }}</td>
                    <td>{{ $data->nopeserta }}</td>
                    <td>{{ $data->nilaiteori }}</td>
                    <td>{{ $data->nilaipraktek }}</td>
                    <td>{{ $rata }}</td>
                    <td style="{{ $lulus ? 'background-color:green;color:white;font-weight:bold;' : 'background-color:red;color:white;font-weight:bold;' }}">
                        {{ $lulus ? 'Lulus' : 'Gagal' }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
