<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('frontend_assets/img/logo@2x.png') }}" alt="Ds" width="30%">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">DoctorSina</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons fa fa-home"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
          <!-- Secretary management -->
          <li class="menu-item">
            <a href="{{route('secreatries.index')}}" class="menu-link">
            <i class="menu-icon tf-icons fa fa-user-md"></i>
                <div data-i18n="Analytics">Secretary</div>
            </a>
        </li>

        <!-- Patients management -->
        <li class="menu-item">
            <a href="/patient" class="menu-link">
                <i class="menu-icon tf-icons fa fa-users"></i>
                <div data-i18n="Analytics">Patients</div>
            </a>
        </li>

      
    </ul>
</aside>
