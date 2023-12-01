<!doctype html>
@extends('layouts.app')
@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Portal Layanan Pengaduan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pemohon Sengketa
                </div>
                <div class="card-body">
                    <a href="/pemohon/tambah" class="btn btn-primary">Input Pemohon Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Pemohon</th>
                                <th>Alamat Pemohon</th>
                                <th>Tanggal Pelaporan</th>
                                <th>Deskripsi</th>
                                <th>Tanggal Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pemohon as $p)
                            <tr>
                                <td>{{ $p->nama_pemohon }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->tanggal_pelaporan }}</td>
                                <td>{{ $p->deskripsi }}</td>
                                <td>{{ $p->tanggal_selesai }}</td>
                                <td>
                                    <a href="/pemohon/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pemohon/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection