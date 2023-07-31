@extends('frontend.layouts.master')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
<main id="main">
  <!-- ======= Services Section ======= -->
  <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>"DoctorSina is reinventing the way we access medical care. Through its state-of-the-art virtual platform, DoctorSina is delivering convenient, efficient, high-quality healthcare services for everyone. With DoctorSina, the medicine of the future is already here."</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Computer-aided diagnosis</a></h4>
            <p class="description">An artificial intelligence-based application can help healthcare professionals diagnose diseases by analyzing patients' symptoms, lab tests, and medical history.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Clinical Decision Support</a></h4>
            <p class="description">AI-based apps can provide personalized treatment recommendations based on a patient's medical history, symptoms and diagnostic data.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">Patient monitoring</a></h4>
            <p class="description">AI-based apps can help healthcare professionals monitor patients remotely by collecting data on their health status and providing alerts for significant changes.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Chronic disease prevention and management</a></h4>
            <p class="description">AI-based applications can help patients manage chronic diseases by providing medication reminders, lifestyle advice and personalized exercise programs.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Medical image analysis</a></h4>
            <p class="description">AI-based applications can help healthcare professionals interpret medical images such as X-rays, MRIs and ultrasounds by providing automatic analysis to aid diagnosis.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Home Care Assistance</a></h4>
            <p class="description">AI-based apps can help patients manage their health at home by providing medication reminders, lifestyle tips, and connecting them to healthcare professionals in case of an emergency.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
</main>
    @endsection