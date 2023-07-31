@extends('backend.layouts.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="row">

        <!-- Congratulations Card -->
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                            @endif
                            <h5 class="card-title text-primary">Congratulations {{ Auth::user()->first_name }}! 🎉</h5>
                            <p class="mb-4">
                                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                your profile.
                            </p>
                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('backend_assets/img/illustrations/man-with-laptop-light.png') }}"
                                height="140" alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Congratulations Card -->
        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Timeline</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="timeline p-0 m-0">
                        <li class="timeline-item">

                            <div class="timeline-content">
                                <small class="text-muted">Cardio</small>
                                <h6>Send money</h6>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">

                            <div class="timeline-content">
                                <small class="text-muted">Cardio</small>
                                <h6>Send money</h6>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">

                            <div class="timeline-content">
                                <small class="text-muted">Cardio</small>
                                <h6>Send money</h6>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <!-- Add more timeline items as needed -->
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->


        <!-- Glucose Tracking Chart -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h4>Blood Sugar tracking curve (g/L)</h4>
                    <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#ModalCreateGlucose">
                        <i class="fas fa-plus me-2"></i>
                    </button>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div id="GlucosesChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Glucose Tracking Chart -->

        <!-- Blood Pressure Tracking Chart -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h4>Blood Pressure tracking curve (mm hg)</h4>
                    <button class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#ModalCreateBloodPressure">
                        <i class="fas fa-plus me-2"></i>
                    </button>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div id="BloodPressureChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Blood Pressure Tracking Chart -->

        <!-- Temperature Tracking Chart -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h4>Temperature tracking curve (c°)</h4>
                    <button class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#ModalCreateTemperature">
                        <i class="fas fa-plus me-2"></i>
                    </button>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div id="TemperatureChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Temperature Tracking Chart -->

        <!-- Hemoglobin Tracking Chart -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h4>Hemoglobin tracking curve (mm hg)</h4>
                    <button class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#ModalCreateHemoglobin">
                        <i class="fas fa-plus me-2"></i>
                    </button>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div id="HemoglobinChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Hemoglobin Tracking Chart -->


        <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-100">
                    <div class="card-header">
                  <h4>Heart Rate tracking curve (bpm)</h4>
                  <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#ModalCreateHeartRate">
                      <i class="fas fa-plus me-2"></i>
                  </button>
                    </div>
                    <div class="card-body px-0">
                      <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">

                          <div id="BloodPressureChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
      </div>
    <!--/ HeartRate Tracking Chart -->

        <!-- Weight Tracking Chart -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h4>Weight tracking curve (kg)</h4>
                    <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#ModalCreateWeight">
                        <i class="fas fa-plus me-2"></i>
                    </button>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div id="WeightChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Weight Tracking Chart -->

    </div>

<style>
  /* CSS pour la timeline */
  .timeline {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .timeline-item {
    display: flex;
    margin-bottom: 1.5rem;
    align-items: flex-start;
    position: relative;
    padding-left: 60px;
  }

  .timeline-badge {
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }

  .timeline-badge img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .timeline-content {
    margin: 0;
    background-color: #f9f9f9;
    border: 1px solid #e1e1e1;
    padding: 1rem;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .timeline-content h6 {
    margin: 0;
    font-size: 16px;
  }

  .timeline-content .text-muted {
    color: #888;
    font-size: 14px;
  }

  .timeline-content .user-progress {
    margin-top: 1rem;
  }

  .timeline-content .user-progress h6 {
    margin-right: 0.5rem;
    font-size: 18px;
    font-weight: bold;
    color: #2196f3;
  }

  .timeline-content .text-muted {
    font-size: 14px;
  }
</style>

    <!-- Transactions Chart (not sure where to place this chart) -->
    <script type="text/javascript">
        var Weightdata = JSON.parse('{!! json_encode($weightsValues) !!}');
        var WeightDates = JSON.parse('{!! json_encode($weightDates) !!}');
        var glucoseData = JSON.parse('{!! json_encode($glucoseValues) !!}');
        var glucoseDates = JSON.parse('{!! json_encode($glucosesDates) !!}');;
        var bloodPressureData = JSON.parse('{!! json_encode($bloodPressureValues) !!}');
        var bloodPressureDates = JSON.parse('{!! json_encode($bloodPressuresDates) !!}');
        var temperatureData = JSON.parse('{!! json_encode($temperatureValues) !!}');
        var temperatureDates = JSON.parse('{!! json_encode($temperaturesDates) !!}');
        var heartRateData = JSON.parse('{!! json_encode($heartRatesValues) !!}');
        var heartRateDates = JSON.parse('{!! json_encode($heartRatesDates) !!}');
        var hemoglobinData = JSON.parse('{!! json_encode($hemoglobinsValues) !!}');
        var hemoglobinDates = JSON.parse('{!! json_encode($hemoglobinsDates) !!}');
        var ProfileLevel = JSON.parse('{!! json_encode($profileLevel) !!}');
    </script>

    <!-- Modals (assuming these are modal windows for creating data) -->
    @include('backend.pages.modals.CreateWeight')
    @include('backend.pages.modals.CreateGlucose')
    @include('backend.pages.modals.CreateBloodPressure')
    @include('backend.pages.modals.CreateHeartRate')
    @include('backend.pages.modals.CreateTemperature')
    @include('backend.pages.modals.CreateHemoglobin')

    <!-- Profile Section (assuming this is for displaying profile information) -->
    @include('backend.pages.profile.profile')
<script>
        // Function to set the 'max' attribute of the date inputs to the current date
        function setMaxDate() {
            const measurementDateInputs = document.querySelectorAll('.measurement-date');
            const today = new Date().toISOString().split('T')[0];
            measurementDateInputs.forEach(input => {
                input.setAttribute('max', today);
            });
        }

        // Call the function when the page loads
        setMaxDate();

        // Ad
        </script>
</div>
@endsection
