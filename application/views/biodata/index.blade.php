@extends('template')

@section('content')

    <a class="btn btn-primary" href="{{ base_url('beranda/create') }}">Tambah</a>
    <br><br>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-inverse|thead-default">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($biodata as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->nim }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" onclick="window.location='{{ base_url('beranda/edit/' . $value->id)  }}'" class="btn btn-warning">Ubah</button>
                            <button type="button" onclick="window.location='{{ base_url('beranda/delete/' . $value->id)  }}'" class="btn btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection