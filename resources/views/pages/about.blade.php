@extends('layouts.app-web')
@section('title', 'Tentang Kami | RSUP Surakarta')
@section('content')

<section class="section tentangkami-page">
    <div class="container-custom">

        <!-- HERO -->
        <div class="tentang-hero">

            <div class="tentang-text">
                <span class="badge-rsup">Tentang Kami</span>

                <h1>RSUP Surakarta</h1>

                <p>
                    Rumah Sakit Umum Pusat (RSUP) Surakarta merupakan rumah sakit
                    pemerintah yang berkomitmen memberikan pelayanan kesehatan
                    terbaik, profesional, modern, dan berorientasi pada keselamatan pasien.
                </p>

                <p>
                    Dengan dukungan tenaga medis berpengalaman, fasilitas modern,
                    serta pelayanan terpadu, RSUP Surakarta hadir untuk memberikan
                    pelayanan kesehatan yang humanis bagi masyarakat.
                </p>
            </div>

            <div class="tentang-image">
                <img src="{{ asset('img/logo-share-2.png') }}" alt="RSUP Surakarta">
            </div>

        </div>

        <!-- VISI MISI -->
        <div class="visi-misi-wrapper">

            <div class="visi-box">
                <h3>Visi</h3>

                <p>
                   “Rumah sakit dengan pelayanan unggulan Kanker dan Respirasi di level Asia dengan pertumbuhan
yang bekelanjutan”.
                </p>
            </div>

            <div class="misi-box">
                <h3>Misi</h3>

                <ul>
                    <li>1. Memperbaiki pengalaman pasien melalui perbaikan kualitas pelayanan dan fasilitas pendukung</li>
                    <li>2. Meningkatkan kualitas pemberi layanan melalui peningkatan produktivitas kerja</li>
                    <li>3. Meningkatkan mutu layanan klinis melalui standarisasi pelayanan</li>
                    <li>4. Meningkatkan tata kelola rumah sakit melalui digitalisasi layanan</li>
                    <li>5. Menyelenggarakan pendidikan, pelatihan, dan penelitian yang berkualitas dan inovatif</li>

                </ul>
            </div>

        </div>

        <!-- LAYANAN -->
        <div class="tentang-layanan">

            <div class="section-title">
                <h2>Layanan Unggulan</h2>
                <p>Berbagai layanan kesehatan terbaik untuk masyarakat</p>
            </div>

            <div class="layanan-grid">


                <div class="layanan-card">
                    <i class="bi bi-hospital"></i>
                    <h5>Rawat Inap</h5>
                    <p>Fasilitas rawat inap nyaman dengan pelayanan terbaik untuk pasien.</p>
                </div>

                <div class="layanan-card">
                    <i class="bi bi-clipboard2-pulse"></i>
                    <h5>Medical Check Up</h5>
                    <p>Paket pemeriksaan kesehatan lengkap untuk kebutuhan personal maupun perusahaan.</p>
                </div>
                <div class="layanan-card">
                    <i class="bi bi-flask"></i>
                    <h5>Pemeriksaan Penjunjang</h5>
                    <p>Pelayanan Radiologi & Laboratorium yang cepat, aman, dan terintegrasi dengan sistem rumah sakit.</p>
                </div>

                <div class="layanan-card">
                    <i class="bi bi-capsule-pill"></i>
                    <h5>Farmasi Modern</h5>
                    <p>Pelayanan farmasi cepat, aman, dan terintegrasi dengan sistem rumah sakit.</p>
                </div>


            </div>

        </div>

    </div>
</section>

@endsection
