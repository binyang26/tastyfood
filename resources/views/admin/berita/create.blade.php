@extends('components.dashboard')

@section('konten')
    			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					@if ($errors->any())
					<div class="alert alert-secondary alert-dismissible fade show" role="alert">
						<ul>
							@foreach ($errors->all() as $error)
								<li>
									<h6>{{ $error }}</h6>
								</li>
							@endforeach
						</ul>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
					</div>
				@endif
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Create Berita</h2>
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
                                    <button class="my-2 btn btn-primary" type="submit"><a href="{{ url('/admin/berita')}}" class="text-white">Kembali</a></button>

									{{-- FORM CREATE BERITA --}}
									<form action='{{ url('admin/berita') }}' method='post' enctype="multipart/form-data" id="demo-form2">
                                    @csrf
										<div class="my-3">
											<label class="">Title :</span>
											</label>
											<input type="text" class="form-control" name='title' value="{{ Session::get('title')}} "id="title">
										</div>
										<div class="my-3">
											<label class="">Isi :</span>
											</label>
											<textarea class="form-control" name="isi" id="isi" rows="6">{{ Session::get('isi') }}</textarea>
										</div>
										<div class="my-3">
											<label for="image" class="btn btn-secondary">
												<i class="fa fa-cloud-upload"></i> Upload Foto
											</label>
											<input type="file" class="inputfile d-none" name='image' id="image" onchange="previewImage()">
											<img src="" id="imagePreview" style="max-width: 100%; max-height: 200px; display: none;" alt="Preview Image">
										</div>
										<div class="ln_solid"></div>
										<div class="my-4">
											<button type="submit" class="btn btn-success" name="submit">Simpan</button>
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
				ClassicEditor
				  .create(document.querySelector('#isi'))
				  .catch(error => {
					console.error(error);
				  });
			  </script>
			
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
