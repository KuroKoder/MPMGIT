@extends('dashboard.layoutdash.main')

@section('container')
<div class="container-fluid py-6 px-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="mb-5">
                <h1 class="mb-4">{{$post->title}}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Bact to All My Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
                </form>
                @if($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid w-100 mt-3 mb-3" alt="foto artikel">
                    </div>
                @else
                    <img src="/assets/img/blog-3.jpg" class="img-fluid w-100 mt-3 mb-3" alt="foto artikel">
                @endif
                {!! $post->body !!}
            </div>
        </div>
    </div>
</div>


@endsection