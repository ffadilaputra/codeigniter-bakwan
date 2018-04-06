@extends('template')

@section('content')
    <form action="{{ base_url('biodata/update/' . $biodata->id) }}" method="post">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" value="{{ old('nim', $biodata->nim) }}">
            @if($errors->has('nim'))
                <p class="text-danger">{{ $errors->first('nim') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ old('nama', $biodata->nama) }}">
            @if($errors->has('nama'))
                <p class="text-danger">{{ $errors->first('nama') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{ old('alamat', $biodata->alamat) }}">
            @if($errors->has('alamat'))
                <p class="text-danger">{{ $errors->first('alamat') }}</p>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection