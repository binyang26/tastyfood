@extends('components.dashboard')

@section('konten')
    			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Edit Contact</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
                                    <button class="my-2 btn btn-primary" type="submit"><a href="{{ url('/admin/contact')}}" class="btn-primary">Kembali</a></button>
									<form action='{{ url('admin/contact/'.$data->id) }}' method='post' enctype="multipart/form-data">
										@csrf
										@method('PUT')
										<div class="my-3 p-3 bg-body rounded shadow-sm">
                                            <div class="mb-3 row">
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name='email' value="{{ $data->email }}" id="email">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name='phone' value="{{ $data->phone }}" id="phone">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="location" class="col-sm-2 col-form-label">Location</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name='location' value="{{ $data->location }}" id="location">
                                                </div>
                                            </div>
											
											<div class="mb-3 row">
												<label for="jurusan" class="col-sm-2 col-form-label"></label>
												<div class="col-sm-10">
													<button type="submit" class="btn btn-success" name="submit">SIMPAN</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->

    <script>
        function previewImage() {
            var input = document.getElementById('image');
            var imagePreview = document.getElementById('imagePreview');
        
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
        
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
@endsection
