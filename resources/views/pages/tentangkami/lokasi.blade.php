@extends('layouts.app-web')

@section('title', 'Lokasi & Kontak | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="contact-hero">

    <div class="container-custom">

        <span class="contact-badge">
            HUBUNGI KAMI
        </span>

        <h1>
            Lokasi & Kontak RSUP Surakarta
        </h1>

        <p>
            Kami siap melayani kebutuhan informasi dan pelayanan kesehatan
            masyarakat melalui berbagai kanal komunikasi yang tersedia.
        </p>

    </div>

</section>


<!-- KONTAK -->
<section class="contact-section">

    <div class="container-custom">

        <div class="contact-grid">

            <!-- INFO -->
            <div class="contact-info">

                <h2>
                    Informasi Kontak
                </h2>

                <div class="contact-item">

                    <i class="fas fa-map-marker-alt"></i>

                    <div>

                        <h5>Alamat</h5>

                        <p>
                            Jl. Prof. Dr. R. Soeharso No.28,
                            Jebres, Surakarta,
                            Jawa Tengah 57126
                        </p>

                    </div>

                </div>

                <div class="contact-item">

                    <i class="fas fa-phone-alt"></i>

                    <div>

                        <h5>Telepon</h5>

                        <p>
                            (0271) 713055
                        </p>

                    </div>

                </div>

                <div class="contact-item">

                    <i class="fab fa-whatsapp"></i>

                    <div>

                        <h5>WhatsApp Humas</h5>

                        <p>
                            0877 3588 8811
                        </p>

                    </div>

                </div>

                <div class="contact-item">

                    <i class="fas fa-envelope"></i>

                    <div>

                        <h5>Email</h5>

                        <p>
                            rsupsurakarta@kemkes.go.id
                        </p>

                    </div>

                </div>

                <a
                    href="https://maps.app.goo.gl/9rh9snGHBKfEFRGz6"
                    target="_blank"
                    class="btn-location"
                >
                    <i class="fas fa-location-arrow"></i>
                    Buka di Google Maps
                </a>

            </div>


            <!-- MAP -->
            <div class="contact-map">

                <iframe
                    src="https://www.google.com/maps?q=RSUP%20Surakarta&output=embed"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

            </div>

        </div>

    </div>

</section>


<!-- JAM PELAYANAN -->
<section class="service-hour-section">

    <div class="container-custom">

        <div class="hour-card">

            <h2>
                Jam Pelayanan
            </h2>

            <div class="hour-grid">

                <div>
                    <span>Rawat Jalan</span>
                    <strong>Senin - Jumat</strong>
                    <p>07.00 - 16.00 WIB</p>
                </div>

                <div>
                    <span>IGD</span>
                    <strong>24 Jam</strong>
                    <p>Setiap Hari</p>
                </div>

                <div>
                    <span>Pusat Informasi</span>
                    <strong>Senin - Jumat</strong>
                    <p>07.00 - 16.00 WIB</p>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection
