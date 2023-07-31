<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> {{__('header.days')}}
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> {{__('header.Call us now')}} +1 (597) 373-2177
      </div>
    </div>

  </div>

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Logo -->
        <a href="/" class="logo me-auto"><img src="{{ asset('frontend_assets/img/logo@2x.png') }}" alt=""></a>

        <!-- Main Menu -->
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">{{__('header.Home')}}</a></li>
                <li><a class="nav-link scrollto" href="/about">{{__('header.About')}}</a></li>
                <li><a class="nav-link scrollto" href="/services">{{__('header.Services')}}</a></li>
                <li><a class="nav-link scrollto" href="/solutions">{{__('header.Solutions')}}</a></li>
                <li><a class="nav-link scrollto" href="/ourteam">{{__('header.Our team')}}</a></li>
                <li><a class="nav-link scrollto" href="/ourpartners">{{__('header.Our partners')}}</a></li>
                <li><a class="nav-link scrollto" href="/#contact">{{__('header.Contact')}}</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <!-- Language Dropdown -->


        <!-- Appointment Button -->
        <a href="/login" class="appointment-btn scrollto"><span class="d-none d-md-inline">{{__('header.Try for free')}}</span> </a>
        <div class="dropdown ">
            @if(app()->getLocale() === 'en')
            <a class="btn dropdown-toggle" href="#" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="flag-icon flag-icon-us me-2"></i> English
            </a>
            @elseif(app()->getLocale() === 'fr')
            <a class="btn dropdown-toggle" href="#" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="flag-icon flag-icon-fr me-2"></i> Français
            </a>
            @elseif(app()->getLocale() === 'ar')
            <a class="btn dropdown-toggle" href="#" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="flag-icon flag-icon-sa me-2"></i> عربى
            </a>
            @endif
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                <li><a class="dropdown-item" href="locale/en"><i class="flag-icon flag-icon-us me-2"></i> English</a></li>
                <li><a class="dropdown-item" href="locale/fr"><i class="flag-icon flag-icon-fr me-2"></i> Français</a></li>
                <li><a class="dropdown-item" href="locale/ar"><i class="flag-icon flag-icon-sa me-2"></i> عربى</a></li>
            </ul>
        </div>
    </div>
</header>
