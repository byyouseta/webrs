@extends('layouts.app-web')

@section('title', 'Direksi | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="direksi-hero">

    <div class="container-custom">

        <span class="direksi-badge">
            PROFIL PIMPINAN
        </span>

        <h1>
            Direksi RSUP Surakarta
        </h1>

        <p>
            Direksi RSUP Surakarta merupakan unsur pimpinan yang
            bertanggung jawab dalam penyelenggaraan pelayanan,
            pendidikan, penelitian, pengembangan, dan tata kelola
            rumah sakit.
        </p>

    </div>

</section>


<!-- DIREKTUR UTAMA -->
<section class="direktur-utama-section">

    <div class="container-custom">

        <div class="direktur-utama-card">

            <div class="direktur-foto">

                <img src="{{ asset('img/dokter/profile.svg') }}">

            </div>

            <div class="direktur-content">

                <span>Plt. DIREKTUR UTAMA</span>

                <h2>
                    dr. Sutanto
                </h2>

                <p>
                    Memimpin penyelenggaraan rumah sakit serta
                    mengkoordinasikan seluruh unit pelayanan,
                    pendidikan, penelitian, dan pengembangan.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- DIREKSI -->
<section class="direksi-list-section">

    <div class="container-custom">

        <div class="section-title-center">

            <span>STRUKTUR DIREKSI</span>

            <h2>
                Jajaran Direksi
            </h2>

        </div>

        <div class="direksi-grid">

            <div class="direksi-card">

                <img src="{{ asset('img/dokter/profile.svg') }}">

                <div class="direksi-body">

                    <h4>
                        Direktur Pelayanan Medik,
                        Keperawatan dan Penunjang
                    </h4>

                    <p>
                         dr. Sutanto
                    </p>

                </div>

            </div>

            <div class="direksi-card">

                <img src="{{ asset('img/dokter/profile.svg') }}">

                <div class="direksi-body">

                    <h4>
                        Direktur SDM,
                        Pendidikan dan Penelitian
                    </h4>

                    <p>
                        Heru Tri Subagyo, S.Sos, MM
                    </p>

                </div>

            </div>

            <div class="direksi-card">

                <img src="{{ asset('img/dokter/profile.svg') }}">

                <div class="direksi-body">

                    <h4>
                        Direktur Perencanaan,
                        Keuangan , Layanan, Dan Operasional
                    </h4>

                    <p>
                        drg. Leslie Jane DT, MPH
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- TUGAS -->
<section class="direksi-duty">

    <div class="container-custom">

        <div class="duty-wrapper">

            <h2>

            </h2>

            <div class="duty-grid">

                <div>
                    <i class="fas fa-check-circle"></i>
                    Menyusun kebijakan rumah sakit.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mengelola pelayanan kesehatan.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mengembangkan SDM dan organisasi.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mengelola keuangan dan aset.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Menjamin mutu dan keselamatan pasien.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mendukung pendidikan dan penelitian.
                </div>

            </div>

        </div>

    </div>

</section>

@endsection
