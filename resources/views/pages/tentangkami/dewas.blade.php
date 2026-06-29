@extends('layouts.app-web')

@section('title', 'Dewan Pengawas | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="dewas-hero">

    <div class="container-custom">

        <span class="dewas-badge">
            PROFIL RSUP SURAKARTA
        </span>

        <h1>
            Dewan Pengawas
        </h1>

        <p>
            Dewan Pengawas bertugas melakukan pengawasan terhadap
            pengelolaan rumah sakit guna memastikan tata kelola,
            akuntabilitas, dan kualitas pelayanan berjalan sesuai
            ketentuan yang berlaku.
        </p>

    </div>

</section>


<!-- KETUA -->
<section class="dewas-section">

    <div class="container-custom">

        <div class="dewas-chief">

            <div class="dewas-photo">

                <i class="fas fa-user-tie"></i>

            </div>

            <h3>
                Ketua Dewan Pengawas
            </h3>

            <span>
                Nama Ketua Dewan Pengawas
            </span>

        </div>

    </div>

</section>


<!-- ANGGOTA -->
<section class="dewas-member-section">

    <div class="container-custom">

        <div class="section-title-center">

            <span>ANGGOTA DEWAN PENGAWAS</span>

            <h2>
                Susunan Dewan Pengawas
            </h2>

        </div>

        <div class="dewas-grid">

            <div class="dewas-card">

                <div class="dewas-avatar">
                    <i class="fas fa-user"></i>
                </div>

                <h4>Nama Anggota 1</h4>

                <p>Anggota Dewan Pengawas</p>

            </div>

            <div class="dewas-card">

                <div class="dewas-avatar">
                    <i class="fas fa-user"></i>
                </div>

                <h4>Nama Anggota 2</h4>

                <p>Anggota Dewan Pengawas</p>

            </div>

            <div class="dewas-card">

                <div class="dewas-avatar">
                    <i class="fas fa-user"></i>
                </div>

                <h4>Nama Anggota 3</h4>

                <p>Anggota Dewan Pengawas</p>

            </div>

            <div class="dewas-card">

                <div class="dewas-avatar">
                    <i class="fas fa-user"></i>
                </div>

                <h4>Nama Anggota 4</h4>

                <p>Anggota Dewan Pengawas</p>

            </div>

        </div>

    </div>

</section>


<!-- TUGAS -->
<section class="dewas-duty">

    <div class="container-custom">

        <div class="duty-box">

            <h2>
                Tugas dan Fungsi Dewan Pengawas
            </h2>

            <div class="duty-list">

                <div>
                    <i class="fas fa-check-circle"></i>
                    Melakukan pengawasan terhadap pengelolaan rumah sakit.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Memberikan nasihat kepada Direktur Utama.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Memastikan tata kelola berjalan dengan baik.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mengawasi pelaksanaan rencana strategis rumah sakit.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Menilai capaian kinerja dan pelayanan rumah sakit.
                </div>

            </div>

        </div>

    </div>

</section>

@endsection
