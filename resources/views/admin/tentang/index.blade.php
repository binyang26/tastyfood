@extends('components.dashboard')

@section('konten')
<!-- Page Content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Visi Misi</h3>
            </div>
            <div class="title_right">
                <!-- Pencarian -->
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <form class="d-flex" action="{{ url('admin/contact') }}" method="get">
                        </form>
                    </div>
                </div>
                <!-- /Pencarian -->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row" style="display: block;">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        @foreach ($data as $tentang)
                        <a href='{{ url('admin/tentang/'.$tentang->id.'/edit') }}' class="btn btn-primary">Edit Data</a>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class a dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        Visi :  {!! $tentang->visi !!}
                        Misi :   {!! $tentang->misi !!}
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <div class="clearfix"></div>

</div>
<!-- /Page Content -->



@endsection
    