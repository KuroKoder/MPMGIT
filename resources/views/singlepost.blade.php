@extends('layouts.main')

@section('container')

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark opacity-50 p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Artikel Kesehatan Untukmu</h1>
                <a style="text-decoration:none" class="text-white" href="">Artikel</a>
                <i class="bi bi-record-circle-fill text-primary px-2"></i>
                <a style="text-decoration:none" class="text-white" href="/">Home</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <h1 class="mb-4">{{$post->title}}</h1>
                    <div class="d-flex mb-2">
                        <small class="text me-3 d-flex"><i class="bi bi-person me-2"></i>{{ $post->user->username}}</small>
                        <small class="text me-3 d-flex"><i class="bi bi-calendar-week me-2"></i>{{ $post->created_at->diffForHumans()}}</small>
                        <small class="text me-3 d-flex"><i class="bi bi-bookmark-fill me-2"></i><a href="/categories/{{ $post->category->slug }}" class="text-dark" style="text-decoration:none">{{ $post->category->name}}</a></small>
                    </div>
                    @if($post->image)
                        <div>
                            <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid w-100 mt-3 mb-3" alt="foto artikel">
                        </div>
                    @else
                        <img src="/assets/img/kanker.jpeg" class="card-img-top" alt="...">
                    @endif
                    {!! $post->body !!}
                </div>
                <!-- Blog Detail End -->
                
                <!-- Comment List Start -->
                <div class="mb-5">
                    @if(session('message'))
                        <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
                    @endif
                    {{-- <h2 class="mb-4">3 Comments</h2> --}}
                    @forelse ($post->komens as $komen)
                    <div class="d-flex mb-4">
                        <div class="ps-3">
                            <h6><a class="text-danger pe-4" style="text-decoration:none">
                                @if($komen->user)
                                {{ $komen->user->name }}
                                @endif
                            </a> <small><i>{{ $komen->created_at->format('d-m-y') }}</i></small></h6>
                            <p>{{ $komen->comment}}</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    @empty
                        <h6>No Comments Yet</h6>
                    @endforelse
                </div>
                <!-- Comment List End -->
                <!-- Comment Form Start -->
                <div class="bg-light p-5">
                    <h2 class="mb-4">Leave a comment</h2>
                    <form action="/artikel/{post:slug}" method="POST" >
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                    <input type="hidden" name="post_slug" value="{{ $post->slug }}">
                                    <input type="hidden" name="parent" value="0">
                                    <textarea class="form-control bg-white border-0" name="comment" rows="5" placeholder="Komentar" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" value="kirim">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <form action="/artikel">
                        <div class="input-group mb-3 mt-3 ">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{
                                request('search') }}">
                            <button class="btn btn-primary" type="submit" >Search</button>
                        </div>
                    </form>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5 bg-light">
                    <div class="mb-5 ">
                        <h2 class="mb-4">Kategori</h2>
                        @foreach($categories as $categ)
                            <div class="d-flex flex-column justify-content-start bg-light p-3">
                                <a class="h-5 mb-1 text-dark" style="text-decoration:none" href="/categories/{{ $categ->slug }}"><i class="bi bi-arrow-right text-primary me-2"></i>{{ $categ->name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Category End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="/assets/img/kanker.jpeg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

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
    

@endsection