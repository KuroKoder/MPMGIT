@extends('layouts.main')

@section('container')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark opacity-50 p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Testimoni</h1>
                <a style="text-decoration:none" class="text-light ">Testimoni Pasien CMI Hospital</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!-- Testimoni Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="/assets/img/dokter2.png" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 py-6 px-5">
                <h2 class="display-5 mb-4">Testimoni Pasien CMI Hospital</h2>
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimoni as $test)
                    <div class="testimonial-item">
                        <p class="fs-7 fw-normal mb-4">{!! $test->testi!!}</p>
                        <div class="d-flex align-items-center">
                            @if($test->image)
                                <img class="img-fluid rounded-circle" src="{{ asset('storage/'. $test->image) }}" alt="userprofil">
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
    <!-- PTestimoni End -->


@endsection