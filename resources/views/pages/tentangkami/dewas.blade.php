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
                <img src="{{ asset('img/direksi/dr_azhar_jaya.svg') }}" alt="Dewan Pengawas">
            </div>

            <h3>
                dr. Azhar Jaya, S.H., SKM, MARS
            </h3>

            <span>
                Dewan Pengawas RSUP Surakarta
            </span>

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
