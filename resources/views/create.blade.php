@extends('layouts.template')

@section('hero')
<section id="hero" class="d-flex align-items-center justify-content-center">
	<div class="container position-relative">
		<h1>Welcome to Baker</h1>
		<h2>Provide Good Quality of Product</h2>
	</div>
</section><!-- End Hero -->


@endsection

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
	<div class="container">

		<div class="section-title">
			<h2>Create New Product</h2>
			<p>Here you can upload any product that you want</p>
		</div>

		<div class="row">

			<div class="col-lg-6">

				<img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">

			</div>

			<div class="col-lg-6">
				<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" class="product-form">
					@csrf
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="title" id="subject" placeholder="Product Name" required>
					</div>
					<div class="form-group mt-3">
						<textarea class="form-control" name="caption" rows="5" placeholder="Product Description" required></textarea>
					</div>
					<div class="form-group mt-3">
						<input type="file" class="form-control" name="foto" id="subject" placeholder="" required>
					</div>
					<div class="text-center mt-3">
						<a href = "{{route('home')}}"class = "button mx-3" type="submit">Kembali</a>
						<button type="submit">Upload Now</button>
					</div>
				</form>
			</div>

		</div>

	</div>
</section><!-- End Contact Section -->

@endsection