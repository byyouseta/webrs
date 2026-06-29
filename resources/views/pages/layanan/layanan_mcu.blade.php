@extends('layouts.app-web')
@section('title', 'Layanan MCU | RSUP Surakarta')
@section('content')

<!-- HERO -->
<section class="mcu-hero">

    <div class="container-custom">

        <span class="mcu-label">
            MEDICAL CHECK UP
        </span>

        <h1>
            Pemeriksaan Kesehatan Menyeluruh
        </h1>

        <p>
            Deteksi dini kondisi kesehatan melalui pemeriksaan yang
            komprehensif dan didukung fasilitas modern.
        </p>

    </div>

</section>


<!-- INTRO -->
<section class="mcu-intro">

    <div class="container-custom">

        <h2>
            Alur Medical Check Up
        </h2>

        <p>
            Setiap peserta akan melalui tahapan pemeriksaan secara
            sistematis hingga memperoleh hasil evaluasi kesehatan.
        </p>

    </div>

</section>


<!-- ROADMAP -->
<section class="mcu-roadmap">

    <div class="container-custom">

        <!-- STEP 1 -->
        <div class="mcu-step">

            <div class="step-image">
                <img src="{{ asset('img/assets/general-service/registrasi.svg') }}?v={{ rand() }}">
            </div>

            <div class="step-content">
                <span>01</span>
                <h3>Registrasi</h3>

                <p>
                    Verifikasi data peserta dan proses administrasi MCU.
                </p>
            </div>

        </div>


        <!-- STEP 2 -->
        <div class="mcu-step reverse">

            <div class="step-image">
                <img src="{{ asset('img/assets/general-service/ttv.svg') }}?v={{ rand() }}">
            </div>

            <div class="step-content">
                <span>02</span>
                <h3>Pemeriksaan Tanda Vital</h3>

                <p>
                    Pemeriksaan tekanan darah, tinggi badan,
                    berat badan dan indikator kesehatan dasar.
                </p>
            </div>

        </div>


        <!-- STEP 3 -->
        <div class="mcu-step">

            <div class="step-image">
                <img src="{{ asset('img/assets/general-service/lab_darah.svg') }}?v={{ rand() }}">
            </div>

            <div class="step-content">
                <span>03</span>
                <h3>Pemeriksaan Laboratorium</h3>

                <p>
                    Pemeriksaan darah dan parameter kesehatan lainnya.
                </p>
            </div>

        </div>


        <!-- STEP 4 -->
        <div class="mcu-step reverse">

            <div class="step-image">
                <img src="{{ asset('img/assets/general-service/mata.svg') }}?v={{ rand() }}">
            </div>

            <div class="step-content">
                <span>04</span>
                <h3>Pemeriksaan Mata</h3>

                <p>
                    Evaluasi ketajaman penglihatan dan kondisi mata.
                </p>
            </div>

        </div>


        <!-- STEP 5 -->
        <div class="mcu-step">

            <div class="step-image">
                <img src="{{ asset('img/assets/general-service/treadmill.svg') }}?v={{ rand() }}">
            </div>

            <div class="step-content">
                <span>05</span>
                <h3>Treadmill Test</h3>

                <p>
                    Pemeriksaan fungsi jantung saat aktivitas fisik.
                </p>
            </div>

        </div>


        <!-- STEP 6 -->
        <div class="mcu-step reverse">

            <div class="step-image">
                <img src="{{ asset('img/assets/general-service/usg.svg') }}?v={{ rand() }}">
            </div>

            <div class="step-content">
                <span>06</span>
                <h3>Pemeriksaan USG</h3>

                <p>
                    Evaluasi organ tubuh menggunakan teknologi ultrasonografi.
                </p>
            </div>

        </div>


        <!-- STEP 7 -->
        <div class="mcu-step">

            <div class="step-image">
                <img src="{{ asset('img/assets/general-service/konsultasi.svg') }}?v={{ rand() }}">
            </div>

            <div class="step-content">
                <span>07</span>
                <h3>Konsultasi Dokter</h3>

                <p>
                    Pembahasan hasil pemeriksaan bersama dokter.
                </p>
            </div>

        </div>


        <!-- STEP 8 -->
        <div class="mcu-step reverse">

            <div class="step-image">
                <img src="{{ asset('img/assets/general-service/hasil_mcu.svg') }}?v={{ rand() }}">
            </div>

            <div class="step-content">
                <span>08</span>
                <h3>Hasil Medical Check Up</h3>

                <p>
                    Peserta menerima laporan lengkap hasil pemeriksaan.
                </p>
            </div>

        </div>

    </div>

</section>

@endsection
