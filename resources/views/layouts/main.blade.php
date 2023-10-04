<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}-kankerserviks.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Kami hadir untuk anda pasien kanker sebagai solusi pengobatan kanker dengan memberikan pelayanan kesehatan yang mengusung dua keilmuan kedokteran, yaitu ilmu kedokteran modern dan ilmu kedokteran komplementer dari Timur berdasarkan buku The Canon Of Medicinae (Al-Qanun Fil Al-Tib) karya Ibnu Sina.">
    <meta name="keywords" content="rumah sakit kanker, obat kanker, pengobatan kanker, kanker tanpa kemoterapi, kanker tanpa operasi, terapi kanker, solusi kanker, kanker sembuh, kanker sehat, ciri kanker, gejala kanker, penyebab kanker, periksa kanker, cek kanker, payudara kanker, servik kanker, servik payudara, sakit kanker">
    <meta name="author" content="Promkes CMI">
    

    <!-- Favicon -->
    <link href="{{ asset('img') }}/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}
    
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib') }}/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css') }}/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css')  }}/style.css" rel="stylesheet">
</head>

    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block bg-light ps-5 px-3" style="height: 38px;">
        <div class="row d-none d-lg-flex justify-content-lg-between">
            <div class="col-lg-4 text-center text-lg-start mb-2 mb-lg-0 mt-2">
                <div class="d-inline-flex align-items-center" style="height: 10px;">
                    <a class="btn btn-sm btn-primary btn-sm-square rounded-circle me-2" href="https://twitter.com/cmihospitals?t=VVH5yw_DDQoIVjLadhYOVg&s=08" target="_blank"><i class="bi bi-twitter"></i></i></a>
                    <a class="btn btn-sm btn-primary btn-sm-square rounded-circle me-2" href="https://www.facebook.com/cmihospitals" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-sm btn-primary btn-sm-square rounded-circle me-2" href="https://www.youtube.com/c/CMIhospital-com" target="_blank"><i class="bi bi-youtube"></i></i></a>
                    <a class="btn btn-sm btn-primary btn-sm-square rounded-circle " href="https://www.instagram.com/cmihospitals/" target="_blank"><i class="bi bi-instagram"></i></i></a>
                </div>
            </div>
            <div class="col-lg-8 text-center text-lg-end mb-2 mb-lg-0">
                <div class="position-relative d-flex align-items-center justify-content-lg-between bg-primary text-white top-shape py-2">
                    <div class="border-end ps-5 pe-3 d-flex">
                        <p class="m-0"><i class="bi bi-envelope-at me-2"></i>info@cmihospital.com</p>
                    </div>
                    <div class="border-end ps-2 px-3 d-flex">
                        <p class="m-0"><i class="bi bi-telephone me-2"></i>(022) 253 1000</p>
                    </div>
                    <div class="px-3 pe-5 d-flex">
                        <p class="m-0"><i class="bi bi-geo-alt me-2"></i>Jalan Tubagus Ismail VII No. 21 Bandung, Jawa Barat 40134</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-3 px-lg-5 py-3 py-lg-0 ">
        <a href="/" class="navbar-brand p-0">
            <div class="d-flex justify-content-between align-items-center">
                <img src="/assets/img/cancer.webp" class="mw-100" style="width:40px;" alt="logo kanker serviks">
                <h1 class="m-0 text text-primary fs-2" style="line-height: 40px">kankerserviks.com</h1>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 d-lg-flex align-items-center">
                <a href="/" class="nav-item nav-link {{ Request::is('/')?'active':'' }}">Beranda</a>
                <a href="/testimoni" class="nav-item nav-link {{ Request::is('testimoni')?'active':'' }}">Testimoni</a>
                <a href="/artikel" class="nav-item nav-link {{ Request::is('artikel')?'active':'' }}">Artikel</a>
                {{-- <a href="/kontak" class="nav-item nav-link {{ Request::is('kontak')?'active':'' }}">Kontak</a> --}}
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu ">
                        {{-- @can('admin')
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse p-2"></i>My Dashboard</a></li>
                        @endcan --}}
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right p-2"></i>Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <a href="/login" class="nav-item nav-link">
                    <button type="button" class="btn btn-primary py-2 px-4">Login</button>
                </a>
                @endauth
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    {{-- <div class="container mb-3 p-0"> --}}
    @yield('container')
    {{-- </div> --}}

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 px-sm-2 p-lg-5">
        <div class="row g-5 px-5">
            <div class="col-lg-2 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-center">
                    <a class="text-light mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Beranda</a>
                    <a class="text-light mb-2" href="/testimoni"><i class="bi bi-arrow-right text-primary me-2"></i>Testimoni</a>
                    <a class="text-light mb-2" href="/artikel"><i class="bi bi-arrow-right text-primary me-2"></i>Artikel</a>
                    <a class="text-light" href="/login"><i class="bi bi-arrow-right text-primary me-2"></i>Login</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="d-flex mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Jalan Tubagus Ismail VII No. 21 Bandung, Jawa Barat 40134</p>
                <p class="d-flex mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@cmihospital.com</p>
                <p class="d-flex mb-0"><i class="bi bi-telephone text-primary me-2"></i>(022) 253 1000</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex mb-3">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://twitter.com/cmihospitals?t=VVH5yw_DDQoIVjLadhYOVg&s=08" target="_blank"><i class="bi bi-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.facebook.com/cmihospitals" target="_blank"><i class="bi bi-facebook fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.youtube.com/c/CMIhospital-com" target="_blank"><i class="bi bi-youtube fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://www.instagram.com/cmihospitals/" target="_blank"><i class="bi bi-instagram fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-5 wow slideInUp mb-3" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0655666392786!2d107.61697821477273!3d-6.882749295026443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6fe4e185811%3A0x30e348c8dd0ae0ec!2sKlinik%20Utama%20CMI!5e0!3m2!1sid!2sid!4v1669361870217!5m2!1sid!2sid" 
                min-height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-light" href="#">kankerserviks.com</a>. All Rights Reserved. Designed by <a class="text-light">zans</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ asset('lib') }}/easing/easing.min.js"></script>
    <script src="{{ asset('lib') }}/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('lib') }}/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js')}}/main.js"></script>
</body>

</html>