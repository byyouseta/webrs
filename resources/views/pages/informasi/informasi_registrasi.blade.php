@extends('layouts.app-web')

@section('title', 'Informasi Registrasi Pasien | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="reg-hero">

    <div class="container-custom">

        <span class="reg-badge">
            INFORMASI PENDAFTARAN
        </span>

        <h1>
            Registrasi Pasien
        </h1>

        <p>
            Pendaftaran pasien RSUP Surakarta dapat dilakukan secara
            online melalui aplikasi ePasien maupun langsung di rumah sakit.
        </p>

        <a href="https://epasien.rsupsurakarta.id/"
           target="_blank"
           class="btn-daftar-online">

            <i class="fas fa-calendar-check"></i>
            Daftar Online Sekarang

        </a>

    </div>

</section>


<!-- ALUR -->
<section class="reg-flow">

    <div class="container-custom">

        <div class="section-title-center">

            <span>ALUR PENDAFTARAN</span>

            <h2>
                Langkah Registrasi Pasien
            </h2>

        </div>

        <div class="flow-wrapper">

            <div class="flow-item">

                <div class="flow-number">1</div>

                <div class="flow-content">

                    <h4>
                        Siapkan Dokumen
                    </h4>

                    <p>
                        KTP, Kartu BPJS/KIS (jika ada),
                        surat rujukan dan dokumen pendukung lainnya.
                    </p>

                </div>

            </div>

            <div class="flow-item">

                <div class="flow-number">2</div>

                <div class="flow-content">

                    <h4>
                        Registrasi Online
                    </h4>

                    <p>
                        Akses ePasien RSUP Surakarta untuk memilih
                        poli, dokter dan jadwal pelayanan.
                    </p>

                </div>

            </div>

            <div class="flow-item">

                <div class="flow-number">3</div>

                <div class="flow-content">

                    <h4>
                        Dapatkan Nomor Antrian
                    </h4>

                    <p>
                        Sistem akan memberikan informasi
                        nomor antrian dan jadwal kunjungan.
                    </p>

                </div>

            </div>

            <div class="flow-item">

                <div class="flow-number">4</div>

                <div class="flow-content">

                    <h4>
                        Datang Sesuai Jadwal
                    </h4>

                    <p>
                        Datang ke rumah sakit sesuai waktu yang
                        telah ditentukan untuk proses pelayanan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- PERSYARATAN -->
<section class="reg-requirement">

    <div class="container-custom">

        <div class="requirement-card">

            <h2>
                Persyaratan Registrasi
            </h2>

            <div class="requirement-grid">

                <div>
                    <i class="fas fa-id-card"></i>
                    KTP / Identitas Diri
                </div>

                <div>
                    <i class="fas fa-address-card"></i>
                    Kartu BPJS / KIS
                </div>

                <div>
                    <i class="fas fa-file-medical"></i>
                    Surat Rujukan
                </div>

                <div>
                    <i class="fas fa-notes-medical"></i>
                    Dokumen Pendukung Medis
                </div>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="reg-cta">

    <div class="container-custom">

        <div class="cta-card">

            <h2>
                Daftar Lebih Mudah Melalui ePasien
            </h2>

            <p>
                Hindari antrean panjang dengan melakukan pendaftaran
                secara online melalui sistem ePasien RSUP Surakarta.
            </p>

            <a href="https://epasien.rsupsurakarta.id/"
               target="_blank"
               class="btn-daftar-online">

                <i class="fas fa-external-link-alt"></i>
                Buka ePasien

            </a>

        </div>

    </div>

</section>

@endsection
