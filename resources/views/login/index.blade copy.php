@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4">
      
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Please enter your email and password!</p>
                  <form action="/login" method="post">
                    @csrf
                    <div class="form-outline form-white mb-4">
                      <input type="email"  name="email" id="email" class="form-control @error('email') is-invalid @enderror form-control-lg" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                      <label for="email">Email address</label>
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" class="form-control form-control-lg" />
                      <label for="password" required>Password</label>
                    </div>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                  </form>
                  <small class="d-block text-center mt-3 mb-5">Not registered? <a href="/register">register Now!</a></small>
                  <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                  </div>

                </div>

                <div>
                  <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

@endsection