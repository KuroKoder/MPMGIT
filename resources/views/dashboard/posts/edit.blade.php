@extends('dashboard.layoutdash.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <a href="/dashboard/posts" class="btn btn-danger"><span data-feather="arrow-left"></span>Back</a>
    <form method="post" action="/dashboard/posts/{{ $posting->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $posting->title) }}">
            @error('title')
                <div class="invalif-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug',  $posting->slug) }}">
            @error('slug')
                <div class="invalif-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach($categories as $category )
                    @if(old('category_id',  $posting->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input type="hidden" name="oldImage" value="{{ $posting->image }}">
            @if($posting->image)
                <img src="{{ asset('storage/'.$posting->image) }}" class="img-preview img-fluid d-block" id="frame" style="max-height: 500px; overflow:hidden">
            @else
                <img class="img-preview img-fluid" id="frame" style="max-height: 500px; overflow:hidden">
            @endif
            <input class="form-control mt-3 mb-3 @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="preview()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-body">Body</label>
            @error('body')    
                <p class="text-danger">{{ $message }}</p>
            @enderror
            {{-- <input id="body" type="hidden" name="body" value="{{ old('body',  $posting->body) }}"> --}}
            {{-- <trix-editor input="body"></trix-editor> --}}
            <textarea id="editor1" name="body">
                {{ old('body', $posting->body )}}
            </textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mt-5">Update Post</button>
    </form>
</div>

<script>
    const title=document.querySelector('#title');
    const slug=document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/checkSlug?title='+title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function preview(){
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
</script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>

@endsection