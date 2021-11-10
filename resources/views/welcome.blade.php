@extends('layouts.template')

@section('hero')
<section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container position-relative">
            <h1>Welcome to Baker</h1>
            <h2>Provide Good Quality of Product</h2>
            <a href = "{{route('home')}} "class="btn-get-started scrollto">Start Now</a>
        </div>
</section><!-- End Hero -->
    

@endsection

@section('content')
<!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
        
                <div class="row">
        
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>
        
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>
        
                </div>
        
            </div>
        </section><!-- End Clients Section -->
@endsection