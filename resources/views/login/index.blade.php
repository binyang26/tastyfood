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

    @if (session()->has('loginError'))
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
      <form action="/login" method="post">
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
    </main>
  </div>
</div>
@endsection


