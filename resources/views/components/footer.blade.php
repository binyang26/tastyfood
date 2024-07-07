<footer>
    <div class="bg-dark text-light p-4">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4 col-sm-12">
                    <h4>Tasty Food</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde dolorem, autem aut quasi,
                        soluta explicabo eos dolores reiciendis odio nam sequi suscipit ea praesentium eaque, nobis
                        perspiciatis exercitationem nesciunt doloremque molestias? Non, dignissimos maiores? Obcaecati
                        incidunt eaque cumque asperiores dolorum.
                    </p>

                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <h5>Useful links</h5>
                            <ul class="list-unstyled">
                                <li class="list-group-item my-2">
                                    <a class="nav-link text-light active" aria-current="page" href="{{route ('home')}}">Home</a>
                                </li>
                                <li class="list-group-item my-2">
                                    <a class="nav-link text-light" href="{{route ('tentang')}}">Tentang</a>
                                </li>
                                <li class="list-group-item my-2">
                                    <a class="nav-link text-light" href="{{route ('berita')}}">Berita</a>
                                </li>
                                <li class="list-group-item my-2">
                                    <a class="nav-link text-light" href="{{route ('galeri')}}">Galeri</a>
                                </li>
                                <li class="list-group-item my-2">
                                    <a class="nav-link text-light" href="{{route ('kontak')}}">Kontak</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-4">
                            <h5>Privacy</h5>
                            <ul class="list-unstyled">
                                <li class="list-group-item my-2">Karir</li>
                                <li class="list-group-item my-2">Tentang Kami</li>
                                <li class="list-group-item my-2">Kontak Kami</li>
                                <li class="list-group-item my-2">Servis</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 ">
                            <h5>Contact Info</h5>
                            <ul class="list-unstyled">
                                @foreach ($contact as $item)
                                <li class="list-group-item my-2">
                                    <img class="mx-2" src="{{asset ('template/ic_markunread_24px.png')}}" alt="">{{ $item->email }}
                                </li>
                                <li class="list-group-item my-2">
                                    <img class="mx-2" src="{{asset ('template/ic_call_24px.png')}}" alt="">{{ $item->phone }}</p>
                                </li>
                                <li class="list-group-item my-2">
                                    <img class="mx-2" src="{{asset ('template\ic_place_24px.png')}}" alt="">{{ $item->location }}
                                </li>
                                @endforeach
                            </ul>           
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <img src="{{asset ('template/001-facebook.png')}}" alt="" width="50px" class="me-2">
                <img src="{{asset ('template/002-twitter.png')}}" alt="" width="50px">
            </div>
        </div>
    </div>
</footer>
