@extends('dashboard.layoutdash.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Testimoni</h1>
</div>

<div class="col-lg-8">
    <a href="/dashboard/testimonis" class="btn btn-danger"><span data-feather="arrow-left"></span>Back</a>
    <form method="post" action="/dashboard/testimonis" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Name</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="disease" class="form-label">Disease</label>
            <input type="text" class="form-control @error('disease') is-invalid @enderror" id="disease" name="disease" required value="{{ old('disease') }}">
            @error('disease')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Testimoni Image</label>
            <img class="img-preview img-fluid d-block" id="frame" style="max-height: 500px; overflow:hidden">
            <input class="form-control mt-3 mb-3 @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="preview()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="testi" class="form-testi">Testimoni</label>
            @error('testi')    
                <p class="text-danger">{{ $message }}</p>
            @enderror
            
            {{-- <input id="testi" type="hidden" name="testi" value="{{ old('testi') }}"> --}}
            <textarea id="editor1" name="testi"></textarea>
            {{-- <trix-editor input="testi"></trix-editor>  --}}
        </div>
        
        <button type="submit" class="btn btn-primary mt-5">Create Testimoni</button>
    </form>
</div>

<script>
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
        fetch('/dashboard/makeSlug?nama='+ nama.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    function preview(){
        frame.src=URL.createObjectURL(event.target.files[0]);

    }
    CKEDITOR.replace( 'editor1' );
</script>

@endsection