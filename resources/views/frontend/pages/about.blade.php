@extends('frontend.layouts.master')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About us</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>About us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Looking for a cutting-edge solution to enhance the accuracy and efficiency of medical diagnoses? Look no further than DoctorSina! Our innovative platform uses the latest in artificial intelligence technology to establish diagnoses and edit medical reports with unparalleled precision and speed. With DoctorSina, you can be confident that you're receiving the highest quality of care possible, while saving time and streamlining your medical processes. Try DoctorSina today and experience the future of healthcare!</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="/frontend_assets/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Revolutionize Your Medical Practice with Doctor Sina - Your Future-Ready Virtual Doctor!</h3>
            <p class="fst-italic">
              Doctor Sina is a virtual doctor that can revolutionize your medical practice. With cutting-edge technology and future-ready features, Doctor Sina is ready to help you provide better care to your patients.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Accessibility: As a virtual solution, Doctor Sina allows patients to access medical care from anywhere, at any time, without having to physically move.</li>
              <li><i class="bi bi-check-circle"></i> Efficiency: Doctor Sina uses state-of-the-art technology to facilitate communication between patients and physicians.</li>
              <li><i class="bi bi-check-circle"></i> Quality: With its artificial intelligence and patient tracking capabilities, Doctor Sina can help doctors provide better quality care. Patients can benefit from more accurate diagnoses and more tailored treatments for their specific health conditions.</li>
            </ul>
            <p>
              Doctor Sina is a virtual medicine solution that aims to improve access and quality of medical care. With cutting-edge features such as AI, telemedicine, and patient tracking, Doctor Sina can help physicians provide more efficient and personalized care to their patients. With its ease of use and 24-hour availability, Doctor Sina is a valuable tool for patients and healthcare professionals looking for an innovative and convenient healthcare solution.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
@endsection