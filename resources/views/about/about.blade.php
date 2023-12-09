@extends('master')

@section('konten')
    <!-- untuk menandai konten multimedia, seperti gambar atau video, yang terkait dengan suatu konten atau artikel -->
    <figure class="text-center">
        <div class="spinner-grow text-primary">
            <span class="visually-hidden"></span>
        </div>
        <div class="spinner-grow text-success">
            <span class="visually-hidden"></span>
        </div>
        <div class="spinner-grow text-danger">
            <span class="visually-hidden"></span>
        </div><br><br>
        <blockquote class="blockquote">
            <p>Penerapan Teknologi Internet</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Sistem Informasi <cite title="Source Title">Laundry</cite>
        </figcaption>
    </figure>
    <br>
    <!-- untuk menandai blok teks yang merupakan kutipan atau tulisan -->
    <blockquote class="blockquote text-center">
        <p>Sistem informasi laundry adalah sistem yang digunakan untuk mengelola data 
            dan informasi dalam usaha laundry. Sistem ini dapat membantu usaha laundry 
            untuk meningkatkan efisiensi, produktivitas, dan profitabilitas.</p>
    </blockquote>
    <br>
    <!-- untuk menandai konten multimedia, seperti gambar atau video, yang terkait dengan suatu konten atau artikel -->
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Kategori Paket Cucian</p>
        </blockquote>
    </figure>
    <br>
    <div class="row justify-content-center">

        <!-- Paket Cuci Komplit Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body text-center"> <!-- Added text-center class to center-align content -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Paket Cuci Komplit</div>
                            <img src="<?=url('/img/cuci_komplit.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block">
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
                            <img src="<?=url('/img/dry_clean.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block">
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
                            <img src="<?=url('/img/kemeja_2.png')?>" alt="cuci satuan" width="160" class="mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <!-- untuk menandai konten multimedia, seperti gambar atau video, yang terkait dengan suatu konten atau artikel -->
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Kategori Paket Cucian Komplit</p>
        </blockquote>
    </figure>
    <!-- untuk menandai blok teks yang merupakan kutipan atau tulisan -->
    <blockquote class="blockquote text-center">
        <p>Paket cuci komplit adalah paket layanan laundry yang mencakup semua proses pencucian, 
            mulai dari pencucian, pengeringan, hingga penyetrikaan. Paket ini biasanya ditawarkan 
            untuk pakaian sehari-hari, seperti baju, celana, dan selimut.</p>
    </blockquote>
    <br>
    <!-- untuk menandai konten multimedia, seperti gambar atau video, yang terkait dengan suatu konten atau artikel -->
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Kategori Paket Dry Clean</p>
        </blockquote>
    </figure>
    <!-- untuk menandai blok teks yang merupakan kutipan atau tulisan -->
    <blockquote class="blockquote text-center">
        <p>Dry clean adalah proses pencucian pakaian menggunakan bahan kimia khusus yang tidak menggunakan air. 
            Proses ini biasanya digunakan untuk mencuci pakaian yang terbuat dari bahan-bahan yang sensitif 
            terhadap air, seperti wol, sutra, dan kulit.</p>
    </blockquote>
    <br>
    <!-- untuk menandai konten multimedia, seperti gambar atau video, yang terkait dengan suatu konten atau artikel -->
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Kategori Paket Cucian Satuan</p>
        </blockquote>
    </figure>
    <!-- untuk menandai blok teks yang merupakan kutipan atau tulisan -->
    <blockquote class="blockquote text-center">
        <p>Paket cuci satuan adalah paket layanan laundry yang hanya mencakup pencucian saja, tanpa 
            pengeringan dan penyetrikaan. Paket ini biasanya ditawarkan untuk pakaian yang tidak membutuhkan 
            pengeringan dan penyetrikaan, seperti pakaian dalam, handuk, dan sprei.</p>
    </blockquote>
@endsection