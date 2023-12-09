@extends('master')

@section('konten')
    <!-- Informasi Pesanan -->
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
        
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Informasi Pesanan</h6>
                </div>
                <div class="card-body text-center">
                    <p class="card-text" >ID    : {{ $pesanan->id }}</p>
                    <p class="card-text" >Nama    : {{ $pesanan->nama }}</p>
                    <p class="card-text" >Jenis Cucian    : {{ $pesanan->jenis_cucian }}</p>
                    <p class="card-text" >Tanggal Pesan   : {{ $pesanan->tanggal_pesan }}</p>
                    <p class="card-text" >Jumlah   : {{ $pesanan->jumlah }}</p>
                    <p class="card-text" >Total Harga  : {{ $pesanan->total_harga }}</p>
                <div class="card-footer text-center">
                    <a href="{{ route('pesanan') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>

    </div>

@endsection
