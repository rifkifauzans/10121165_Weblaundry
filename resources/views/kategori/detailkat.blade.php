@extends('master')

@section('konten')
    <!-- Informasi Kategori Paket -->
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
        
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Informasi Kategori Paket</h6>
                </div>
                <div class="card-body text-center">
                    <p class="card-text" >ID            : {{ $kategori->id }}</p>
                    <p class="card-text">Jenis Cucian   : {{ $kategori->jenis_cucian }}</p>
                    <p class="card-text">Waktu Kerja    : {{ $kategori->waktu_kerja }}</p>
                    <p class="card-text">Harga          : {{ $kategori->harga }}</p>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('kategori') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>

    </div>

@endsection
