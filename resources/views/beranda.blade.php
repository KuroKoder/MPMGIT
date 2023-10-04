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
    
    <!--Service-->
    <div class="container-fluid p-5 mb-3 mt-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Pelayanan Kami</h1>
            <hr class="w-50 border border-primary opacity-100 border-3 opacity-50 mx-auto">
        </div>
        <div class="row g-5 mt-3">
            <div class="col-lg-5 p-0 m-0 ">
                <div class=" d-flex flex-column justify-content-center bg-light">
                    <img src="/assets/img/dokter.png" class="img-fluid" alt="cmihospital">
                </div>
            </div>
            <div class="container col-lg-7 d-flex flex-column align-items-start justify-content-between">
                <div class="row row-cols-auto justify-content-center ">
                    <div class="col-lg-6 col-md-4 mb-5">
                        <div class="service-item bg-light text-center gap-2">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="bi bi-chat-dots fs-5 fa-2x"></i>
                            </div>
                            {{-- <h3 class="mb-3">Business Research</h3> --}}
                            <p class="mb-0 px-1">Konsultasi pada klinik utama CMI dilakukan oleh dokter umum dan dokter spesialis, dan Griya Sehat GR. Setra dengan konsultasi komplementer yang berpengalaman.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 mb-2">
                        <div class="service-item bg-light text-center gap-2">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="bi bi-file-medical fs-5 fa-2x"></i>
                            </div>
                            {{-- <h3 class="mb-3">Business Research</h3> --}}
                            <p class="mb-0 px-1">Klinik Utama CMI merupakan Klinik Utama yang mempunyai spesialisasi terhadap penyakit jantung, kanker, ginjal dan diabetes.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 mt-2">
                        <div class="service-item bg-light text-center gap-2">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="bi bi-file-earmark-medical-fill fs-5 fa-5x"></i>
                            </div>
                            {{-- <h3 class="mb-3">Business Research</h3> --}}
                            <p class="mb-0 px-1">Ruang konsultasi dan ruang perawatan yang nyaman dapat membantu setiap pasien dalam proses kesembuhan.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 mt-2">
                        <div class="service-item bg-light text-center gap-2">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </div>
                            {{-- <h3 class="mb-3">Business Research</h3> --}}
                            <p class="mb-0 px-1">Klinik Utama CMI memiliki instalasi farmasi medis dan Komplementer yang lengkap sehingga menjamin ketersedian obat bagi seluruh pasien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Team Start -->
    <div class="container-fluid p-5 mt-5">
        <div class="text-center mx-auto" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Tim Dokter Kami</h1>
            <hr class="w-50 border border-primary opacity-100 border-3 opacity-50 mx-auto">
        </div>
        <div class="row g-5 mt-3">
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100=" src="/assets/img/dokter naufal.png" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">dr. M. A. Naufal Ilham</h3>
                        <p class="text-white text-uppercase mb-0">Dokter</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="/assets/img/dokter ira.png" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">dr. G. Iranita Dyantika R.</h3>
                        <p class="text-white text-uppercase mb-0">Dokter</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="/assets/img/dokter wayan.png" alt="">
                    <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                        <h3 class="text-white">dr. I Wayan Gede Krisna A.S.</h3>
                        <p class="text-white text-uppercase mb-0">Dokter</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Artikel Start -->
    <div class="text-center mx-auto mt-2 px-5 py-3" style="max-width: 600px;">
        <h1 class="display-6">Artikel Kesehatan</h1>
        <hr class="w-50 border border-primary border-3 opacity-100 opacity-50 mx-auto">
    </div>
    <div class="container d-flex flex-column align-items-start justify-content-between px-5 py-2">
        <div class="row row-cols-auto gap-5 d-flex justify-content-center">
            @foreach ($post as $posting)  
                    <div class="card border-primary border-3 col col-lg-3 p-0">
                        @if($posting->image)
                            <div>
                                <img src="{{ asset('storage/'. $posting->image) }}" class="card-img-top" alt="...">
                            </div>
                        @else
                            <img src="/assets/img/kanker.jpeg" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body p-3">
                            <div class="d-flex mb-2">
                                <small class="d-flex text-uppercase me-3"><i class="bi bi-person me-2 "></i>{{ $posting->user->name}}</small>
                                <small class=" text me-3 d-flex"><i class="bi bi-calendar-week me-2"></i></i>{{ $posting->created_at->diffForHumans()}}</small>
                            </div>
                            <h5 class="card-title"  href="/artikel/{{ $posting->slug }}">{{ $posting->title}}</h5>
                            <p class="text-justify">{{ $posting->excerpt}}</p>
                            <a href="/artikel/{{ $posting->slug }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
            @endforeach  
        </div>
    </div>
    <!--  Artikel End -->

    <!-- Testimoni Start -->
    <div class="text-center mx-auto mt-5" style="max-width: 600px;">
        <h1 class="display-5 mb-0">Testimoni</h1>
        <hr class="w-25 border border-primary border-3 opacity-100 opacity-50 mx-auto">
    </div> 
    <div class="container-fluid bg-light p-5">
        <div class="row g-0">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="/assets/img/dokter2.png" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7 py-4 px-4">
                <h1 class="display-5 mb-4 d-flex justify-content-center">Testimoni Pasien CMI Hospital</h1>
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimoni as $test)
                    <div class="testimonial-item">
                        <p class="fs-7 fw-normal mb-4"></i>{!! $test->testi !!}</p>
                        <div class="d-flex align-items-center">
                            @if($test->image)
                            <div>
                                <img class="img-fluid rounded-circle" src="{{ asset('storage/'. $test->image) }}" alt="userprofil">
                            </div>
                            @else
                                <img class="img-fluid rounded-circle" src="/assets/img/userdummy.jpg" alt="userprofil">
                            @endif
                            <div class="ps-4">
                                <h3>{{$test->nama}}</h3>
                                <span class="text-uppercase text-primary">{{ $test->disease }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Testimoni End -->

    <!-- Janji Online Start -->
    <div class="text-center mx-auto mt-5" id="janji" style="max-width: 600px;">
        <h1 class="display-5 mb-0">Konsultasi</h1>
        <hr class="w-25 border border-primary opacity-100 border-3 mx-auto">
    </div>
    <div class="bg-light py-3 px-5">
        <h2 class="d-flex justify-content-center ">Buat janji secara online dengan dokter berpengalaman kami</h2>
        <form method="post" action="/" class="mb-5">
            @csrf
            <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control bg-white border-0" name="nama" placeholder="Nama Lengkap" style="height: 55px;" required>
                </div>
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control bg-white border-0" name="domisili" placeholder="Domisili" style="height: 55px;" required>
                </div>
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control bg-white border-0" name="tgl" id="tgl" placeholder="Tanggal Lahir" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" style="height: 55px;" required>
                </div>
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control bg-white border-0" name="no_telepon" placeholder="No Telepon" style="height: 55px;" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control bg-white border-0" rows="2" name="lama_keluhan" placeholder="Lama Keluhan" required></textarea>
                </div>
                <div class="col-12">
                    <textarea class="form-control bg-white border-0" rows="3" name="keluhan" placeholder="Keluhan" required></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Konsultasikan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Janji Online End -->



@endsection