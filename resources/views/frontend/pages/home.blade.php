@extends('frontend.layouts.master')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ asset('frontend_assets/img/slide/slide-1.jpg') }})">
          <div class="container">
            <h2>{{ __('index.Say goodbye to') }} <span>{{ __('index.traditional consultations') }}</span></h2>
            <p>{{__('index.firstParagraph') }}</p>
            <a href="about" class="btn-get-started scrollto">{{__('index.Read More')}}</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{ asset('frontend_assets/img/slide/slide-2.jpg') }})">
          <div class="container">
            <h2>{{__('index.secondTitle')}}</h2>
            <p>{{__('index.secondParagraph')}}</p>
            <a href="#about" class="btn-get-started scrollto">{{__('index.Read More')}}</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{ asset('frontend_assets/img/slide/slide-3.jpg') }})">
          <div class="container">
            <h2>{{__('index.thirdTitle')}}</h2>
            <p>{{__('index.thirdParagraph')}}</p>
            <a href="#about" class="btn-get-started scrollto">{{__('index.Read More')}}</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  <main id="main">




    <!-- ======= Services Section ======= -->
  <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{__('header.Services')}}</h2>
          <p>{{__('index.Paragraphfour')}}</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">{{__('index.computer-aided diagnosis')}}</a></h4>
            <p class="description">{{__('index.firstService')}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">{{__('index.Clinical Decision Support')}}</a></h4>
            <p class="description">{{__('index.secondService')}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">{{__('index.Patient monitoring')}}</a></h4>
            <p class="description">{{__('index.thirdService')}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">{{__('index.Chronic disease prevention and management')}}</a></h4>
            <p class="description">{{__('index.fourthService')}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">{{__('index.Medical image analysis')}}</a></h4>
            <p class="description">{{__('index.fifthService')}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">{{__('index.Home Care Assistance')}}</a></h4>
            <p class="description">{{__('index.SixthService')}}</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->





    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>"The testimonials from satisfied DoctorSina patients are proof of the positive impact this platform has on people's lives. Users are unanimous that DoctorSina is a convenient, efficient, and high-quality solution for accessing medical care, no matter where they are."</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  DoctorSina saved my life! Thanks to this virtual medicine solution, I was able to get a quick diagnosis and effective treatment for a serious illness." - Alice, DoctorSina patient.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="frontend_assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  As a physician, I was impressed with DoctorSina's state-of-the-art features. This platform has enabled me to provide superior care to my patients, no matter where they are.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="frontend_assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Dr. Smith,</h3>
                <h4>DoctorSina partner physician.</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am so happy to have discovered DoctorSina. This telemedicine solution is easy to use, efficient and affordable - everything I needed to take care of my health.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="frontend_assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>John Karlis</h3>
                <h4>DoctorSina patient.</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I highly recommend DoctorSina to anyone looking to improve their health. With its advanced features, DoctorSina offers superior medical care at an affordable price.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="frontend_assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Mario Brandon</h3>
                <h4>DoctorSina user.</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  DoctorSina is a true asset to my medical practice. With this telemedicine solution, I can provide more efficient and personalized care to my patients wherever they are.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="frontend_assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Dr. Lee</h3>
                <h4>DoctorSina partner physician.</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->





    <!-- ======= Pricing Section ======= -->

<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{__('index.Pricing')}}</h2>
            <p>{{__('index.PricingText')}}</p>
        </div>
      
        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="fade-up" data-aos-delay="100">
                    <h3>{{ $category->name }}</h3>
                     <ul>
                        @foreach($category->options as $option)
                        <li>
                          <h4><sup>$</sup>{{ $option->price }}<span> / month</span></h4>
                     
                        @endforeach
                    </ul>
                     <ul>
                        @if($category->name == 'free')
                            <li>intelligent medical record</li>
                            <li>Patient monitoring</li>
                            <li>Clinical Decision Support</li>
                                   <li class="na">Chronic disease prevention</li>
                              
                <li class="na">Computer-aided diagnosis</li>
                        <div class="btn-wrap">
                        <a href="/dashboard" class="btn-buy">Try Now</a>
                    </div>
                        @elseif($category->name == 'silver')
                            <li>intelligent medical record</li>
                            <li>Patient monitoring</li>
                            <li>Clinical Decision Support</li>
                            <li>2 Computer-aided diagnosis</li>
                                <li class="na">Chronic disease prevention</li>
                                 <div class="btn-wrap">
                <a href="/plans" class="btn-buy">Buy Now</a>
              </div>
                        @elseif($category->name == 'gold')
                            <li>intelligent medical record</li>
                            <li>Patient monitoring</li>
                            <li>Clinical Decision Support</li>
                            <li>7 Computer-aided diagnosis</li>
                            <li>Chronic disease prevention</li>
                             <div class="btn-wrap">
                <a href="/plans" class="btn-buy">Buy Now</a>
              </div>
                        @elseif($category->name == 'premium')
                            <li>intelligent medical record</li>
                            <li>Patient monitoring</li>
                            <li>Clinical Decision Support</li>
                            <li>illimited Computer-aided diagnosis</li>
                            <li>Chronic disease prevention</li>
                             <div class="btn-wrap">
                <a href="/plans" class="btn-buy">Buy Now</a>
              </div>
                        @endif
                    </ul>
                  
                   
                  
                </div>
            </div>
            @endforeach
        </div>
       
    </div>
</section>




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>{{__('index.Contact')}}</h2>
          <p>{{__('index.ContactText')}}</p>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3081.1465689859406!2d-75.71731092370105!3d39.44341911430207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c7a1b129a02139%3A0x3906084a8af1dccf!2sMedicusClinic-DoctorSina!5e0!3m2!1sfr!2stn!4v1681998622197!5m2!1sfr!2stn" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>{{__('index.Our Address')}}</h3>
                  <p>{{__('index.adress')}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>{{__('index.Email Us')}}</h3>
                  <p>contact@doctorsina.net<br>support@doctorsina.net</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>{{__('index.Call Us')}}</h3>
                  <p>(+1) 579-373-2177<br>(+1) 579-372-6475</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{route('contact.store')}}" method="post"  >
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{__('index.Your Name')}}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{__('index.Your Email')}}" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__('index.Subject')}}" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="Message" rows="7" placeholder="{{__('index.Message')}}" required></textarea>
              </div>

              <div class="text-center"><button type="submit"  class="btn btn-primary mt-1">{{__('index.Send Message')}}</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
