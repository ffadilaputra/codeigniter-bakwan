@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $blog->judul }}</h1>
            <p class="text-muted">Ditulis oleh <b>{{ $blog->penulis }}</b> pada <b>{{ date('d-m-Y', strtotime($blog->tanggal)) }}</b></p>
            <img class="img-thumbnail" src="{{ base_url('assets/upload/blog/' . $blog->file) }}">
            {!! $blog->isi !!}
        </div>
    </div>
@endsection