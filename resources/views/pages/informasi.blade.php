@extends('layouts.app-web')
@section('title', 'Informasi | RSUP Surakarta')

@section('content')

<section class="section informasi-page">
    <div class="container-custom">

        <!-- HEADER -->
        <div class="informasi-header">
            <span class="badge-info">Informasi RSUP</span>

            <h1>Informasi Terbaru</h1>

            <p>
                Berbagai informasi, pengumuman, berita, dan artikel terbaru
                seputar pelayanan serta kegiatan di RSUP Surakarta.
            </p>
        </div>

        <!-- FILTER -->
        <div class="informasi-filter">

            <button class="active" data-filter="all">
                Semua
            </button>

            <button data-filter="pengumuman">
                Pengumuman
            </button>

            <button data-filter="berita">
                Berita
            </button>

            <button data-filter="artikel">
                Artikel
            </button>

        </div>

        <!-- GRID -->
        <div class="informasi-grid">

            <!-- CARD -->
            <div class="informasi-card" data-category="pengumuman">

                <div class="informasi-image">
                    <img src="{{ asset('img/promo/5.png') }}" alt="">
                </div>

                <div class="informasi-body">

                    <span class="kategori pengumuman">
                        Pengumuman
                    </span>

                    <h4>
                        Poliklinik Eksekutif Praktik Hari Sabtu
                    </h4>

                    <p>
                        Informasi jadwal pelayanan poliklinik eksekutif
                        terbaru di RSUP Surakarta.
                    </p>

                    <div class="informasi-meta">
                        <span>
                            <i class="bi bi-calendar-event"></i>
                            01 Februari 2026
                        </span>

                        <a href="#">
                            Baca Selengkapnya →
                        </a>
                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="informasi-card" data-category="berita">

                <div class="informasi-image">
                    <img src="{{ asset('img/promo/6.png') }}" alt="">
                </div>

                <div class="informasi-body">

                    <span class="kategori berita">
                        Berita
                    </span>

                    <h4>
                        RSUP Surakarta Dalam Sepekan
                    </h4>

                    <p>
                        Dokumentasi kegiatan dan pelayanan terbaru
                        RSUP Surakarta minggu ini.
                    </p>

                    <div class="informasi-meta">
                        <span>
                            <i class="bi bi-calendar-event"></i>
                            03 Februari 2026
                        </span>

                        <a href="#">
                            Baca Selengkapnya →
                        </a>
                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="informasi-card" data-category="artikel">

                <div class="informasi-image">
                    <img src="{{ asset('img/promo/7.png') }}" alt="">
                </div>

                <div class="informasi-body">

                    <span class="kategori artikel">
                        Artikel
                    </span>

                    <h4>
                        Tips Menjaga Kesehatan Jantung
                    </h4>

                    <p>
                        Kenali pola hidup sehat untuk menjaga kesehatan
                        jantung dan pembuluh darah.
                    </p>

                    <div class="informasi-meta">
                        <span>
                            <i class="bi bi-calendar-event"></i>
                            05 Februari 2026
                        </span>

                        <a href="#">
                            Baca Selengkapnya →
                        </a>
                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="informasi-card">

                <div class="informasi-image">
                    <img src="{{ asset('img/promo/8.png') }}" alt="">
                </div>

                <div class="informasi-body" data-category="berita">

                    <span class="kategori berita">
                        Berita
                    </span>

                    <h4>
                        Healthy Talk Demam dan Ruam
                    </h4>

                    <p>
                        Edukasi kesehatan terbaru mengenai demam
                        dan ruam pada anak dan dewasa.
                    </p>

                    <div class="informasi-meta">
                        <span>
                            <i class="bi bi-calendar-event"></i>
                            08 Februari 2026
                        </span>

                        <a href="#">
                            Baca Selengkapnya →
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
<script>

const filterButtons =
document.querySelectorAll(
'.informasi-filter button'
);

const cards =
document.querySelectorAll(
'.informasi-card'
);

filterButtons.forEach(button => {

    button.addEventListener('click', () => {

        /* hapus active lama */
        filterButtons.forEach(btn =>
            btn.classList.remove('active')
        );

        /* active baru */
        button.classList.add('active');

        const filter =
        button.dataset.filter;

        cards.forEach(card => {

            if(
                filter === 'all'
            ){

                card.style.display =
                'block';

            }else{

                card.style.display =
                card.dataset.category === filter
                ? 'block'
                : 'none';
            }

        });

    });

});

</script>
@endsection
