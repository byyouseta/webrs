@extends('layouts.app-web')
@section('title', 'Layanan Homecare | RSUP Surakarta')
@section('content')

<!-- HERO -->
<section class="homecare-hero">

    <div class="container-custom">

        <div class="homecare-grid">

            <div class="homecare-content">

                <span class="homecare-label">
                    HOME CARE RSUP SURAKARTA
                </span>

                <h1>
                    Pelayanan Kesehatan Nyaman di Rumah Anda
                </h1>

                <p>
                    Home Care RSUP Surakarta menghadirkan layanan kesehatan
                    langsung ke rumah pasien dengan dukungan dokter,
                    perawat, dan tenaga kesehatan profesional.
                </p>

                <a href="#" class="homecare-btn">
                    Konsultasi Sekarang
                </a>

            </div>

            <div class="homecare-image">

                <img src="{{ asset('img/assets/general-service/homecare_1.svg') }}?v={{ rand() }}"
                     alt="Home Care">

            </div>

        </div>

    </div>

</section>


<!-- DESKRIPSI -->
<section class="homecare-about">

    <div class="container-custom">

        <div class="section-title-center">

            <span>LAYANAN HOME CARE</span>

            <h2>
                Perawatan Profesional Tanpa Harus ke Rumah Sakit
            </h2>

        </div>

        <div class="homecare-features">

            <div class="homecare-card">
                <i class="fas fa-user-md"></i>

                <h4>Kunjungan Dokter</h4>

                <p>
                    Pemeriksaan dan konsultasi langsung di rumah pasien.
                </p>
            </div>

            <div class="homecare-card">
                <i class="fas fa-user-nurse"></i>

                <h4>Kunjungan Perawat</h4>

                <p>
                    Perawatan dan pemantauan kondisi pasien secara berkala.
                </p>
            </div>

            <div class="homecare-card">
                <i class="fas fa-heartbeat"></i>

                <h4>Monitoring Kesehatan</h4>

                <p>
                    Evaluasi kondisi kesehatan secara berkelanjutan.
                </p>
            </div>

            <div class="homecare-card">
                <i class="fas fa-home"></i>

                <h4>Nyaman di Rumah</h4>

                <p>
                    Mendapatkan pelayanan kesehatan tanpa meninggalkan keluarga.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- ALUR -->
<section class="homecare-flow">

    <div class="container-custom">

        <div class="section-title-center">

            <span>ALUR PELAYANAN</span>

            <h2>
                Cara Mendapatkan Layanan Home Care
            </h2>

        </div>

        <div class="flow-grid">

            <div class="flow-item">
                <div class="flow-number">1</div>
                <h5>Hubungi RSUP</h5>
            </div>

            <div class="flow-item">
                <div class="flow-number">2</div>
                <h5>Penjadwalan Kunjungan</h5>
            </div>

            <div class="flow-item">
                <div class="flow-number">3</div>
                <h5>Kunjungan Dokter / Perawat</h5>
            </div>

            <div class="flow-item">
                <div class="flow-number">4</div>
                <h5>Monitoring dan Evaluasi</h5>
            </div>

        </div>

    </div>

</section>

@endsection
