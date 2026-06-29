@extends('layouts.app-web')

@section('title', 'Struktur Organisasi | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="org-hero">

    <div class="container-custom">

        <span class="org-badge">
            PROFIL RSUP SURAKARTA
        </span>

        <h1>
            Struktur Organisasi
        </h1>

        <p>
            Struktur organisasi RSUP Surakarta sebagai pedoman
            pelaksanaan tugas, fungsi, dan tata kelola rumah sakit
            dalam memberikan pelayanan kesehatan yang profesional.
        </p>

    </div>

</section>


<!-- PIMPINAN -->
<section class="org-section">

    <div class="container-custom">

        <div class="org-chief">

            <div class="org-chief-photo">

                <i class="fas fa-user-md"></i>

            </div>

            <h3>
                Plt. Direktur Utama
            </h3>

            <span>
                dr. Sutanto
            </span>

        </div>

    </div>

</section>


<!-- STRUKTUR -->
<!-- STRUKTUR ORGANISASI -->
<section class="org-structure">

    <div class="container-custom">

        <div class="section-title-center">

            <span>STRUKTUR ORGANISASI</span>

            <h2>
                Struktur Organisasi RSUP Surakarta
            </h2>

            <p>
                Struktur organisasi RSUP Surakarta berdasarkan
                Peraturan Menteri Kesehatan Republik Indonesia
                yang berlaku.
            </p>

        </div>

        <div class="pdf-preview">

            <iframe
                src="{{ asset('storage/ppid/struktur_organisasi.pdf') }}#zoom=60"
                width="100%"
                height="600"
                frameborder="0">
            </iframe>

        </div>

    </div>

</section>


<!-- DOWNLOAD -->
<!-- DOWNLOAD -->
<section class="org-download">

    <div class="container-custom">

        <div class="download-box">

            <i class="fas fa-file-pdf"></i>

            <h3>
                Dokumen Struktur Organisasi
            </h3>

            <p>
                Unduh dokumen struktur organisasi resmi RSUP Surakarta.
            </p>

            <div class="download-action">

                <a href="{{ asset('storage/ppid/struktur_organisasi.pdf') }}"
                   target="_blank"
                   class="btn-download-org">

                    <i class="fas fa-download"></i>
                    Download PDF

                </a>

            </div>

        </div>

    </div>

</section>

@endsection
