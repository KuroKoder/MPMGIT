@extends('dashboard.layoutdash.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Konsultasi</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive col">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Domisili</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Lama Keluhan</th>
          <th scope="col">Keluhan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($konsultasis as $konsultasi)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $konsultasi->nama }}</td>
          <td>{{ $konsultasi->domisili}}</td>
          <td>{{ $konsultasi->tgl}}</td>
          <td>{{ $konsultasi->no_telepon}}</td>
          <td>{{ $konsultasi->keluhan}}</td>
          <td>{{ $konsultasi->lama_keluhan}}</td>
          @can('admin')
          <td>
            <form action="/dashboard/konsultasis/{{ $konsultasi->id }}" class="d-inline" method="post">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
          @endcan
        </tr>
        @endforeach
    </tbody>
</table>

@endsection