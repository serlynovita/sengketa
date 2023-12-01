<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
       
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pemohon - <strong>EDIT DATA PEMOHON</strong> - 
                </div>
                <div class="card-body">
                    <a href="/pemohon" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/pemohon/update/{{ $pemohon->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama Pemohon</label>
                            <input type="text" name="nama_pemohon" class="form-control" placeholder="Nama pemohon .." value="{{ $pemohon->nama_pemohon }}">
 
                            @if($errors->has('nama_pemohon'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_pemohon')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Pemohon ..">{{ $pemohon->alamat }}</textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal Pelaporan</label>
                            <input type="date" name="tanggal_pelaporan" class="form-control" placeholder="Tanggal Pelaporan Pemohon .." value="{{ $pemohon->tanggal_pelaporan }}">
 
                             @if($errors->has('tanggal_pelaporan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_pelaporan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Pemohon ..">{{ $pemohon->deskripsi }}</textarea>
 
                             @if($errors->has('deskripsi'))
                                <div class="text-danger">
                                    {{ $errors->first('deskrispi')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" class="form-control" placeholder="Tanggal Selesai Pemohon .." value="{{ $pemohon->tanggal_selesai }}">
 
                             @if($errors->has('tanggal_selesai'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_selesai')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>