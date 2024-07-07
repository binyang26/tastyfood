@extends('components.dashboard')

@section('konten')
<!-- Page Content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row" style="display: block;">
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Table Contact</h3>
                    </div>
                <div class="x_panel">
                    <div class="x_title">
                        @foreach ($data as $contact)
                        <a href='{{ url('admin/contact/'.$contact->id.'/edit') }}' class="btn btn-primary">Edit Data</a>
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
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title text-center">Email </th>
                                        <th class="column-title text-center">Phone </th>
                                        <th class="column-title text-center">Location </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ $contact->email }}</td>
                                        <td class="text-center">{{ $contact->phone }}</td>
                                        <td class="text-center">{{ $contact->location }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Peta Google Maps -->
        <div id="google-map" style="height: 400px;"></div>
    </div>
</div>

@endsection
    