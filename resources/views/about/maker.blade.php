@extends('master')

@section('konten')
    <!-- untuk menandai konten multimedia, seperti gambar atau video, yang terkait dengan suatu konten atau artikel -->
    <figure class="text-center">
        <div class="spinner-grow text-danger">
            <span class="visually-hidden"></span>
        </div>
        <div class="spinner-grow text-success">
            <span class="visually-hidden"></span>
        </div>
        <div class="spinner-grow text-info">
            <span class="visually-hidden"></span>
        </div><br><br>
        <img class="rounded-circle shadow" width="200px" height="200px" alt="avatar2" src="<?=url('/img/rifkime.jpg')?>" />
        <br><br>
        <blockquote class="blockquote">
            <p>Rifki Fauzan Suandi</p>
        </blockquote>
        <div class="row justify-content-center">

        <!-- Youtube Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body text-center"> 
                    <!-- Added text-center class to center-align content -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Youtube</div><br><br>
                            <img src="<?=url('/img/youtube.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger text-white">
                        <a href="{{ url('https://www.youtube.com/channel/UCBgJxng-3jWbjMBmAgfIzpw') }}" class="text-white">
                            View On Youtube
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <!-- Instagram Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body text-center"> 
                    <!-- Added text-center class to center-align content -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Instagram</div>
                            <img src="<?=url('/img/instagram.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success text-white">
                        <a href="{{ url('https://www.instagram.com/rifkifs17/') }}" class="text-white">
                            View On Instagram
                        </a>
                    </button>
                </div>
            </div>
        </div>
          

        <!-- Github Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body text-center"> 
                    <!-- Added text-center class to center-align content -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Github</div>
                            <img src="<?=url('/img/github.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-info text-white">
                        <a href="{{ url('https://github.com/rifkifauzans') }}" class="text-white">
                            View On Github
                        </a>
                    </button>
                </div>
            </div>
        </div>

    </div>
    </figure>

@endsection