@extends('layouts.main')

@section('container')

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark opacity-50 p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Artikel Kesehatan Untukmu</h1>
                <a href="/artikel" class="text-light" style="text-decoration:none">Artikel</a>
                <i class="bi bi-record-circle-fill text-primary px-2"></i>
                <a href="/" class="text-light" style="text-decoration:none">Home</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!--Search-->
    <div class="row justify-content-center">
        <div class="col-md-6 ps-5 pe-5 p-0">
            <form action="/artikel">
                <div class="input-group mb-3 mt-3 ">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{
                        request('search') }}">
                    <button class="btn btn-primary" type="submit" >Search</button>
                </div>
            </form>
        </div>
    </div>
    <!--Search--> 
    <h3 class="mb-5 px-5">Artikel Kategori : {{ $category }}</h3>
    <!-- Blog Start -->
    <div class="container-fluid P-5 ">
        <div class="row g-5 p-5">
            <!-- Blog list Start -->
            <div class="container col-lg-8 d-flex flex-column align-items-start justify-content-center">
                <div class="row row-cols-auto gap-5 d-flex justify-content-center">
                    @foreach ($posts as $post)  
                            <div class="card border-primary border-1 col col-lg-5 p-0">
                                @if($post->image)
                                    <div style="max-height: 350px; overflow:hidden;">
                                        <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid w-100 mt-3 mb-3" alt="foto artikel">
                                    </div>
                                @else
                                    <img src="/assets/img/kanker.jpeg" class="card-img-top" alt="...">
                                @endif
                                <div class="card-body p-3 py-3 px-3">
                                    <div class="d-flex mb-2">
                                        <small class="text me-3"><i class="bi bi-person me-2"></i>{{ $post->user->name}}</small>
                                        <small class="text me-3"><i class="bi bi-calendar-week me-2"></i></i>{{ $post->created_at->diffForHumans()}}</small>
                                    </div>
                                    <h5 class="card-title"  href="/artikel/{{ $post->slug }}">{{ $post->title}}</h5>
                                    <p class="text-justify">{{ $post->excerpt}}</p>
                                    <a href="/artikel/{{ $post->slug }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                    @endforeach  
                </div>
                {{-- <div class="mt-3 px-5">{{ $posts->links()}}</div> --}}
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    @foreach($categories as $categ)
                        <div class="d-flex flex-column justify-content-start bg-light p-3 ">
                            <a class="h-5 mb-1 text-dark" style="text-decoration:none" href="/categories/{{ $categ->slug }}"><i class="bi bi-arrow-right text-primary me-2" ></i>{{ $categ->name }}</a>
                        </div>
                    @endforeach
                </div>
                <!-- Category End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    <div class="bg-dark text-center text-light" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


@endsection