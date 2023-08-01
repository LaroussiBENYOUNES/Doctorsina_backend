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

        <!-- Team management -->
        <li class="menu-item">
            <a href="/team" class="menu-link">
                <i class="menu-icon tf-icons fa fa-users"></i>
                <div data-i18n="Analytics">Team Management</div>
            </a>
        </li>

        <!-- Partner management -->
        <li class="menu-item">
            <a href="/partner" class="menu-link">
                <i class="menu-icon tf-icons fa fa-handshake"></i>
                <div data-i18n="Analytics">Partner Management</div>
            </a>
        </li>
         <!-- Partner management -->
         <li class="menu-item">
        <a href="/department" class="menu-link">
            <i class="menu-icon tf-icons fa fa-building"></i>
            <div data-i18n="Analytics">Department Management</div>
        </a>
    </li>
      <li class="menu-item">
        <a href="{{route('admin.prices.index')}}" class="menu-link">
            <i class="menu-icon tf-icons fa fa-building"></i>
            <div data-i18n="Analytics">Pricinng Management</div>
        </a>
    </li>
        <!-----------Contact------------>
        <li class="menu-item">
            <a href="{{route('contacts.index')}}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-envelope"></i>
                <div data-i18n="Analytics">Contacts</div>
            </a>
        </li>
           <!-----------Contact------------>
        <li class="menu-item">
            <a href="/doctor" class="menu-link">
                <i class="menu-icon tf-icons fa fa-envelope"></i>
                <div data-i18n="Analytics">Doctor</div>
            </a>
        </li>
        <!-----------Contact------------>
    </ul>
</aside>
