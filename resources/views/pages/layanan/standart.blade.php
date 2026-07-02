@extends('layouts.app-web')

@section('title', 'Standar Pelayanan | RSUP Surakarta')

@section('content')

<section class="sp-hero">

    <div class="container-custom">

        <span class="sp-badge">
            STANDAR PELAYANAN
        </span>

        <h1>
            Standar Pelayanan RSUP Surakarta
        </h1>

        <p>
            Standar pelayanan merupakan pedoman penyelenggaraan
            pelayanan publik yang wajib dipenuhi oleh penyelenggara
            dan menjadi acuan bagi masyarakat dalam memperoleh pelayanan.
        </p>

    </div>

</section>


<section class="sp-intro">

    <div class="container-custom">

        <div class="sp-intro-card">

            <div class="sp-icon">
                <i class="fas fa-clipboard-check"></i>
            </div>

            <h2>
                Pelayanan yang Terukur dan Transparan
            </h2>

            <p>
                RSUP Surakarta berkomitmen memberikan pelayanan
                kesehatan yang berkualitas, terukur, transparan,
                akuntabel, serta sesuai dengan ketentuan
                peraturan perundang-undangan yang berlaku.
            </p>

        </div>

    </div>

</section>


<section class="sp-section">

    <div class="container-custom">

        <div class="section-title-center">

            <span>UNSUR STANDAR PELAYANAN</span>

            <h2>
                Komponen Standar Pelayanan
            </h2>

        </div>

        <div class="sp-grid">

            <div class="sp-card">
                <i class="fas fa-file-alt"></i>
                <h4>Persyaratan</h4>
                <p>
                    Dokumen dan ketentuan yang harus dipenuhi pengguna layanan.
                </p>
            </div>

            <div class="sp-card">
                <i class="fas fa-project-diagram"></i>
                <h4>Prosedur</h4>
                <p>
                    Tahapan pelayanan yang jelas dan mudah dipahami.
                </p>
            </div>

            <div class="sp-card">
                <i class="fas fa-clock"></i>
                <h4>Jangka Waktu</h4>
                <p>
                    Kepastian waktu penyelesaian setiap jenis pelayanan.
                </p>
            </div>

            <div class="sp-card">
                <i class="fas fa-money-bill-wave"></i>
                <h4>Biaya / Tarif</h4>
                <p>
                    Informasi biaya pelayanan yang transparan.
                </p>
            </div>

            <div class="sp-card">
                <i class="fas fa-notes-medical"></i>
                <h4>Produk Layanan</h4>
                <p>
                    Hasil pelayanan yang diterima masyarakat.
                </p>
            </div>

            <div class="sp-card">
                <i class="fas fa-comments"></i>
                <h4>Pengaduan</h4>
                <p>
                    Sarana penyampaian kritik, saran dan pengaduan.
                </p>
            </div>

        </div>

    </div>

</section>


<section class="sp-commitment">

    <div class="container-custom">

        <div class="commitment-box">

            <h2>
                Komitmen Pelayanan
            </h2>

            <p>
                RSUP Surakarta senantiasa meningkatkan kualitas
                pelayanan kesehatan dengan mengutamakan profesionalisme,
                keselamatan pasien, transparansi, dan kepuasan masyarakat.
            </p>

        </div>

    </div>

</section>

<section class="sp-preview">

    <div class="container-custom">

        <div class="section-title-center">

            <span>DOKUMEN</span>

            <h2>
                Preview Standar Pelayanan
            </h2>

        </div>

        <div class="pdf-preview-card">

            <iframe
                src="{{ asset('storage/ppid/20260626091248SK_STANDAR_PELAYANAN.pdf') }}"
                width="100%"
                height="900"
                frameborder="0">
            </iframe>

        </div>

    </div>

</section>

<section class="sp-download">

    <div class="container-custom">

        <div class="download-card">

            <i class="fas fa-file-pdf"></i>

            <h3>
                Dokumen Standar Pelayanan
            </h3>

            <p>
                Unduh dokumen Standar Pelayanan RSUP Surakarta.
            </p>

            <a href="{{ asset('storage/ppid/20260626091248SK_STANDAR_PELAYANAN.pdf') }}"
               target="_blank"
               class="btn-download">

                Download Dokumen

            </a>

        </div>

    </div>

</section>

@endsection
