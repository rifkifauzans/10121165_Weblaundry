@extends('master')
@section('konten')
    <!-- Tambah Kategori Card Example -->
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.add.tambahkat') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Jenis Cucian</label>
                            <input type="text" name="jenis_cucian" class="form-control">
                            @error('jenis_cucian')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Waktu Kerja</label>
                            <input type="text" name="waktu_kerja" class="form-control">
                            @error('waktu_kerja')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control">
                            @error('harga')
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