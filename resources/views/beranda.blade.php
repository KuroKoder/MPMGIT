@extends('layouts.main')

@section('container')

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center ps-5">
                        <div class="text-start p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Selamat Datang Di</h5>
                            <h1 class="display-1 text-white mb-md-4">kankerserviks.com</h1>
                            <a href="#janji" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Buat Janji</a>
                            {{-- <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill">Konsultasi Gratis</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="/assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center ps-5">
                        <div class="text-start p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Selamat Datang Di</h5>
                            <h1 class="display-1 text-white mb-md-4">kankerserviks.com</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Buat Janji</a>
                            {{-- <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill">Konsultasi Gratis</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid bg-light p-0 mb-3">
        <div class="row g-0">
            <div class="col-lg-7 py-5 px-5">
                <h1 class="display-5 mb-4 mt-4">Welcome To <span class="text-primary">CMI HOSPITAL</span></h1>
                <h4 class="text-primary mb-4">Klinik Utama CMI Beserta Metode Pengobatan Komplementer</h4>
                <p class="mb-4">Kami hadir untuk anda pasien kanker sebagai solusi pengobatan kanker dengan memberikan pelayanan kesehatan yang mengusung dua keilmuan kedokteran, yaitu ilmu kedokteran modern dan ilmu kedokteran komplementer dari Timur berdasarkan buku The Canon Of Medicinae (Al-Qanun Fil Al-Tib) karya Ibnu Sina.</p>
                <div class="row g-0 mb-3">
                    <div class="col-lg-3">
                        <h6 class="mb-1"><i class="bi bi-caret-right-fill text-primary me-1"></i>Tanpa Operasi</h6>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mb-1"><i class="bi bi-caret-right-fill text-primary me-1"></i>Tanpa Kemoterapi</h6>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mb-1"><i class="bi bi-caret-right-fill text-primary me-1"></i>Tanpa Radioterapi</h6>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mb-1"><i class="bi bi-caret-right-fill text-primary me-1"></i>Minim Efek Samping</h6>
                    </div>
                </div>
                <div class="d-flex justify-content-center">        
                    <a href="#janji" class="btn btn-primary btn-center py-md-3 px-md-5 rounded-pill mb-5">Konsultasi Gratis</a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="h-100 d-flex flex-column justify-content-center bg-dark p-5">
                    <img src="/assets/img/cmihospital.jpg" class="img-fluid" alt="cmihospital">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->