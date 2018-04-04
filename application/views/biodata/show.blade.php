@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Biodata Saya dari Array</h4>
                    <p class="card-text">{{ $biodata_array['nama'] }}</p>
                    <hr>
                    <p class="card-text">{{ $biodata_array['nim'] }}</p>
                    <hr>
                    <p class="card-text">{{ $biodata_array['alamat'] }}</p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Biodata Saya dari Object</h4>
                    <p class="card-text">{{ $biodata_object->nama }}</p>
                    <hr>
                    <p class="card-text">{{ $biodata_object->nim }}</p>
                    <hr>
                    <p class="card-text">{{ $biodata_object->alamat }}</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Biodata Saya dari Query Builder Array</h4>
                    <p class="card-text">{{ $biodata_query_array['nama'] }}</p>
                    <hr>
                    <p class="card-text">{{ $biodata_query_array['nim'] }}</p>
                    <hr>
                    <p class="card-text">{{ $biodata_query_array['alamat'] }}</p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Biodata Saya dari Query Builder Object</h4>
                    <p class="card-text">{{ $biodata_query_object->nama }}</p>
                    <hr>
                    <p class="card-text">{{ $biodata_query_object->nim }}</p>
                    <hr>
                    <p class="card-text">{{ $biodata_query_object->alamat }}</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection