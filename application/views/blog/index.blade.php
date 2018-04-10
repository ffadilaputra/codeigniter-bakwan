@extends('template')

@section('content')
    <a class="btn btn-primary" href="{{ base_url('blog/create') }}">Tulis artikel baru</a>
    <hr>
    @foreach($blog as $value)
        <div class="row mt-3 mb-3">
            <div class="col-md-4">
                <img class="img-fluid img-thumbnail" src="{{ base_url('assets/upload/blog/' . $value->file) }}" alt="{{ $value->judul }}">
            </div>
            <div class="col-md-8">
                <div class="mb-2">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="mb-0 float-left">{{ $value->judul }}</h3>

                            <div class="btn-group float-right">
                                <a class="btn btn-warning" href="{{ base_url('blog/edit/' . $value->id) }}">Ubah</a>
                                <a class="btn btn-danger" href="{{ base_url('blog/delete/' . $value->id) }}">Hapus</a>
                            </div>

                        </div>
                    </div>
                    <small class="text-muted">Ditulis oleh <b>{{ $value->penulis }}</b> pada <b>{{ date('d-m-Y', strtotime($value->tanggal)) }}</b></small>
                </div>

                <p class="text-muted">{{ strip_tags($value->isi) }}</p>

                <a class="btn btn-success" href="{{ base_url('blog/show/' . $value->id) }}">Selengkapnya</a>
            </div>
        </div>
        <hr>
    @endforeach
@endsection