@extends('master')

@section('konten')
    <h4>Selamat Datang <b>{{Auth::user()->username}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
    <br>
    <div class="row justify-content-center">

        <!-- Paket Cuci Komplit Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body text-center"> <!-- Added text-center class to center-align content -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Paket Cuci Komplit</div>
                            <img src="<?=url('/img/cuci_komplit.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block"> <!-- Added mx-auto and d-block classes to center-align the image -->
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rp. 12.000 / kg</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paket Dry Clean Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body text-center"> <!-- Added text-center class to center-align content -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Paket Dry Clean</div>
                            <img src="<?=url('/img/dry_clean.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block"> <!-- Added mx-auto and d-block classes to center-align the image -->
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Rp. 16.000 / kg</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          

        <!-- Paket Cuci Satuan Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body text-center"> <!-- Added text-center class to center-align content -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Paket Cuci Satuan</div>
                            <img src="<?=url('/img/kemeja_2.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block"> <!-- Added mx-auto and d-block classes to center-align the image -->
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Rp. 6000 / kg</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

