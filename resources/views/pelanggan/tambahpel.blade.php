@extends('master')
@section('konten')
    <!-- Tambah Pelanggan Card Example -->
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Pelanggan</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pelanggan.add.tambahpel') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                            @error('nama')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" name="no_telp" class="form-control">
                            @error('no_telp')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="box__left-form-group">
							<button type="submit" class="btn-login mt-1">
                                <span class="icon text-white-50"></span>Simpan
                            </button>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection