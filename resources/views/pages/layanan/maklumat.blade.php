@extends('layouts.app-web')

@section('title', 'Maklumat Pelayanan | RSUP Surakarta')

@section('content')

<section class="maklumat-hero">

    <div class="container-custom">

        <div class="maklumat-header">

            <span class="maklumat-badge">
                MAKLUMAT PELAYANAN
            </span>

            <h1>
                Maklumat Pelayanan RSUP Surakarta
            </h1>

            <p>
                Sebagai penyelenggara pelayanan publik, RSUP Surakarta
                berkomitmen memberikan pelayanan kesehatan yang
                profesional, transparan, akuntabel, cepat, tepat,
                dan berorientasi pada keselamatan pasien.
            </p>

        </div>

    </div>

</section>


<section class="maklumat-content">

    <div class="container-custom">

        <div class="maklumat-card">

            <div class="maklumat-icon">
                <i class="fas fa-handshake"></i>
            </div>

            <h2>
                Pernyataan Maklumat Pelayanan
            </h2>

            <p class="maklumat-text">

                Dengan ini kami, pegawai di lingkungan rumah sakit umum pusat surakarta berjanji dan sanggup melaksanakan pelayanan
                sesuai dengan standar pelayanan, memberikan pelayanan sesuai kewajiban dan akan melakukan perbaikan secara terus-menerus,
                serta bersedia menerima sanksi dan/atau memberikan kompensasi apabila pelayanan yang diberikan tidak sesuai standar.

            </p>
              <div class="signature-space">
                    <span>Plt. Direktur Utama RSUP Surakarta</span><br>
                <strong>
                    dr. Sutanto
                </strong>

            </div>



        </div>


    </div>

</section>


<section class="komitmen-section">

    <div class="container-custom">

        <div class="section-title-center">

            <span>KOMITMEN KAMI</span>

            <h2>
                Pelayanan Prima untuk Masyarakat
            </h2>

        </div>

        <div class="komitmen-grid">

            <div class="komitmen-card">
                <i class="fas fa-user-md"></i>
                <h4>Profesional</h4>
                <p>
                    Memberikan pelayanan sesuai kompetensi dan standar profesi.
                </p>
            </div>

            <div class="komitmen-card">
                <i class="fas fa-heart"></i>
                <h4>Berorientasi Pasien</h4>
                <p>
                    Mengutamakan keselamatan dan kepuasan pasien.
                </p>
            </div>

            <div class="komitmen-card">
                <i class="fas fa-clock"></i>
                <h4>Tepat Waktu</h4>
                <p>
                    Memberikan pelayanan secara cepat dan responsif.
                </p>
            </div>

            <div class="komitmen-card">
                <i class="fas fa-balance-scale"></i>
                <h4>Akuntabel</h4>
                <p>
                    Menjalankan pelayanan yang transparan dan bertanggung jawab.
                </p>
            </div>

        </div>

    </div>

</section>

<!--
<section class="maklumat-signature">

    <div class="container-custom">

        <div class="signature-card">

            <h3>
                Plt. Direktur Utama RSUP Surakarta
            </h3>

            <p>
                Berkomitmen untuk terus meningkatkan mutu pelayanan
                kesehatan bagi masyarakat.
            </p>



        </div>

    </div>

</section> -->

@endsection
