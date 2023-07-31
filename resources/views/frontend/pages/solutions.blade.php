@extends('frontend.layouts.master')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Solutions</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Solutions</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
  <!-- ======= Solutions Section ======= -->
  <section  class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Solutions</h2>
          <p>"The DoctorSina platform is more than just a telemedicine solution. With its cutting-edge technology based on artificial intelligence, blockchain, web 3.0 and computer vision, DoctorSina offers an innovative and personalized medical care experience. Patients can benefit from more accurate diagnosis and more tailored treatments through DoctorSina's advanced features. With this state-of-the-art platform, medicine has never been more advanced."</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Cardiology</h4>
                  <p>Cardiology is a complex field that requires special attention and superior care.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Neurology</h4>
                  <p>DoctorSina is revolutionizing the field of neurology with its cutting-edge AI-based capabilities.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Hepatology</h4>
                  <p>Hepatology is a branch of medicine that deals with diseases of the liver and biliary system.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Pediatrics</h4>
                  <p>Smart pediatrics with DoctorSina offers a new way to care for our children</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Cardiology</h3>
                <p class="fst-italic">Cardiology is a complex field that requires special attention and superior care. With DoctorSina, patients can benefit from top-notch cardiology expertise with advanced features such as ECG analysis, blood pressure monitoring and heart rate monitoring.</p>
                <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                <p>With these advanced tools, DoctorSina can help healthcare professionals deliver more accurate, faster and more efficient cardiac care. For those looking for a complete cardiology healthcare solution, DoctorSina is the ideal choice.</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Neurology</h3>
                <p class="fst-italic">DoctorSina is revolutionizing the field of neurology with its cutting-edge AI-based capabilities. With advanced diagnostic and monitoring tools, DoctorSina enables neurologists to provide more accurate and personalized care to their patients. Patients can benefit from faster and more accurate diagnosis, as well as treatments that are more tailored to their specific condition.</p>
                <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                <p>With DoctorSina, treating neurological disorders is easier and more effective than ever.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Hepatology</h3>
                <p class="fst-italic">Hepatology is a branch of medicine that deals with diseases of the liver and biliary system. With DoctorSina, patients with liver disease can receive superior monitoring and treatment through advanced AI and blockchain-based features. Physicians can use the patient tracking features to monitor symptoms and adjust treatments in real time for more effective and personalized management.</p>
                <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                <p>With DoctorSina's virtual platform, patients with liver disease can access medical care at any time, without having to physically travel. This telemedicine solution is especially helpful for patients who live far from specialized care centers or have mobility issues. Ultimately, DoctorSina provides a comprehensive and convenient healthcare experience for patients with liver disease, using the most advanced technologies to ensure superior care.</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Pediatrics</h3>
                <p class="fst-italic">Smart pediatrics with DoctorSina offers a new way to care for our children. With its cutting-edge technology, DoctorSina allows parents to access medical care for their children anywhere, anytime. Parents can get fast, personalized medical advice for their child without having to travel to a clinic or wait days for an appointment.</p>
                <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                <p>With its symptom tracking features, DoctorSina allows parents to monitor their child's health and receive alerts if something is wrong. Doctors can use AI technology to make more accurate diagnoses and provide more tailored treatments for each child. With DoctorSina, smart pediatrics is at your fingertips, providing superior care for children of all ages.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Solutions Section -->
@endsection