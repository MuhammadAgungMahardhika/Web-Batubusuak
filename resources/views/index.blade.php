@extends('layout.main')
@section('container')
    <!-- Awal Header -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid " id="header">
            <div class="row efek3" id="MyName">
                <div class="col-12 text-start ps-4">
                    <h1 class="display-3 text-white " style="font-family: 'Philosopher', sans-serif;font-weight:700">Selamat Datang di Desa Batu Busuk </h1>
                    <p class="lead">Desa Batu Busuk / Lambung bukit</p>
                    <span>
                        <a class="btn btn-success  btn-lg " href="#About" role="button">TENTANG KAMI</a>
                        <a class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#modalVideo" role="button"><i class="fa fa-play"></i></a>
                        <span class="lead text-sm">Nonton video</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <section class="container text-center pt-4" id="About">
        <div class="row d-flex justify-content-center " style="padding-top: 100px;">
            <div class="col-md-6 efek " style="text-align: left;">
                <p class="text-success p-0"># Kampung Batubusuk</p>
                <h1 class="display-5">Kenapa Anda Harus Berkunjung Ke <span class="text-success" style="text-shadow: 1px 1px  grey;"> Desa Batu Busuk</span></h1>
                <p  style="font-size:large;opacity:70%">
                    Desa batu busuk merupakan desa yang terletak di Kelurahan Lambung Bukit, Kecamatan Pauh, Kota Padang, Sumatera Barat. Di desa ini kita bisa memanjakan mata dengan pemandangan yang indah dan sekaligus memanjakan lidah dengan durian dan makanan khas desa batu busuk. Wisata alam di desa ini lengkap cocok untuk semua kalangan. Bagi pencinta treking desa ini memiliki zona untuk treking (Agrowiata HKM Padang Janiah). Bagi penikmat alam bisa banget menikmati alam sambil bermain air sungai yang masih terjaga. Mari berkunjung ke Desa Batu Busuk, Kota Padang, Sumatera Barat dan dapatkan pengalaman yang tidak terlupakan. 
                </p>
                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="btn btn-outline-dark  m-1">Pemandian</a>
                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2" class="btn btn-outline-dark  m-1">Pemandangan alam</a>
                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-current="true" aria-label="Slide 3" class="btn btn-outline-dark  m-1">Bangunan peninggalan</a>
                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-current="true" aria-label="Slide 4" class="btn btn-outline-dark  m-1">Kebudayaan</a>
                <a data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-current="true" aria-label="Slide 5" class="btn btn-outline-dark  m-1">Air terjun</a>
            </div>
            <div class="col-md-6 efek2" id="AboutCol-2">
                <div class=" border border-success bg-white">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/LUBUAK-MANDE-RUBIAH.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item ">
                                <img src="images/JEMBATAN-LAYANG.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="images/JANJANG-TEKA-TEKI-2.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="images/RANDAI.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="images/AIR-TERJUN-SARASAH-ANGGREK.jpg" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!--Promote -->
     <section class="container-fluid bg-light " style="margin-top: 100px;">
        <div class="row text-center" style="padding:60px;margin:5px" id="promote">
            <div class="col-12 align-items-center justify-content-center ">
                <h1 class="text-light" style="text-shadow: 2px 2px 2px grey;">HUBUNGI KAMI SEGERA</h1>
                <a role="button" class="btn btn-success font-weight-bold border border-light btn-lg" href="kontak.php"><i class="fa fa-phone"></i> KONTAK</a>
            </div>
        </div>
    </section>

    <!-- Denah wisata-->
    <section class="container p-4" id="DenahWisata" style="margin-top: 60px;">
        <div class="row justify-content-center">
            <div class="col-md-6" style="padding-top: 100px;">
                    <figure class="figure efek">
                        <img src="images/denah_bb.jpg" class=" border border-success" width="100%" style="filter:contrast(150%)  drop-shadow(h-shadow); " />
                        <figcaption class="figure-caption my-2 text-start"> <a href="" class="text-start btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#modalDenah"> Lihat Denah Wisata</a></figcaption>
                    </figure>
            </div>
            <div class="col-md-6">
                <figure class="figure">
                    <img src="images/durian.png" class="efek2 figure-img img-fluid rounded">
                    <figcaption class="figure-caption">( Durian Batu Busuk ) Salah Satu Rekomendasi Kuliner Hasil Ladang di Kampung Batubusuk. <a class="text-link text-success" href="event.php"> Lihat Selengkapnya</a></figcaption>
                </figure>
            </div>
        </div>
       
    </section>

    <!-- Video Modal -->
    <div class="modal fade" id="modalVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title">VIDEO</h5>
                    <div class="ratio ratio-16x9">

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/h6xpfU3a-ck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="max-width: 100%;height: 100%;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Denah Modal -->
     <div class="modal fade" id="modalDenah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999;">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="">DENAH WISATA</h5>
                    <img src="images/denah_bb.jpg" class="border border-success" width="100%" style="filter:contrast(150%) drop-shadow(h-shadow); " />
                </div>
            </div>
        </div>
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);
        gsap.to(".efek", {
            scrollTrigger: ".efek", // start the animation when ".box" enters the viewport (once)
            y: 0,
            opacity: 1,
        });

        gsap.to(".efek2", {
            scrollTrigger: ".efek2", // start the animation when ".box" enters the viewport (once)
            y: 0,
            opacity: 1,
        });
        gsap.to(".efek3", {
            scrollTrigger: ".efek3", // start the animation when ".box" enters the viewport (once)
            opacity: 1,
            y: 0
        });

        $('.navbar-toggle').click(function() {
            $('.navbar-collapse').toggleClass('right');
            $('.navbar-toggle').toggleClass('indexcity');
        });
    </script>

@endsection
    

   