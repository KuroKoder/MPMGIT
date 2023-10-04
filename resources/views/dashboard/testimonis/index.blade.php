@extends('dashboard.layoutdash.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Testimonis</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive col-lg-8">
  <a href="/dashboard/testimonis/create" class="btn btn-primary mb-3">Create New Testimonis</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Image</th>
          <th scope="col">Disease</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($testimonis as $testimoni)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $testimoni->nama }}</td>
          <td style="width:20%;">
            <img src="{{ asset('storage/'. $testimoni->image) }}" class=" w-100 mt-1 mb-1" alt="foto artikel">
          </td>
          <td>{{ $testimoni->disease}}</td>
          <td>
            <a href="/dashboard/testimonis/{{ $testimoni->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/testimonis/{{ $testimoni->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/testimonis/{{ $testimoni->slug }}" class="d-inline" method="post">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
            
        @endforeach
    </tbody>
</table>

@endsection