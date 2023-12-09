@extends('master')

@section('konten')
    <!-- Informasi Pelanggan -->
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
        
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Informasi Pelanggan</h6>
                </div>
                <div class="card-body text-center">
                    <p class="card-text" >ID    : {{ $pelanggan->id }}</p>
                    <p class="card-text">Nama   : {{ $pelanggan->nama }}</p>
                    <p class="card-text">No Telp: {{ $pelanggan->no_telp }}</p>
                    <p class="card-text">Alamat : {{ $pelanggan->alamat }}</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('pelanggan') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>

    </div>

@endsection
