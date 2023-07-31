@extends('frontend.layouts.master')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our partners</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Partners</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
           @foreach($partners as $partner)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img"> <img src="{{ asset('frontend_assets/img/'.$partner->logo) }}" class="img-fluid" alt=""></div>
              <h4 class="title"><a href="">{{$partner->partner_name}}</a></h4>
              <p class="description">{{$partner->desciption}}</p>
            </div>
               @endforeach
          </div>

        </div>
    </section><!-- End Featured Services Section -->
@endsection