@extends('layouts.app-web')

@section('title', 'Fasilitas | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="facility-hero">

    <div class="container-custom">

        <span class="facility-badge">
            FASILITAS RSUP SURAKARTA
        </span>

        <h1>
            Fasilitas Lengkap untuk Mendukung
            Kenyamanan Pasien dan Pengunjung
        </h1>

        <p>
            RSUP Surakarta menyediakan berbagai fasilitas pendukung
            yang dirancang untuk memberikan kenyamanan, keamanan,
            dan kemudahan akses bagi pasien, keluarga pasien,
            maupun pengunjung.
        </p>

    </div>

</section>


<!-- HIGHLIGHT -->
<section class="facility-highlight">

    <div class="container-custom">

        <div class="highlight-grid">



            <div class="highlight-card">
                <h4>24 Jam</h4>
                <p>Akses Rumah Sakit</p>
            </div>

            <div class="highlight-card">
                <h4>Nyaman</h4>
                <p>Area Publik Modern</p>
            </div>

            <div class="highlight-card">
                <h4>Daftar Online</h4>
                <p>Booking Periksa Poliklinik</p>
            </div>

            <div class="highlight-card">
                <h4>Informasi</h4>
                <p>Ketersediaan Kamar Realtime</p>
            </div>

        </div>

    </div>

</section>


<!-- GALERI -->
<section class="facility-gallery">

    <div class="container-custom">

        <div class="section-title-center">

            <span>GALERI FASILITAS</span>

            <h2>
                Fasilitas Unggulan RSUP Surakarta
            </h2>

        </div>

        <div id="facilityCarousel"
             class="carousel slide carousel-fade"
             data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('img/assets/fasilitas/fasilitas_ugd.svg') }}?v={{ rand() }}"
                         class="facility-image">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/assets/fasilitas/fasilitas_playground.svg') }}?v={{ rand() }}"
                         class="facility-image">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/assets/fasilitas/fasilitas_masjid.svg') }}?v={{ rand() }}"
                         class="facility-image">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/assets/fasilitas/fasilitas_kantin.svg') }}?v={{ rand() }}"
                         class="facility-image">
                </div>



            </div>

        </div>

    </div>

</section>


<!-- DESKRIPSI -->
<section class="facility-description">

    <div class="container-custom">

        <h2>
            Mendukung Pelayanan yang Nyaman
        </h2>

        <p>
            Selain pelayanan kesehatan yang komprehensif,
            RSUP Surakarta juga menyediakan berbagai fasilitas
            umum dan fasilitas penunjang yang dapat dimanfaatkan
            oleh pasien maupun pengunjung selama berada di area rumah sakit.
        </p>

    </div>

</section>


<!-- FASILITAS PUBLIK -->
<section class="facility-public">

    <div class="container-custom">

        <div class="section-title-center">

            <span>FASILITAS PUBLIK</span>

            <h2>
                Tersedia untuk Pengunjung
            </h2>

        </div>

        <div class="facility-list-grid">

            <div><i class="fas fa-car"></i> Area Parkir Luas</div>
            <div><i class="fas fa-mosque"></i> Masjid</div>
            <div><i class="fas fa-utensils"></i> Kantin</div>
            <div><i class="fas fa-store"></i> Koperasi</div>
            <div><i class="fas fa-child"></i> Playground Anak</div>
            <div><i class="fas fa-credit-card"></i> ATM Center</div>
            <div><i class="fas fa-wheelchair"></i> Akses Difabel</div>
            <div><i class="fas fa-wifi"></i> WiFi Area</div>
            <div><i class="fas fa-restroom"></i> Toilet Umum</div>
            <div><i class="fas fa-elevator"></i> Lift Antar Lantai</div>

        </div>

    </div>

</section>


<!-- PENUNJANG -->
<section class="facility-service">

    <div class="container-custom">

        <div class="section-title-center">

            <span>PENUNJANG PELAYANAN</span>

            <h2>
                Fasilitas Pendukung Pelayanan Medis
            </h2>

        </div>

        <div class="service-grid">

            <div class="service-card">

                <i class="fas fa-pills"></i>

                <h4>Farmasi</h4>

                <p>
                    Area tunggu nyaman dengan sistem antrean modern.
                </p>

            </div>

            <div class="service-card">

                <i class="fas fa-x-ray"></i>

                <h4>Radiologi</h4>

                <p>
                    Fasilitas diagnostik dengan ruang tunggu representatif.
                </p>

            </div>

            <div class="service-card">

                <i class="fas fa-flask"></i>

                <h4>Laboratorium</h4>

                <p>
                    Pemeriksaan laboratorium dengan fasilitas lengkap.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection
