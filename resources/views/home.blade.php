
@extends('layouts.template')

@section('hero')
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
        <h1>Welcome to Baker</h1>
        <h2>Provide Good Quality of Product</h2>
        <a href="{{route('product.create')}}" class="btn-get-started scrollto">Create New Product</a>
    </div>
</section><!-- End Hero -->


@endsection


@section('content')
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Product</h2>
            <p>Here the list of quality product provide by Us</p>
        </div>

        <div class="row portfolio-container mt-5">
            <div class="col-lg-4 col-md-6 portfolio-item">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                </div>
            </div>
            @foreach($product as $p)
            <div class="col-lg-4 col-md-6 portfolio-item">
                <img src="{{$p->foto}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{$p->title}}</h4>
                    <p>{{$p->caption}}</p>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section><!-- End Portfolio Section -->
@endsection