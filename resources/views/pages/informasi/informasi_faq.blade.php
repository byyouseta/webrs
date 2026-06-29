@extends('layouts.app-web')

@section('title', 'FAQ | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="faq-hero">

    <div class="container-custom">

        <span class="faq-badge">
            PUSAT BANTUAN
        </span>

        <h1>
            Frequently Asked Questions (FAQ)
        </h1>

        <p>
            Temukan jawaban atas pertanyaan yang sering diajukan
            terkait pelayanan, pendaftaran, jadwal dokter,
            BPJS, dan informasi lainnya di RSUP Surakarta.
        </p>

    </div>

</section>


<!-- FAQ -->
<section class="faq-section">

    <div class="container-custom">

        <div class="faq-wrapper">

            <div class="faq-item active">

                <button class="faq-question">

                    Bagaimana cara daftar berobat di RSUP Surakarta?

                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                    <p>
                        Pendaftaran dapat dilakukan secara online melalui
                        ePasien RSUP Surakarta atau langsung datang ke rumah sakit.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    Apakah melayani pasien BPJS Kesehatan?

                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                    <p>
                        Ya. RSUP Surakarta melayani pasien BPJS Kesehatan
                        sesuai ketentuan dan prosedur yang berlaku.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    Bagaimana cara melihat jadwal dokter?

                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                    <p>
                        Jadwal dokter dapat dilihat melalui menu
                        Jadwal Dokter pada website RSUP Surakarta.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    Apakah tersedia layanan IGD 24 Jam?

                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                    <p>
                        Ya. Instalasi Gawat Darurat (IGD) RSUP Surakarta
                        beroperasi selama 24 jam setiap hari.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    Bagaimana cara mengetahui ketersediaan tempat tidur?

                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                    <p>
                        Informasi ketersediaan tempat tidur dapat dilihat
                        pada menu Ketersediaan Tempat Tidur di website.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    Apakah tersedia layanan parkir untuk pengunjung?

                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                    <p>
                        Ya. RSUP Surakarta menyediakan area parkir
                        kendaraan roda dua dan roda empat yang luas.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="faq-contact">

    <div class="container-custom">

        <div class="faq-contact-box">

            <h2>
                Pertanyaan Belum Terjawab?
            </h2>

            <p>
                Hubungi petugas informasi RSUP Surakarta untuk
                mendapatkan bantuan dan informasi lebih lanjut.
            </p>

            <a href="#"
               class="faq-btn">

                Hubungi Kami

            </a>

        </div>

    </div>

</section>


<script>

document.querySelectorAll('.faq-question')
.forEach(button => {

    button.addEventListener('click', () => {

        const item = button.parentElement;

        item.classList.toggle('active');

    });

});

</script>

@endsection
