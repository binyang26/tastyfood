

@extends('layout.skeleton')

@section('konten')
<div class="row justify-content-center my-5">
  <div class="col-md-4">
    {{-- Alert --}}
    @if (session()->has('success'))
    <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
    </div>
    @endif

    @if (session()->has('LoginError'))
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
    </div>
    @endif

    <main class="form-signin shadow p-5 mb-5 bg-white rounded ">
      <div class="d-flex justify-content-between mb-3">
        <a href="{{ url()->previous() }}" >
          <i class="fas fa-arrow-left fa-lg"></i> <!-- Larger Font Awesome "arrow-left" icon -->
        </a>
        <a href="{{ url('/') }}">
          <i class="fas fa-home fa-lg"></i> <!-- Larger Font Awesome "home" icon -->
        </a>

      </div>
      <form action="/register" method="post">
        <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
        @csrf
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button class="btn btn-primary mt-3 w-100 py-2" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
    </main>
  </div>
</div>
@endsection





