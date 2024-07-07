@extends('layout.app')

@section('page')
    <div class="bg-body-secondary">
        <div class="container py-5" >
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <h2 class="my-4">TASTY FOOD</h2>
                    <p style="font-weight: bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quae alias, possimus delectus animi cumque. Fugiat voluptas assumenda eos, culpa reprehenderit, similique nostrum dolore exercitationem eveniet quas atque amet praesentium.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptas eveniet blanditiis architecto reprehenderit, nihil, fugit eaque tempora ad a, illo enim cupiditate error quidem!</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row galeriimg">
                        <div class="col-6">
                            <img src="{{asset ('template/brooke-lark-oaz0raysASk-unsplash.jpg')}}" style="object-fit: cover; height: 395px" class="card-img-top rounded shadow" alt="...">
                        </div>
                        <div class="col-6">
                            <img src="{{asset ('template/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg')}}" style="object-fit: cover; height: 395px" class="card-img-top rounded shadow" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <div class="p-lg-5 p-3">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row galeriimg">
                        <div class="col-6">
                            <img src="{{asset ('template/fathul-abrar-T-qI_MI2EMA-unsplash.jpg')}}" style="object-fit: cover; height: 270px" class="card-img-top rounded shadow"  alt="...">
                        </div>
                        <div class="col-6">
                            <img src="{{asset ('template/michele-blackwell-rAyCBQTH7ws-unsplash.jpg')}}" style="object-fit: cover; height: 270px"  class="card-img-top rounded shadow" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="my-3">VISI</h2>
                    @foreach ($data as $item)     
                    {!! $item->visi !!}
                    @endforeach
                </div>
            </div>
        
    </div>

        <div class="my-5 p-lg-5 p-3" >
            <div class="row galeriimg">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2 class="my-2">MISI</h2>
                    @foreach ($data as $item) 
                    {!! $item->misi !!}
                    @endforeach
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    {{-- <img src="{{asset ('template/sanket-shah-SVA7TyHxojY-unsplash.jpg')}}" alt="" class="rounded card-img-top" style="object-fit: cover; width: 500px; height: 250px;"> --}}
                    <img src="{{asset ('template/sanket-shah-SVA7TyHxojY-unsplash.jpg')}}" style="object-fit: cover; height: 270px" class="card-img-top rounded shadow" alt="...">
                </div>
            </div>
        </div>

@endsection

