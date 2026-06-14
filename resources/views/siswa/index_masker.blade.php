@extends('template')
@section('title', 'Data Masker')
@section('konten')
    <center>
        <p>Cari Data Masker :</p>
        <form action="/masker_cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Masker .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>
        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Merk</th>
                <th>Stock</th>
                <th>Tersedia?</th>
                <th>Actions</th>
            </tr>
            @foreach ($masker as $m)
                <tr>
                    <td>{{ $m->merkmasker }}</td>
                    <td>{{ $m->stockmasker }}</td>
                    <td>{{ $m->tersedia }}</td>
                    <td>
                        <a href="/masker_edit/{{ $m->kodemasker }}" class="btn btn-warning">Edit</a>
                        |
                        <a href="/masker_hapus/{{ $m->kodemasker }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination justify-content-center" style="margin:20px 0">
            {{ $masker->links() }}
        </ul>
        <a href="/masker_tambah" class="btn btn-primary">Tambah Masker Baru</a>
    </center>
@endsection
