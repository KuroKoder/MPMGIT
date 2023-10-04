@extends('dashboard.layoutdash.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
</div>


        <div class="row" >
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label for="">Total Postingan</label>
                    <h1>{{ $totalPostingan }}</h1>
                    <a href="/dashboard/konsultasis" class="text-white fs-7 "></a>
                </div>
            </div>  
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label for="">Total Pengguna</label>
                    <h1>{{  $totalAllUsers}}</h1>
                    <a href="/dashboard/konsultasis" class="text-white fs-7 "></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label for="">Total Admin</label>
                    <h1>{{ $totalAdmin }}</h1>
                    <a href="/dashboard/konsultasis" class="text-white fs-7 "></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-danger text-white mb-3">
                    <label for="">Total Author</label>
                    <h1>{{ $totalAuthor }}</h1>
                    <a href="/dashboard/konsultasis" class="text-white fs-7 "></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label for="">Total Kategori</label>
                    <h1>{{ $totalCategories }}</h1>
                    <a href="/dashboard/konsultasis" class="text-white fs-7 "></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label for="">Total Testimoni</label>
                    <h1>{{ $totalTestimonis }}</h1>
                    <a href="/dashboard/konsultasis" class="text-white fs-7 "></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label for="">Total Konsultasi</label>
                    <h1>{{ $totalKonsultasi }}</h1>
                    <a href="/dashboard/konsultasis" class="text-white fs-7 ">View</a>
                </div>
            </div>

        </div>
@endsection