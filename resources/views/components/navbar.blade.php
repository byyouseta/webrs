<!-- TOP BAR -->
<div class="topbar">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="topbar-left">

            <a href="https://maps.google.com/?q=RSUP+Surakarta"
            target="_blank"
            class="topbar-location"
            style="color:#fff !important; text-decoration:none !important;">

                <small class="d-flex align-items-center gap-2"
                    style="color:#fff !important;">

                    <i class="bi bi-geo-alt-fill"
                    style="color:#fff !important;"></i>

                    Jl. Profesor DR. Soeharso No.28,
                    Jajar, Kec. Laweyan,
                    Kota Surakarta

                </small>

            </a>

        </div>

        <div class="topbar-right d-flex align-items-center gap-3">
            <small>
                <i class="bi bi-telephone-fill"></i>
                Contact Center: 0271-713055
            </small>

            <small>
                <i class="bi bi-headset"></i>
                IGD : 0271-728297
            </small>

                <div class="dropdown language-dropdown">

                    <button class="btn dropdown-toggle language-btn"
                            type="button"
                            data-bs-toggle="dropdown">

                        @if(App::getLocale() == 'id')
                            <img src="{{ asset('img/assets/id.svg') }}"
                                width="18">
                            IND
                        @else
                            <img src="{{ asset('img/assets/en.svg') }}"
                                width="18">
                            EN
                        @endif
                    </button>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                            href="/lang/id">
                                <img src="{{ asset('img/assets/id.svg') }}"
                                    width="18">
                                Indonesia
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="/lang/en">
                                <img src="{{ asset('img/assets/en.svg') }}"
                                    width="18">
                                English

                            </a>
                        </li>

                    </ul>

                </div>

        </div>

    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-white">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
            <img src="{{ asset('img/logo-rs-full.svg') }}?v={{ rand() }}"
                alt="Logo RS"
                class="logo-rs">
        </a>

        <!-- TOGGLE -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dokter_list') }}">
                    {{ __('navbar.doctor') }}
                    </a>
                </li>

                <!-- DROPDOWN -->
                <li class="nav-item dropdown dropdown-custom">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown">
                        {{ __('navbar.services') }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-custom">

                        <!-- MENU BIASA -->
                        <li>
                            <a class="dropdown-item" href="{{ route('layanan_umum') }}">
                                {{ __('navbar.general_service') }}
                            </a>
                        </li>

                        <!-- SUBMENU -->
                        <li class="dropdown-submenu">

                            <a class="dropdown-item dropdown-toggle" href="#">
                                {{ __('navbar.featured_service') }}
                            </a>

                            <ul class="dropdown-menu">

                                <li>
                                    <a class="dropdown-item" href="{{ route('layanan_eksekutif') }}">
                                    {{ __('navbar.executive_service') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('layanan_mcu') }}">
                                    {{ __('navbar.mcu_service') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('layanan_homecare') }}">
                                    {{ __('navbar.home_visit') }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- SUBMENU -->
                        <li class="dropdown-submenu">

                            <a class="dropdown-item dropdown-toggle" href="#">
                                {{ __('navbar.training_service') }}
                            </a>

                            <ul class="dropdown-menu">

                                <li>
                                    <a class="dropdown-item" href="{{ route('layanan_diklat') }}">
                                        {{ __('navbar.diklat') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('layanan_diklit') }}">
                                        {{ __('navbar.diklit') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('layanan_tarif_diklat') }}">
                                    {{ __('navbar.training_rates') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="https://disidak.rsupsurakarta.id/" target="_blank">
                                        {{ __('navbar.registration') }}
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('layanan_standart') }}">
                            {{ __('navbar.service_standards') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('layanan_maklumat') }}">
                            {{ __('navbar.information_services') }}
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('layanan_fasilitas') }}">
                            {{ __('navbar.facilities') }}
                            </a>
                        </li>


                    </ul>
                </li>


                 <!-- Navbar-->
                        <li class="nav-item dropdown dropdown-custom">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                {{ __('navbar.about') }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-custom">

                                <li>
                                    <a class="dropdown-item" href="{{ route('sejarah') }}">
                                        {{ __('navbar.history') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('visimisi') }}">
                                        {{ __('navbar.vision_mission') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('struktur_organisasi') }}">
                                    {{ __('navbar.organizational_structure') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('dewan_pengawas') }}">
                                    {{ __('navbar.supervisory_board') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('direksi') }}">
                                    {{ __('navbar.directors') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('penghargaan') }}">
                                    {{ __('navbar.award') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('lokasi_kontak') }}">
                                    {{ __('navbar.location_contact') }}
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <!--INFORMASI-->
                        <li class="nav-item dropdown dropdown-custom">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    {{ __('navbar.information') }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-custom">

                                <li>
                                    <a class="dropdown-item" href="{{ route('info_bed') }}">
                                        {{ __('navbar.availbility_tt') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('info_registrasi') }}">
                                        {{ __('navbar.patient_registration') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('info_tarif') }}">
                                    {{ __('navbar.services_rate') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('info_skm') }}">
                                    {{ __('navbar.satisfaction_survey') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('info_hkp') }}">
                                    {{ __('navbar.patient_rights') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('info_privacy') }}">
                                    {{ __('navbar.privacy_policy') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('info_faq') }}">
                                    {{ __('navbar.faq') }}
                                    </a>
                                </li>

                            </ul>
                        </li>



                <!-- DROPDOWN -->
                <li class="nav-item dropdown dropdown-custom">

                    <a class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown">
                        {{ __('navbar.update') }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-custom">

                        <!-- MENU BIASA -->
                        <li>
                            <a class="dropdown-item" href="{{ route('ppid') }}">
                                {{ __('navbar.ppid') }}
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('promo') }}">
                        {{ __('navbar.promotion') }}
                    </a>
                </li>
            </ul>
            <!-- RIGHT -->
            <div class="d-flex align-items-center gap-3">
                <!-- SEARCH ICON -->
              <a href="#"
                class="search-link"
                data-bs-toggle="modal"
                data-bs-target="#searchModal">

                    <i class="bi bi-search search-icon"></i>

                </a>
                <!-- BUTTON -->
                <a href="https://epasien.rsupsurakarta.id/" class="btn btn-primary-custom" target="_blank">
                    Daftar Online
                </a>

            </div>

        </div>
    </div>
</nav>
