@extends('layouts.app-web')
@section('title', 'Diklat | RSUP Surakarta')
@section('content')

<!-- HERO -->
<section class="diklat-hero">

    <div class="container-custom">

        <div class="diklat-grid">

            <div class="diklat-content">

                <span class="diklat-label">
                    PENDIDIKAN & PELATIHAN
                </span>

                <h1>
                    Membangun Kompetensi Tenaga Kesehatan Masa Depan
                </h1>

                <p>
                    RSUP Surakarta menyediakan fasilitas pendidikan dan pelatihan
                    bagi mahasiswa, peserta praktik, serta tenaga kesehatan
                    untuk meningkatkan kompetensi melalui pembelajaran langsung
                    di lingkungan rumah sakit.
                </p>

            </div>

            <div class="diklat-image">

                <img src="{{ asset('img/assets/general-service/diklat.svg') }}?v={{ rand() }}"
                     alt="Diklat RSUP">

            </div>

        </div>

    </div>

</section>


<!-- TENTANG -->
<section class="diklat-about">

    <div class="container-custom">

        <div class="section-title-center">

            <span>TENTANG DIKLAT</span>

            <h2>
                Pendidikan dan Pelatihan Rumah Sakit
            </h2>

        </div>

        <p class="diklat-desc">
            Unit Pendidikan dan Pelatihan RSUP Surakarta berperan dalam
            penyelenggaraan kegiatan pembelajaran, praktik lapangan,
            penelitian, dan pengembangan kompetensi tenaga kesehatan
            secara berkelanjutan.
        </p>

    </div>

</section>


<!-- PROGRAM -->
<section class="diklat-program">

    <div class="container-custom">

        <div class="program-grid">

            <div class="program-card">
                <i class="fas fa-user-graduate"></i>

                <h4>Praktik Kerja Lapangan</h4>

                <p>
                    Program PKL bagi mahasiswa kesehatan dan umum.
                </p>
            </div>

            <div class="program-card">
                <i class="fas fa-stethoscope"></i>

                <h4>Profesi & Koas</h4>

                <p>
                    Pembelajaran klinik bersama dokter pembimbing.
                </p>
            </div>

            <div class="program-card">
                <i class="fas fa-chalkboard-teacher"></i>

                <h4>Pelatihan SDM</h4>

                <p>
                    Pelatihan peningkatan kompetensi tenaga kesehatan.
                </p>
            </div>

            <div class="program-card">
                <i class="fas fa-users"></i>

                <h4>Workshop & Seminar</h4>

                <p>
                    Kegiatan ilmiah dan pengembangan profesi.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- ALUR -->
<section class="diklat-flow">

    <div class="container-custom">

        <div class="section-title-center">

            <span>ALUR PENGAJUAN</span>

            <h2>
                Proses Mengikuti Program DIKLAT
            </h2>

        </div>

        <div class="flow-grid">

            <div class="flow-item">
                <div class="flow-number">1</div>
                <h5>Pengajuan Permohonan</h5>
            </div>

            <div class="flow-item">
                <div class="flow-number">2</div>
                <h5>Verifikasi Dokumen</h5>
            </div>

            <div class="flow-item">
                <div class="flow-number">3</div>
                <h5>Pelaksanaan Praktik</h5>
            </div>

            <div class="flow-item">
                <div class="flow-number">4</div>
                <h5>Evaluasi dan Sertifikat</h5>
            </div>

        </div>

    </div>

</section>
<!-- CONTACT -->
<section class="diklat-contact">

    <div class="container-custom">

        <div class="diklat-contact-card">

            <div class="contact-left">

                <span>INFORMASI DIKLAT</span>

                <h2>
                    Hubungi Kami
                </h2>

                <p>
                    Untuk informasi mengenai Praktik Kerja Lapangan (PKL),
                    penelitian, observasi, pelatihan maupun kegiatan pendidikan
                    lainnya, silakan menghubungi petugas DIKLAT RSUP Surakarta.
                </p>

            </div>

            <div class="contact-right">

                <div class="contact-item">
                    <i class="fas fa-user-tie"></i>

                    <div>
                        <h5>Contact Person</h5>
                        <p>Misbah | 0896-4946-7197</p>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>

                    <div>
                        <h5>Telepon</h5>
                        <p>(0271) 713055</p>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="fab fa-whatsapp"></i>

                    <div>
                        <h5>WhatsApp</h5>

                        <a href="https://wa.me/6289649467197"
                           target="_blank">

                            0896-4946-7197

                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="fas fa-envelope"></i>

                    <div>
                        <h5>Email</h5>
                        <p>diklat@rsupsurakarta.id</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-globe"></i>

                    <div>
                        <h5>Website Pendaftaran</h5>

                        <a href="https://disidak.rsupsurakarta.id"
                        target="_blank">

                            www.disidak.rsupsurakarta.id

                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
@endsection
