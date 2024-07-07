@extends('layout.skeleton')

 @section('konten')
 
    <div class="bg-body-secondary" style="height: 667px">
        <div class="d-flex">
            <div class="col-lg-6 col-md-6 px-lg-5 mx-lg-4 mx-md-4 px-3 ">
                    <nav class="px-lg-4 px-md-4 pt-2 text-center navbar navbar-expand-lg  animate__animated animate__fadeInDown fixed-top" id="navbarHome">
                        <a class="navbar-brand ms-lg-5 ms-3" href="{{route ('home')}}">
                            <h2 class="">TASTY FOOD</h2>
                        </a>
                        <button class="navbar-toggler mx-3 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav ml-auto ul-costum rounded ">
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-dark home-hover rounded active" aria-current="page" href="{{route ('home')}}">HOME</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-dark home-hover rounded" href="{{route ('tentang')}}">TENTANG</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-dark home-hover rounded" href="{{route ('berita')}}">BERITA</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-dark home-hover rounded" href="{{route ('galeri')}}">GALERI</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link text-dark home-hover rounded" href="{{route ('kontak')}}">KONTAK</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                <div class="my-5 mt-5 " style="" data-aos="fade-up">
                    <ul class="navbar-nav " style="margin-top: 100px">
                    <div class="" style="border-top: 3px solid black; width:100px; margin-bottom: 15px;"></div>
                    <h1 class="display-5 mt-3 animate__animated animate__fadeInUp" >HEALTHY</h1>
                    <h1 class="font-weight-bold my-3 animate__animated animate__fadeInUp display-4 fw-bold">TASTY FOOD</h1>

                    <p class="py-3 animate__animated animate__fadeInUp">Lorem ipsum dolor, sit amet consectetur adipisicing elit .iusto magnam illum praesentium inventore nemo, Assumenda at odio, doloribus perspiciatis adipisci ipsum iusto magnam illum praesentium inventore nemo, incidunt distinctio aperiam, excepturi eum ea. Aliquam, itaque deleniti.</p>
                    <div class="container">
                        <div class="row">
                            <button type="button" class="col-lg-6 col-md-6 my-2 btn btn-dark animate__animated animate__fadeInUp" style="border-radius: 0">
                                <a class="text-light" style="text-decoration: none" href="{{url('tentang')}}">TENTANG KAMI</a>
                            </button> 
                        </div>  
                    </div>
                </div>
            </div>
            <div class="overflow-hidden">
                <img src="{{ asset('template/img-4-2000x2000.png')}}" width="800px" style="margin-top: -200px"  alt="" class="d-none d-sm-block animate__animated animate__fadeInRight">
            </div>
            
        </div>
    </div>

    <div class="container text-center p-5" data-aos="fade-up">
        <h2 class="mt-3 animate__animated animate__fadeInUp">TENTANG KAMI</h2>
        <div class="container my-4">
            <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vitae eius, aspernatur architecto voluptatum assumenda, ex harum libero quia inventore sint. Libero possimus temporibus corrupti optio modi numquam quibusdam alias sint id? In iusto placeat laudantium maxime atque optio ipsam. Aliquam quod consequuntur voluptas, minima quasi accusamus beatae quam maxime distinctio fugiat exercitationem nam vitae minus, nisi quisquam repellendus eos.</p>
            <div class="d-flex justify-content-center">
                <div class="my-4" style="border-top: 3px solid black; width:80px;"></div>
            </div>
        </div>
    </div>
    
    <div class="pt-5"  style="background-image: url('template/navbar.png');  background-size: cover;">
        <div class="container mt-5">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="cardcostum col-lg-3 col-md-6 mt-5">
                    <div class="card mb-5 ">
                        <img src="{{ asset("template/img-1.png") }}" class="rounded-image" alt="...">
                        <div class="card-body" style="margin-top: -7rem; ">
                            <h3 class="card-title text-center">Lorem ipsum</h3>
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel alias laudantium et! Rerum, beatae minus!</p>
                        </div>
                    </div>
                </div>
                <div class="cardcostum col-lg-3 col-md-6  mt-5">
                    <div class="card mb-5 ">
                        <img src="{{ asset("template/img-2.png") }}" class="rounded-image" alt="...">
                        <div class="card-body" style="margin-top: -7rem; ">
                            <h3 class="card-title text-center">Lorem ipsum</h3>
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel alias laudantium et! Rerum, beatae minus!</p>
                        </div>
                    </div>
                </div>  
                <div class="cardcostum col-lg-3 col-6  mt-5">
                    <div class="card mb-5 ">
                        <img src="{{ asset("template/img-3.png") }}" class="rounded-image" alt="...">
                        <div class="card-body" style="margin-top: -7rem; ">
                            <h3 class="card-title text-center">Lorem ipsum</h3>
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel alias laudantium et! Rerum, beatae minus!</p>
                        </div>
                    </div>
                </div> 
                <div class="cardcostum col-lg-3 col-md-6  mt-5">
                    <div class="card mb-5 ">
                        <img src="{{ asset("template/img-4-2000x2000.png") }}" class="rounded-image" alt="...">
                        <div class="card-body" style="margin-top: -7rem; ">
                            <h3 class="card-title text-center">Lorem ipsum</h3>
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel alias laudantium et! Rerum, beatae minus!</p>
                        </div> 
                    </div>
                </div>  
            </div>
            
        </div>
    </div>
    

    <div class="bg-body-secondary">
        <div class="container py-5 " data-aos="fade-up">
            <h2 class="text-center mb-5">BERITA KAMI</h2>
            <div class="row">
                @foreach($beritaData as $berita)
                @if($berita->id == 1)
                    <div class="homeberita col-lg-6 col-sm-12 mb-4">
                        <div class="card shadow">
                            <img src="{{ asset('gambar-berita/' . $berita->image) }}" style="object-fit: cover; height: 24rem" class="card-img-top" alt="...">
                            <div class="card-body" style="height: 25rem">
                                <h4 class="card-title">{{ strlen($berita->title) > 10 ? substr($berita->title, 0, 10) . '...' : $berita->title }}</h4>
                                <p class="card-text">{{ strlen($berita->isi) > 780 ? substr($berita->isi, 0, 780) . '...' : $berita->isi }}</p>
                                <a href="{{ route ('singlepage', ['id' => $berita->id]) }}" class="text-warning" style="text-decoration: none">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach            
                <div class="homeberita col-lg-6 col-sm-12" >
                    <div class="row">
                        @foreach($beritaData as $berita)
                        @if($berita->id >= 2 && $berita->id <= 5)
                            <div class="col-6 mb-3">
                                <div class="card shadow">
                                    <img src="{{ asset('gambar-berita/' . $berita->image) }}" style="object-fit: cover; height: 12rem;" class="card-img-top" alt="...">
                                    <div class="card-body" style="height: 12rem;">
                                        <h5 class="card-title">{{ strlen($berita->title) > 10 ? substr($berita->title, 0, 10) . '...' : $berita->title }}</h5>
                                        <p>{{ strlen($berita->isi) > 100 ? substr($berita->isi, 0, 100) . '...' : $berita->isi }}</p>
                                        <a href="{{ route ('singlepage', ['id' => $berita->id]) }}" class="text-warning" style="text-decoration: none">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                </div>
            </div>
        </div>

        <div class="py-5 bg-light">
            <h2 class="text-center mb-5">GALERI KAMI</h2>
            <div class="container" data-aos="fade-up">
                <div class="row galericostum mb-4">
                    @foreach ($galeriData->slice(0, 6) as $galeri)
                    <div class="col-4 mt-4">
                        <img src="{{ asset('gambar-berita/' . $galeri['image']) }}" style="object-fit: cover;  height: 20rem; widht: 17rem" class="card-img-top rounded shadow" alt="...">
                    </div> 
                    @endforeach
                </div>
            </div>
    
            <div class=" d-flex justify-content-center my-5">
                <button type="button" class="btn btn-dark" style="width: 250px; border-radius: 0">
                    <a class="text-light" style="text-decoration: none" href="{{url('galeri')}}">LIHAT LEBIH BANYAK</a>
                </button> 
            </div>
        </div>
    @include('components.footer')

    <script>
        function handleScroll() {
    const navbar = document.getElementById("navbarHome");

    if (window.scrollY > 0) {
        navbar.classList.add("bg-home");
    } else {
        navbar.classList.remove("bg-home");
    }
}

window.addEventListener("scroll", handleScroll);
    </script>

    <script src="{{asset ('js/javascript.js')}}"></script>
    @endsection


