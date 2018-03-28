@extends('template')

@section('content')
    <form action="{{ base_url('Beranda/update/' . $biodata->id) }}" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" value="{{ $biodata->nim }}">
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $biodata->nama }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ $biodata->alamat }}">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection