@extends('layouts.app-web')

@section('title', 'Hak dan Kewajiban Pasien | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="patient-hero">

    <div class="container-custom">

        <span class="patient-badge">
            INFORMASI PASIEN
        </span>

        <h1>
            Hak dan Kewajiban Pasien
        </h1>

        <p>
            RSUP Surakarta berkomitmen memberikan pelayanan kesehatan
            yang bermutu dengan tetap memperhatikan hak dan kewajiban
            setiap pasien selama menerima pelayanan.
        </p>

    </div>

</section>


<!-- INTRO -->
<section class="patient-intro">

    <div class="container-custom">

        <div class="intro-card">

            <i class="fas fa-handshake"></i>

            <h2>
                Hubungan yang Saling Menghormati
            </h2>

            <p>
                Hak dan kewajiban pasien merupakan bagian penting
                dalam mewujudkan pelayanan kesehatan yang aman,
                nyaman, transparan dan berorientasi pada keselamatan pasien.
            </p>

        </div>

    </div>

</section>


<!-- HAK PASIEN -->
<section class="patient-rights">

    <div class="container-custom">

        <div class="section-title-center">

            <span>HAK PASIEN</span>

            <h2>
                Hak yang Diperoleh Pasien
            </h2>

        </div>

        <div class="rights-grid">

            <div class="right-card">
                <i class="fas fa-user-shield"></i>
                Mendapatkan pelayanan yang manusiawi, adil dan jujur.
            </div>

            <div class="right-card">
                <i class="fas fa-user-md"></i>
                Mendapatkan pelayanan medis yang bermutu.
            </div>

            <div class="right-card">
                <i class="fas fa-file-medical"></i>
                Mendapatkan informasi mengenai diagnosis dan tindakan medis.
            </div>

            <div class="right-card">
                <i class="fas fa-lock"></i>
                Mendapatkan perlindungan privasi dan kerahasiaan data medis.
            </div>

            <div class="right-card">
                <i class="fas fa-comments"></i>
                Menyampaikan keluhan dan memperoleh tanggapan.
            </div>

            <div class="right-card">
                <i class="fas fa-file-signature"></i>
                Memberikan persetujuan atau penolakan tindakan medis.
            </div>

            <div class="right-card">
                <i class="fas fa-notes-medical"></i>
                Memperoleh ringkasan rekam medis sesuai ketentuan.
            </div>

            <div class="right-card">
                <i class="fas fa-hospital-user"></i>
                Memilih dokter dan kelas perawatan sesuai ketentuan.
            </div>

        </div>

    </div>

</section>


<!-- KEWAJIBAN PASIEN -->
<section class="patient-obligation">

    <div class="container-custom">

        <div class="section-title-center">

            <span>KEWAJIBAN PASIEN</span>

            <h2>
                Kewajiban yang Harus Dipenuhi
            </h2>

        </div>

        <div class="obligation-grid">

            <div class="obligation-card">
                <i class="fas fa-check-circle"></i>
                Memberikan informasi kesehatan yang lengkap dan jujur.
            </div>

            <div class="obligation-card">
                <i class="fas fa-check-circle"></i>
                Mematuhi peraturan dan tata tertib rumah sakit.
            </div>

            <div class="obligation-card">
                <i class="fas fa-check-circle"></i>
                Mengikuti petunjuk dan anjuran tenaga kesehatan.
            </div>

            <div class="obligation-card">
                <i class="fas fa-check-circle"></i>
                Menghormati hak pasien lain dan petugas rumah sakit.
            </div>

            <div class="obligation-card">
                <i class="fas fa-check-circle"></i>
                Menjaga fasilitas rumah sakit yang digunakan.
            </div>

            <div class="obligation-card">
                <i class="fas fa-check-circle"></i>
                Menyelesaikan kewajiban administrasi sesuai ketentuan.
            </div>

        </div>

    </div>

</section>


<!-- CLOSING -->
<section class="patient-closing">

    <div class="container-custom">

        <div class="closing-box">

            <h2>
                Bersama Mewujudkan Pelayanan Berkualitas
            </h2>

            <p>
                Dengan memahami hak dan kewajiban pasien,
                diharapkan tercipta hubungan yang baik antara
                pasien, keluarga, dan tenaga kesehatan untuk
                mendukung proses pelayanan yang optimal.
            </p>

        </div>

    </div>

</section>

@endsection
