@extends('layout.app')

@section('page')
    <div class="p-2">
        <div class="container">
            <h2 class="my-5">KONTAK KAMI</h2>
            <form action="{{route('kontak.kirim')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="mb-3">
                            <input type="text" class="form-control border-2 rounded" name="subject" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control border-2 rounded" name="name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control border-2 rounded" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="mb-3">
                            <textarea class="form-control form-control border-2 rounded" name="message" rows="6" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <input type="hidden" name="nomor" value="6289648112615" id="">
                        <button type="submit" name="submit" class="btn btn-dark">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container p-3">
        <div class="row justify-content-evenly contact-costum">
            @foreach ($data as $item)
            <div class="col-4">
                <div class="position-relative text-center">
                    <a href="#" class="text-decoration-none text-dark">
                        <img src="{{asset ('template/Group 66.png')}}" style="width: 65px;" alt="">
                        <h6 class="my-2">Email</h6>
                    </a>
                    <p>{{ $item->email }}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="position-relative text-center">
                    <a href="#" class="text-decoration-none text-dark">
                        <img src="{{asset ('template/Group 67.png')}}" style="width: 65px;" alt="">
                        <h6 class="my-2">PHONE</h6>
                    </a>
                    <p>{{ $item->phone }}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="position-relative text-center">
                    <a href="#" class="text-decoration-none text-dark">
                        <img src="{{asset ('template/Group 68.png')}}" style="width: 65px;" alt="">
                        <h6 class="my-2">LOCATION</h6>
                    </a>
                    <p>{{ $item->location }}</p>
                </div>
            </div>
                            
            @endforeach
        </div>
    </div>

    <div class="bg-body-secondary">
        <div class="container text-center p-5">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558806782065!2d107.66398729999999!3d-6.9432114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCYBERLABS%20-%20Jasa%20Digital%20Marketing%20%7C%20Jasa%20Pembuatan%20Website%20%7C%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sid!4v1695303856172!5m2!1sid!2sid"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

@endsection
