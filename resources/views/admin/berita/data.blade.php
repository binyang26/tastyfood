@extends('components.dashboard')

@section('konten')
<!-- Page Content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Table Berita</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <form class="d-flex" action="{{ url('admin/berita') }}" method="get">
                            <input type="text" class="form-control" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block;">
            @if (session()->has('success'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <a href='{{ url('admin/berita/create') }}' class="btn btn-primary">+ Tambah Data</a>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title text-center">No </th>
                                        <th class="column-title">Title </th>
                                        <th class="column-title text-center">Isi </th>
                                        <th class="column-title text-center">Gambar </th>
                                        <th class="column-title no-link last text-center" colspan="2" style="width: 25%"><span class="nobr">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    @foreach ($data as $index => $berita)
                                    <tr>
                                        <td scope="row">{{ $index + 1 }}</td>
                                        <td>{{ $berita->title }}</td>
                                        <td colspan="6">
                                            {!! strlen($berita->isi) > 400 ? substr($berita->isi, 0, 400) . '...' : $berita->isi !!}
                                            <a href="{{ route('singlepage', ['id' => $berita->id]) }}" class="text-warning" style="text-decoration: none"> Baca selengkapnya</a>
                                        </td>
                                        <td><img src="{{ asset('gambar-berita/' . $berita->image) }}" style="object-fit: cover;" alt="" width="200px" height="150px"></td>
                                        <td><a href="{{ url('admin/berita/'.$berita->id.'/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                                        <td>
                                            <form onsubmit="return confirm('Yakin ingin menghapus data?')" class="d-inline" action="{{ url('admin/berita/'.$berita->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" name="submit" class="btn btn-danger btn-sm p-2"> <i class="fa fa-trash-o"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->
@endsection
