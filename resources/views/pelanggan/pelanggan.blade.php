@extends('master')

@section('konten')

    <!-- Message Sukses Apabila Data Berhasil Ditambahkan -->
    @if (session('messagepel'))
        <div class="alert alert-success">
            {{session('messagepel')}}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pelanggan</h6>
            <br>
            <a href="{{ route('pelanggan.tambahpel') }}" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Buat Pelanggan Baru</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($pelanggan as $row)
                        <tr class="text-center">
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->no_telp }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>
                                <a href="{{ route('pelanggan.detailpel', ['id' => $row->id]) }}" class="btn btn-info btn-circle btn-sm">
                                    <span class="icon text-white-80">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </a>
                                <a href="{{ route('pelanggan.editpel', ['id' => $row->id]) }}" class="btn btn-warning btn-circle btn-sm">
                                    <span class="icon text-white-80">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                                <form action="{{ route('pelanggan.destroy', ['id' => $row->id]) }}" method="post" style="display: inline;">
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