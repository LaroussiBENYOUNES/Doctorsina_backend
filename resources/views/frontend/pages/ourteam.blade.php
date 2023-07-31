@extends('frontend.layouts.master')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our team</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
  <!-- ======= Team Section ======= -->
  <section class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          @foreach($teams as $team)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('frontend_assets/img/'.$team->picture) }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="{{$team->twitter_url}}"><i class="bi bi-twitter"></i></a>
                  <a href="{{$team->facebook_url}}"><i class="bi bi-facebook"></i></a>
                  <a href="{{$team->instagram_url}}"><i class="bi bi-instagram"></i></a>
                  <a href="{{$team->linkedin_url}}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{$team->first_name}} {{$team->last_name}}</h4>
                <span>{{$team->job_name}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->
@endsection