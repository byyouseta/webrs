
<footer class="footer">

    <div class="container-custom footer-top">

        <!-- LEFT -->
        <div class="footer-col footer-brand">
            <img src="{{ asset('../img/assets/rsup_white.svg') }}" class="footer-logo">

            <p>
                Direktorat Jendral Kesehatan Lanjutan<br>
                RSUP Surakarta<br>
                Jl. Profesor DR. Soeharso No.28, Jajar, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57144<br>
                Indonesia
            </p>

            <div class="footer-title">
                TERHUBUNG DENGAN KAMI
            </div>
            <!-- SOCIAL -->
            <div class="footer-social">
                <a href="https://www.facebook.com/rsupsurakarta/?locale=id_ID" target="_blank"><i class="bi bi-facebook"></i> </a>
                <a href="https://x.com/rsup_surakarta" target="_blank"><i class="bi bi-twitter-x"></i> </a>
                <a href="https://www.instagram.com/rsupsurakarta/" target="_blank"><i class="bi bi-instagram"></i> </a>
                <a href="https://www.youtube.com/channel/UCFQxRSSfXPeGnI1HO1krstA" target="_blank"><i class="bi bi-youtube"></i> </a>
                <!-- <a href="https://www.facebook.com/rsupsurakarta/?locale=id_ID" target="_blank"><i class="bi bi-linkedin"></i> </a> -->
            </div>

            <!--
            <div class="footer-app">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg">
                <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg">
            </div> -->
        </div>

        <!-- MENU -->
        <div class="footer-col">
            <h5>TAUTAN LAINNYA</h5>
            <ul>
                <li>
                    <a href="{{ route('dokter_list') }}">
                        Dokter
                    </a>
                    <i class="bi bi-arrow-right-short"></i>
                </li>

                <li>
                    <a href="#">
                        Layanan
                    </a>
                    <i class="bi bi-arrow-right-short"></i>
                </li>

                <li>
                    <a href="{{route('tentang_kami')}}">
                        Tentang Kami
                    </a>
                    <i class="bi bi-arrow-right-short"></i>
                </li>

                <li>
                    <a href="{{route('informasi')}}">
                        Informasi
                    </a>
                    <i class="bi bi-arrow-right-short"></i>
                </li>

                <li>
                    <a href="#">
                        Media
                    </a>
                </li>

                <li>
                    <a href="{{route('promo')}}">
                        Promo
                    </a>
                    <i class="bi bi-arrow-right-short"></i>
                </li>

            </ul>

        </div>

        <!-- INFO -->
      <div class="footer-col footer-contact">

    <h5>Hubungi Kami</h5>

    <div class="footer-contact-item">

        <h6>Contact Center</h6>

        <p>
            Telepon (0271) 713055 <br>
            Email rsupsurakarta@kemkes.go.id
        </p>

    </div>


    <div class="footer-contact-item">

        <h6>Kontak Darurat</h6>

        <p>
            Hubungi (0271) 713055 untuk darurat medis
        </p>

    </div>


    <div class="footer-contact-item">

        <h6>WhatsApp</h6>

        <p>
            Hubungi hotline -
        </p>

    </div>


    <a href="#" class="footer-contact-link">

        Kontak Lainnya

        <i class="bi bi-arrow-right-short"></i>

    </a>

</div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">
        <div class="container-custom footer-bottom-inner">
            <span>© RSUP Surakarta 2026 – All Rights Reserved</span>
            <div class="footer-links">
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">Kebijakan Privasi</a>
            </div>
        </div>
    </div>

</footer>
