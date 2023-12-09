@extends('master')

@section('konten')

    <!-- Message Sukses Apabila Data Berhasil Ditambahkan -->
    @if (session('messagepes'))
        <div class="alert alert-success">
            {{session('messagepes')}}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pesanan</h6>
            <br>
            <a href="{{ route('pesanan.tambahpes') }}" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Buat Pesanan Baru</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Cucian</th>
                            <th>Tanggal Pesan</th>
                            <th>Jumlah(kg)</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($pesanan as $row)
                        <tr class="text-center">
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->pelanggan->nama }}</td>
                            <td>{{ $row->kategori->jenis_cucian }}</td>
                            <td>{{ $row->tanggal_pesan }}</td>
                            <td>{{ $row->jumlah }}</td>
                            <td>{{ $row->total_harga }}</td>
                            <td>
                                <a href="{{ route('pesanan.detailpes', ['id' => $row->id]) }}" class="btn btn-info btn-circle btn-sm">
                                    <span class="icon text-white-80">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </a>
                                <a href="{{ route('pesanan.editpes', ['id' => $row->id]) }}" class="btn btn-warning btn-circle btn-sm">
                                    <span class="icon text-white-80">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                                <form action="{{ route('pesanan.destroy', ['id' => $row->id]) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                                        <span class="icon text-white-80">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection