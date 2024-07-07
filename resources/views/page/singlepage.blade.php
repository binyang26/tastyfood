@extends('layout.skeleton')

@section('konten')
<div class="text-start m-4">
    <a href="{{ url()->previous() }}" >
        <i class="fas fa-arrow-left fa-lg"></i>
      </a>
  </div>
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <div class="container">
                <h2 class="text-center my-2 mb-4">{{ $data->title }}</h2>
                <img src="{{ asset('gambar-berita/'.$data->image) }}" class="img-fluid mb-3 shadow" alt="{{ $data->judul }}" style="width: 900px; height: 400px; object-fit: cover;">
                <article class="my-3">
                    {!! $data->isi !!}
                </article>
                <a href="{{ url()->previous() }}">Kembali</a>
            </div>
        </div>
    </div>
</div>

@include('components.footer')
@endsection
