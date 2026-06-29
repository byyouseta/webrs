@extends('layouts.app-web')
@section('title', 'Layanan Umum | RSUP Surakarta')
@section('content')

<section class="service-hero">

    <div class="container-custom">

        <span class="service-label">
            LAYANAN RSUP SURAKARTA
        </span>

        <h1>
            Layanan Umum
        </h1>

        <p>
            RSUP Surakarta menyediakan berbagai layanan kesehatan yang didukung
            tenaga medis profesional, fasilitas modern, dan pelayanan yang
            berorientasi pada keselamatan serta kenyamanan pasien.
        </p>

    </div>

</section>


<section class="service-page">

    <div class="container-custom">

        <!-- RAWAT JALAN -->
        <div class="service-row">

            <div class="service-image">
                <img src="{{ asset('img/assets/general-service/rawat_jalan.svg') }}?v={{ rand() }}" alt="">
            </div>

            <div class="service-content">
                <span>LAYANAN UMUM</span>

                <h2>Pelayanan Rawat Jalan</h2>

                <p>
                    Pelayanan konsultasi dokter spesialis dan subspesialis dengan
                    sistem pendaftaran yang mudah serta didukung fasilitas medis
                    yang lengkap dan modern.
                </p>

                <ul>
                    <li>Poli Penyakit Dalam</li>
                    <li>Poli Anak</li>
                    <li>Poli Bedah</li>
                    <li>Poli Jantung</li>
                </ul>

            </div>

        </div>


        <!-- RAWAT INAP -->
        <div class="service-row reverse">

            <div class="service-image">
                <img src="{{ asset('img/assets/general-service/rawat_inap.svg') }}?v={{ rand() }}" alt="">
            </div>

            <div class="service-content">
                <span>LAYANAN UMUM</span>

                <h2>Pelayanan Rawat Inap</h2>

                <p>
                    Menyediakan fasilitas perawatan pasien dengan berbagai kelas
                    kamar yang nyaman serta didukung tenaga kesehatan yang siap
                    memberikan pelayanan selama 24 jam.
                </p>

                <ul>
                    <li>Kelas VVIP</li>
                    <li>Kelas VIP</li>
                    <li>Kelas I, II dan III</li>
                    <li>Ruang Isolasi</li>
                </ul>

            </div>

        </div>


        <!-- IGD -->
        <div class="service-row">

            <div class="service-image">
                <img src="{{ asset('img/assets/general-service/ugd.svg') }}?v={{ rand() }}" alt="">
            </div>

            <div class="service-content">
                <span>24 JAM</span>

                <h2>Instalasi Gawat Darurat</h2>

                <p>
                    Pelayanan kegawatdaruratan selama 24 jam dengan tenaga medis
                    profesional yang siap memberikan penanganan cepat, tepat dan
                    terintegrasi.
                </p>

            </div>

        </div>


        <!-- LAB -->
        <div class="service-row reverse">

            <div class="service-image">
                <img src="{{ asset('img/assets/general-service/laboratorium.svg') }}?v={{ rand() }}" alt="">
            </div>

            <div class="service-content">
                <span>PENUNJANG MEDIS</span>

                <h2>Laboratorium</h2>

                <p>
                    Pemeriksaan laboratorium klinik yang akurat dan terpercaya
                    untuk mendukung proses diagnosis serta evaluasi kondisi
                    kesehatan pasien.
                </p>

            </div>

        </div>


        <!-- RADIOLOGI -->
        <div class="service-row">

            <div class="service-image">
                <img src="{{ asset('img/assets/general-service/ct_scan.svg') }}?v={{ rand() }}" alt="">
            </div>

            <div class="service-content">
                <span>PENUNJANG MEDIS</span>

                <h2>Radiologi</h2>

                <p>
                    Pemeriksaan radiologi menggunakan teknologi modern seperti
                    X-Ray, CT Scan, MRI dan USG guna mendukung diagnosis medis
                    yang akurat.
                </p>

            </div>

        </div>


        <!-- FARMASI -->
        <div class="service-row reverse">

            <div class="service-image">
                <img src="{{ asset('img/assets/general-service/farmasi.svg') }}?v={{ rand() }}" alt="">
            </div>

            <div class="service-content">
                <span>PELAYANAN FARMASI</span>

                <h2>Farmasi</h2>

                <p>
                    Pelayanan obat yang lengkap serta konsultasi penggunaan obat
                    yang aman dan sesuai dengan kebutuhan pasien.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection
