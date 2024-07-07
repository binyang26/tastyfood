@extends('layout.app')

@section('page')
<div class="bg-body-secondary">
    <div class="container">
            <div class="row p-3 p-md-5">
        <div class="col-lg-6">
            <img src="{{ asset("template/gambar1.jpg")}}" style="object-fit: cover; width: 400px; height: 400px;" class="rounded img-fluid shadow" alt=""
                style="object-fit: cover;">
        </div>
        <div class="col-lg-6">
            <h2 class="my-3">APA SAJA MAKANAN KHAS NUSANTARA ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas similique eveniet exercitationem dolor nobis
                modi reprehenderit veniam, nemo obcaecati eius, animi mollitia temporibus laborum deserunt natus quae
                sit. Odit, aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ducimus ad quae fugit voluptatum blanditiis
                voluptatem molestiae amet hic! Excepturi nobis dolor similique quas sunt harum, nesciunt eveniet labore
                id quisquam incidunt fugit laboriosam ratione?</p>
            <button type="button" class="btn btn-dark" style="width: 250px; border-radius: 0">
                <a class="text-light" style="text-decoration: none" href="#">BACA SELENGKAPNYA</a>
            </button> 
        </div>
    </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="mb-4">BERITA LAINNYA</h2>
    <div class="row">
        @foreach ($data as $berita)
        <div class="col-lg-3 col-6 mb-4">
            <div class="card cardberita">
                <img src="{{ asset('gambar-berita/'.$berita->image) }}" style="object-fit: cover; height: 12rem;" class="card-img-top img-fluid shadow" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ strlen($berita->title) > 10 ? substr($berita->title, 0, 10) . '...' : $berita->title }}</h5>
                    <p>{{ strlen($berita->isi) > 100 ? substr($berita->isi, 0, 100) . '...' : $berita->isi }}</p>
                    <a href="{{ route ('singlepage', ['id' => $berita->id]) }}" class="text-warning" style="text-decoration: none">Baca selengkapnya</a>
                </div>
            </div>            
        </div>        
        @endforeach
        <div class="d-flex justify-content-end">
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection