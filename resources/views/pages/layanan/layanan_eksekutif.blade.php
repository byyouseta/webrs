@extends('layouts.app-web')
@section('title', 'Layanan Eksekutif | RSUP Surakarta')
@section('content')

<!-- HERO -->
<section class="executive-hero"
         style="background-image:url('{{ asset('img/assets/general-service/ruang_tunggu.svg') }}?v={{ rand() }}');">

    <div class="container-custom">

        <div class="executive-content">

            <span class="executive-label">
                LAYANAN EKSEKUTIF
            </span>

            <h1>
                Pengalaman Pelayanan Kesehatan yang Lebih Eksklusif
            </h1>

            <p>
                Nikmati pelayanan kesehatan dengan kenyamanan, privasi,
                dan kemudahan yang dirancang khusus untuk memenuhi kebutuhan
                pasien secara personal dan profesional.
            </p>

            <a href="https://dashboard.rsupsurakarta.id/pendaftaran/eksekutif" class="executive-btn" target="_blank">
                Buat Janji Sekarang
            </a>

        </div>

    </div>

</section>


<!-- ABOUT -->
<section class="executive-about">

    <div class="container-custom">

        <div class="executive-about-grid">

            <div class="executive-about-image">
                <img src="{{ asset('img/assets/general-service/hero_eksekutif.svg') }}?v={{ rand() }}">
            </div>

            <div class="executive-about-content">

                <span class="section-subtitle">
                    TENTANG LAYANAN
                </span>

                <h2>
                    Kenyamanan dan Privasi dalam Setiap Kunjungan
                </h2>

                <p>
                    Layanan Eksekutif RSUP Surakarta hadir untuk memberikan
                    pengalaman pelayanan kesehatan yang lebih nyaman,
                    cepat, dan eksklusif dengan fasilitas premium serta
                    pendampingan yang lebih personal.
                </p>

                <p>
                    Mulai dari ruang tunggu eksklusif, pelayanan prioritas,
                    hingga fasilitas penunjang modern yang dirancang untuk
                    meningkatkan kenyamanan pasien dan keluarga.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- KEUNGGULAN -->
<section class="executive-benefit-section">

    <div class="container-custom">

        <div class="section-title-center">

            <span>KEUNGGULAN</span>

            <h2>
                Mengapa Memilih Layanan Eksekutif?
            </h2>

        </div>

        <div class="executive-benefits">

            <div class="benefit-card">
                <i class="bi bi-stars"></i>
                <h5>Pelayanan Prioritas</h5>
                <p>
                    Proses pelayanan yang lebih cepat dan nyaman.
                </p>
            </div>

            <div class="benefit-card">
                <i class="bi bi-shield-check"></i>
                <h5>Privasi Terjaga</h5>
                <p>
                    Area pelayanan yang lebih eksklusif dan privat.
                </p>
            </div>

            <div class="benefit-card">
                <i class="bi bi-cup-hot"></i>
                <h5>Ruang Tunggu Premium</h5>
                <p>
                    Area lounge yang nyaman dan representatif.
                </p>
            </div>

            <div class="benefit-card">
                <i class="bi bi-person-check"></i>
                <h5>Pendampingan Personal</h5>
                <p>
                    Pelayanan yang lebih personal dan informatif.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- GALLERY -->
<section class="executive-gallery-section">

    <div class="container-custom">

        <div class="section-title-center">

            <span>GALERI</span>

            <h2>
                Preview Ruangan Eksekutif
            </h2>

        </div>

        <div class="executive-gallery">

            <img src="{{ asset('img/assets/general-service/poli_eksekutif.svg') }}?v={{ rand() }}">
            <img src="{{ asset('img/assets/general-service/ruang_lorong.svg') }}?v={{ rand() }}">


        </div>

    </div>

</section>


<!-- FASILITAS -->
<section class="executive-facility">

    <div class="container-custom">

        <div class="section-title-center">

            <span>FASILITAS</span>

            <h2>
                Fasilitas yang Tersedia
            </h2>

        </div>

        <div class="facility-grid">

            <div>
                <i class="fas fa-wifi"></i>
                WiFi Premium
            </div>

            <div>
                <i class="fas fa-chair"></i>
                Ruang Tunggu Nyaman
            </div>

            <div>
                <i class="fas fa-concierge-bell"></i>
                Pendampingan Petugas
            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="executive-cta">

    <div class="container-custom">

        <h2>
            Rasakan Pengalaman Pelayanan yang Lebih Nyaman
        </h2>

        <p>
            Jadwalkan kunjungan Anda dan nikmati pelayanan kesehatan
            dengan fasilitas premium dan kenyamanan maksimal.
        </p>

        <a href="https://dashboard.rsupsurakarta.id/pendaftaran/eksekutif" class="executive-btn-light" target="_blank">
            Daftar Sekarang
        </a>

    </div>

</section>

@endsection

