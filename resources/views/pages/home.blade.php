@extends('layouts.app-web')

@section('content')
<title>RSUP Surakarta</title>
    <meta name="description" content="Website resmi RSUP Surakarta. Informasi layanan, pendaftaran online, promo kesehatan, dan informasi terkini.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="RSUP Surakarta">
    <meta property="og:description" content="Informasi layanan kesehatan, pendaftaran online, promo, dan berita terbaru RSUP Surakarta.">
    <meta property="og:image" content="{{ asset('img/logo-share.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="RSUP Surakarta">
    <meta name="twitter:description" content="Informasi layanan kesehatan, pendaftaran online, promo, dan berita terbaru RSUP Surakarta.">
    <meta name="twitter:image" content="{{ asset('img/logo-share.png') }}">

<section class="hero">

    <!-- SLIDER -->
    <div id="heroCarousel"
         class="carousel slide carousel-fade"
         data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="hero-bg"
                     style="background-image:url('{{ asset('img/assets/paralax3.svg') }}?v={{ rand() }} ');">
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-bg"
                     style="background-image:url('{{ asset('img/assets/paralax1.svg') }}?v={{ rand() }}');">
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-bg"
                     style="background-image:url('{{ asset('img/assets/paralax2.svg') }}?v={{ rand() }} ');">
                </div>
            </div>

        </div>

    </div>

    <!-- OVERLAY -->
    <div class="hero-overlay"></div>

    <!-- CONTENT -->
    <div class="hero-content">

        <div class="hero-inner">

            <div class="hero-left">

                <p class="small-text">
                    Selamat datang di RSUP Surakarta
                </p>

                <h1 class="hero-title">
                    Solusi Kesehatan <br>
                    untuk Anda dan Keluarga
                </h1>

                <p class="hero-desc">
                    Akses layanan medis dan informasi rumah sakit dengan cepat dan mudah
                </p>

                <div class="hero-indicator">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>

            </div>

        </div>

    </div>

    <div class="hero-action container-custom">

       <!-- SEARCH -->
        <form action="{{ route('dokter_list') }}" method="GET" class="search-card">
            <div class="search-title">
                CARI DOKTER ATAU LAYANAN
            </div>

            <div class="search-wrapper">

                <span class="search-icon">
                    <i class="fas fa-search"></i>
                </span>

                <input
                    type="text"
                    name="cari"
                    id="cari"
                    value="{{ request('cari') }}"
                    placeholder="Cari nama dokter atau layanan"
                >

                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>

            </div>

        </form>

       <!-- MENU -->
        <div class="menu-list">

            <a href="https://epasien.rsupsurakarta.id/" class="menu-link" target="_blank">
                <div class="menu-card">
                    <i class="bi bi-calendar-check"></i>
                    <p>Buat Janji</p>
                </div>
            </a>

            <a href="#" class="menu-link" target="_blank">
                <div class="menu-card mcu">
                    <i class="bi bi-clipboard-data"></i>
                    <p>Medical Check Up</p>
                </div>
            </a>

            <a href="https://dashboard.rsupsurakarta.id/pendaftaran/eksekutif" class="menu-link" target="_blank">
                <div class="menu-card">
                    <i class="bi bi-hospital"></i>
                    <p>Layanan Eksekutif</p>
                </div>
            </a>

            <a href="#" class="menu-link" target="_blank">
                <div class="menu-card">
                    <i class="bi bi-file-text"></i>
                    <p>Status Layanan</p>
                </div>
            </a>

            <a href="{{ route('promo') }}" class="menu-link" target="_blank">
                <div class="menu-card promo">
                    <i class="bi bi-tag"></i>
                    <p>Promo</p>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- TENTANG RS -->
<section class="section about-section">
   <div class="container">

        <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-lg-6 reveal">
                <div class="about-image">

                    <img src="{{ asset('img/hospital/home.webp') }}"
                         class="img-fluid parallax-img">
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-6 reveal">

                <h2 class="about-title">
                    BBKPM Surakarta bertransformasi menjadi RSUP Surakarta dengan cakupan pelayanan yang lebih luas dan komprehensif.
                </h2>

                <p class="about-desc mt-3">
                    Didukung oleh tenaga medis profesional, teknologi modern, serta pelayanan yang berorientasi pada keselamatan pasien, kami hadir memberikan solusi kesehatan terbaik untuk Anda dan keluarga.
                </p>

               <div class="about-link mt-4">
                    <a href="https://maps.app.goo.gl/LJHyu82CodVYTCJb8" class="about-btn" target="_blank">
                        <span>Kunjungi Kami</span>
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                    <a href="{{ route('tentang_kami') }}" class="about-btn" target="_blank">
                        <span>Tentang Kami</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- LAYANAN UNGGULAN -->
<section class="section layanan-section">
    <div class="container-custom">

        <div class="layanan-wrapper">

            <!-- LEFT -->
            <div class="layanan-left">
                <h3>Layanan Unggulan Kami</h3>

                <p>
                    Berbagai layanan unggulan untuk mendukung diagnosis,
                    perawatan, dan pemulihan pasien secara optimal.
                </p>

                <div class="layanan-nav">
                 <button class="btn-prev">
                    <i class="bi bi-arrow-left"></i>
                </button>

                <button class="btn-next active">
                    <i class="bi bi-arrow-right"></i>
                </button>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="layanan-right">

                <div class="layanan-slider" id="layananSlider">


                    <div class="layanan-card">
                        <div class="card-img" style="background-image:url('{{ asset('img/hospital/ct-scan.webp') }}');"></div>
                        <div class="card-gradient"></div>
                        <div class="card-content">
                            <h5>Pemeriksaan Penunjang</h5>
                            <p>Pemeriksaan CT - Scan</p>
                        </div>
                    </div>

                    <div class="layanan-card">
                        <div class="card-img" style="background-image:url('{{ asset('img/hospital/usg_jantung.webp') }}');"></div>
                        <div class="card-gradient"></div>
                        <div class="card-content">
                            <h5>Echocardiography (EKG)</h5>
                            <p>Penanganan jantung dengan tenaga medis berpengalaman</p>
                        </div>
                    </div>

                     <div class="layanan-card">
                        <div class="card-img" style="background-image:url('{{ asset('img/hospital/treadmill.webp') }}');"></div>
                        <div class="card-gradient"></div>
                        <div class="card-content">
                            <h5>Treadmill</h5>
                            <p>Uji Treadmill</p>
                        </div>
                    </div>

                    <div class="layanan-card">
                        <div class="card-img" style="background-image:url('{{ asset('img/hospital/eeg.webp') }}');"></div>
                        <div class="card-gradient"></div>
                        <div class="card-content">
                            <h5>Electroencephalogram (EEG)</h5>
                            <p>Pemeriksaan Deteksi Kelaian Otak & Syaraf</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- PROMO LAYANAN -->
<section class="section promo-section">
    <div class="container-custom">

        <!-- HEADER -->
        <div class="promo-header">
            <h3>Penawaran Spesial</h3>

            <div class="promoslider-nav">
               <button class="promo-prev">
                    <i class="bi bi-arrow-left"></i>
                </button>

                <button class="promo-next">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- SLIDER -->
        <div class="promo-slider" id="promoSlider">

            <!-- CARD -->
           @foreach($promotions as $promotion)
            <div class="promo-card">

                <img src="{{ asset('storage/'.$promotion->image) }}"
                    alt="{{ $promotion->translation->title ?? 'Promo' }}">

                <div class="promo-body">

                    <h5>
                        {{ $promotion->translation->title ?? '-' }}
                    </h5>

                    <p>
                        {{ $promotion->translation->description ?? '' }}
                    </p>

                    <div class="promo-meta">
                        <span>
                            📅
                            {{ \Carbon\Carbon::parse($promotion->start_date)->translatedFormat('d F Y') }}
                            -
                            {{ \Carbon\Carbon::parse($promotion->end_date)->translatedFormat('d F Y') }}
                        </span>
                    </div>

                </div>

            </div>

            @endforeach


        </div>
    </div>
</section>


<!-- POLI EKSEKUTIF -->
<section class="poli-section">

    <div class="poli-bg"
         style="background-image:url('{{ asset('img/assets/poli_eksekutif_2.webp') }}');">

        <!-- GRADIENT -->
        <div class="poli-overlay"></div>

        <!-- CONTENT -->
        <div class="container-custom poli-content">

            <h2>Poli Eksekutif RSUP Surakarta</h2>

            <p class="poli-desc">
                Layanan kesehatan premium yang dirancang untuk memberikan
                perawatan secara cepat, nyaman, dan eksklusif.
            </p>

            <!-- MENU ICON -->
            <div class="poli-features">

                <div class="feature-item">
                    <i class="bi bi-star"></i>
                    <p>Fasilitas Eksklusif</p>
                </div>

                <div class="feature-item">
                    <i class="bi bi-lightning-charge"></i>
                    <p>Akses Cepat Layanan</p>
                </div>

                <div class="feature-item">
                    <i class="bi bi-heart-pulse"></i>
                    <p>Ditangani Spesialis</p>
                </div>

            </div>

            <!-- DESKRIPSI BAWAH -->
            <div class="poli-info">

                <div>
                    <h6>Fasilitas Eksklusif</h6>
                    <p>Fasilitas eksklusif untuk pengalaman medis yang optimal</p>
                </div>

                <div>
                    <h6>Waktu Lebih Cepat</h6>
                    <p>Sistem layanan prioritas dengan waktu tunggu lebih singkat</p>
                </div>

                <div>
                    <h6>Konsultasi Nyaman</h6>
                    <p>Konsultasi jantung yang fokus, nyaman, dan profesional</p>
                </div>

                <div>
                    <h6>Ideal untuk Pemeriksaan</h6>
                    <p>Untuk pemeriksaan rutin dan tindak lanjut</p>
                </div>

            </div>

        </div>

    </div>

</section>



<!-- TESTIMONI -->
<section class="section testimonial-section">
    <div class="container-custom">

        <!-- HEADER -->
        <div class="testimonial-header">
            <h3>Cerita Pengalaman Pasien</h3>

            <div class="testimonial-nav">
                <button class="testi-prev">
                    <i class="bi bi-arrow-left"></i>
                </button>

                <button class="testi-next">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- SLIDER -->
        <div class="testimonial-slider" id="testiSlider">

          @foreach($testimonials as $testimonial)

                <div class="testimonial-item">

                    <!-- IMAGE -->
                    <div class="testi-img">
                        <img src="{{ $testimonial->photo
                            ? asset('storage/'.$testimonial->photo)
                            : asset('img/assets/thumbnail_logo.webp') }}">
                    </div>

                    <!-- CONTENT -->
                    <div class="testi-content">
                        <div class="quote">“</div>

                        <p>
                            {{ $testimonial->quote }}
                        </p>

                        <div class="testi-meta">
                            <strong>{{ $testimonial->display_patient_name }}</strong>

                            <span>
                                {{ $testimonial->patient_type }}
                                |
                                {{ optional($testimonial->service->translation)->title }}
                            </span>
                        </div>
                    </div>

                </div>

                @endforeach



        </div>

    </div>
</section>

<!-- INFORMASI TERKINI -->
<section class="section info-section">
    <div class="container-custom">

        <!-- HEADER -->
        <div class="info-header">
            <h3>Informasi Terkini</h3>

            <a href="#" class="lihat-semua">Lihat Semua →</a>
        </div>

        <!-- FILTER BUTTON -->
        <div class="info-filter">
            <button class="active" data-filter="all">Semua</button>
            <button data-filter="pengumuman">Pengumuman</button>
            <button data-filter="berita">Berita</button>
            <button data-filter="artikel">Artikel</button>
        </div>

        <!-- SLIDER -->
        <div class="info-slider" id="infoSlider">

            <!-- CARD -->
            @foreach($articles as $article)

            <div class="info-card" data-category="{{ strtolower($article->type) }}">

                <img src="{{ asset('storage/'.$article->thumbnail) }}"
                    alt="{{ $article->translation->title ?? '' }}">

                <div class="info-body">

                    <span class="tag">
                        {{ ucfirst($article->type) }}
                    </span>

                    <h5>
                        {{ $article->translation->excerpt ?? '-' }}
                    </h5>

                    <small>
                        {{ $article->published_at
                            ? \Carbon\Carbon::parse($article->published_at)->translatedFormat('d M Y')
                            : \Carbon\Carbon::parse($article->created_at)->translatedFormat('d M Y')
                        }}
                    </small>

                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>



<!-- UMPAN BALIK -->
<section class="section feedback-section">
    <div class="container-custom">

        <div class="feedback-wrapper">

            <a href="https://gate.rsupsurakarta.id/survei/kepuasan" class="feedback-item" target="_blank">
                <i class="bi bi-emoji-smile"></i>

                <div class="feedback-text">
                    <h5>Survei Kepuasan</h5>
                    <p>Nilai Pelayanan Kami</p>
                </div>

                <span class="arrow">→</span>
            </a>

            <a href="https://gate.rsupsurakarta.id/survei/pengaduan" class="feedback-item" target="_blank">
                <i class="bi bi-chat-dots"></i>

                <div class="feedback-text">
                    <h5>Keluhan</h5>
                    <p>Sampaikan Kritik & Saran</p>
                </div>

                <span class="arrow">→</span>
            </a>

            <a href="https://lapor.go.id" class="feedback-item" target="_blank">
                <i class="bi bi-megaphone"></i>

                <div class="feedback-text">
                    <h5>LAPOR!</h5>
                    <p>Laporan Aspirasi & Pengaduan Online Rakyat</p>
                </div>

                <span class="arrow">→</span>
            </a>

        </div>

    </div>
</section>

<div class="chatbot-wrapper">

    <button class="chatbot-btn" onclick="toggleChat()">
        <i class="bi bi-chat-dots"></i>
    </button>
    <div class="chatbot-box" id="chatBox">
        <div class="chat-header">
            <span>Customer Service</span>
            <button onclick="toggleChat()">✕</button>
        </div>

        <div class="chat-body">
            <p>Halo Ada yang bisa kami bantu?</p>

            <a href="https://wa.me/6287735888811" target="_blank" class="chat-option">
                WhatsApp
            </a>
            <!-- <a href="#" class="chat-option">
                Chat Bot AI
            </a> -->
        </div>
    </div>

</div>

<script>
    const carousel = document.querySelector('#heroCarousel');
    const indicators = document.querySelectorAll('.hero-indicator span');

    carousel.addEventListener('slide.bs.carousel', function (e) {
        indicators.forEach(i => i.classList.remove('active'));
        indicators[e.to].classList.add('active');
    });
</script>

<script>
    const slider = document.getElementById('layananSlider');
    document.querySelector('.btn-next').onclick = () => {
        slider.scrollBy({ left: 260, behavior: 'smooth' });
    };
    document.querySelector('.btn-prev').onclick = () => {
        slider.scrollBy({ left: -260, behavior: 'smooth' });
    };
</script>


<script>
const testi = document.getElementById('testiSlider');
    document.querySelector('.testi-next').onclick = () => {
        testi.scrollBy({ left: 700, behavior: 'smooth' });
    };
    document.querySelector('.testi-prev').onclick = () => {
        testi.scrollBy({ left: -700, behavior: 'smooth' });
    };
</script>


<script>
    const promo = document.getElementById('promoSlider');

    document.querySelector('.promo-next').onclick = () => {
        testi.scrollBy({ left: 700, behavior: 'smooth' });
    };

    document.querySelector('.promo-prev').onclick = () => {
        testi.scrollBy({ left: -700, behavior: 'smooth' });
    };
</script>

<script>
    const buttons = document.querySelectorAll('.info-filter button');
    const cards = document.querySelectorAll('.info-card');

    buttons.forEach(btn => {
        btn.onclick = () => {

            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            let filter = btn.dataset.filter;

            cards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        };
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const promoSlider = document.getElementById('promoSlider');
        document.querySelector('.promo-next').addEventListener('click', function () {
            promoSlider.scrollBy({
                left: 340,
                behavior: 'smooth'
            });
        });

        document.querySelector('.promo-prev').addEventListener('click', function () {
            promoSlider.scrollBy({
                left: -340,
                behavior: 'smooth'
            });
        });

    });
</script>
<script>
    function toggleChat() {
        let box = document.getElementById("chatBox");

        if (box.style.display === "block") {
            box.style.display = "none";
        } else {
            box.style.display = "block";
        }
    }
</script>

<script>
    window.addEventListener('scroll', function(){
        const image = document.querySelector('.parallax-img');

        let scroll = window.pageYOffset;

        image.style.transform =
            `scale(${1.1 + scroll * 0.00015})`;
    });
</script>
<script>
        const testiSlider =
        document.getElementById('testiSlider');

        const testiItem =
        document.querySelector('.testimonial-item');

        function autoSlideTesti(){
            const cardWidth =
            testiItem.offsetWidth + 16;
            if(
                testiSlider.scrollLeft +
                testiSlider.clientWidth >=
                testiSlider.scrollWidth - 10
            ){

                testiSlider.scrollTo({
                    left:0,
                    behavior:'smooth'
                });

            }else{

                testiSlider.scrollBy({
                    left:cardWidth,
                    behavior:'smooth'
                });

            }
        }

        let autoPlay =
        setInterval(autoSlideTesti, 5000);
        testiSlider.addEventListener('mouseenter', () => {
            clearInterval(autoPlay);
        });
        testiSlider.addEventListener('mouseleave', () => {
            autoPlay =
            setInterval(autoSlideTesti, 5000);

        });
</script>

@endsection
