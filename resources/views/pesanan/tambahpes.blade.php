@extends('master')
@section('konten')
    <!-- Tambah Pesanan Card Example -->
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Pesanan</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pesanan.add.tambahpes') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="pelanggan_id">Pelanggan:</label>
                            <select name="pelanggan_id" class="form-control">
                                @foreach($pelanggan as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                            @error('pelanggan_id')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kategori_paket_id">Jenis Cucian:</label>
                            <select name="kategori_paket_id" class="form-control" id="kategori_paket">
                                @foreach($kategori as $k)
                                    <option value="{{ $k->id }}" data-harga="{{ $k->harga }}">{{ $k->jenis_cucian }}</option>
                                @endforeach
                            </select>
                            @error('kategori_paket_id')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Masukkan Kembali Nama Anda:</label>
                            <input type="text" name="nama" class="form-control">
                            @error('nama')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_cucian">Masukkan Kembali Jenis Cucian yang Anda Pilih:</label>
                            <input type="text" name="jenis_cucian" class="form-control">
                            @error('jenis_cucian')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pesan">Tanggal Pesan:</label>
                            <input type="date" name="tanggal_pesan" class="form-control">
                            @error('tanggal_pesan')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah(kg):</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah" oninput="updateTotal()">
                            @error('jumlah')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Total Harga:</label>
                            <input type="number" name="total_harga" class="form-control" id="total_harga" readonly>
                            @error('total_harga')
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

    <script>
        function updateTotal() {
            var selectedQuantity = document.getElementById('jumlah').value;
            var selectedPrice = document.getElementById('kategori_paket').options[document.getElementById('kategori_paket').selectedIndex].getAttribute('data-harga');
            var totalHarga = selectedQuantity * selectedPrice;
            document.getElementById('total_harga').value = totalHarga || 0; // Menambah '|| 0' untuk menangani nilai NaN atau undefined
        }
    </script>
@endsection
