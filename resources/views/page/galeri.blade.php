@extends('layout.app')

@section('page')
<div class="bg-body-secondary">
  <div class="container p-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach ($data->slice(0, 4) as $key => $galeri)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
          <img src="{{ asset('gambar-berita/' . $galeri['image']) }}" class="d-block w-100 rounded-lg" style="object-fit: cover; max-height: 550px;" alt="...">
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="left: -50px;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="right: -50px;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>



    <div class="container py-5">
      <div class="row">
          <!-- Baris 1 -->
          @foreach ($data->slice(5) as $key => $galeri)
          <div class="col-lg-3 col-6 mb-4">
            <img src="{{ asset('gambar-berita/'.$galeri->image) }}" style="object-fit: cover;  height: 20rem; widht: 17rem" class="card-img-top rounded shadow" alt="...">
          </div>
          @endforeach
          <div class="d-flex justify-content-end">
            {{ $data->links() }}
        </div>
      </div>
  </div>

@endsection


