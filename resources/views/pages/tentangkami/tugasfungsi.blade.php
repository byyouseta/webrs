@extends('layouts.app-web')

@section('title', 'Tugas dan Fungsi RSUP Surakarta')

@section('content')

{{-- HERO --}}
<section class="rsup-tugas-hero">
    <div class="container-custom">
        <span class="rsup-tugas-badge">
            TENTANG KAMI
        </span>

        <h1>Tugas dan Fungsi RSUP Surakarta</h1>

        <p>
            Komitmen RSUP Surakarta dalam meningkatkan akses,
            mutu pelayanan kesehatan, riset, kedokteran presisi,
            dan tata kelola organisasi yang berkelanjutan.
        </p>
    </div>
</section>

{{-- KONTEN UTAMA --}}
<section class="rsup-tugas-section">
    <div class="container-custom">

        <div class="rsup-tugas-heading">
            <span>ARAH STRATEGIS</span>
            <h2>Tugas dan Fungsi RSUP Surakarta</h2>
            <p>
                Berikut merupakan lima fokus tugas dan fungsi
                RSUP Surakarta dalam mendukung peningkatan
                pelayanan kesehatan dan tata kelola organisasi.
            </p>
        </div>

        <div class="rsup-tugas-grid">

            {{-- 1 --}}
            <article class="rsup-tugas-card">
                <div class="rsup-tugas-card-top">
                    <div class="rsup-tugas-icon green">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <span class="rsup-tugas-number">01</span>
                </div>

                <h3>
                    Meningkatnya Pemerataan Akses dan Mutu
                    Pelayanan Kesehatan Lanjutan
                </h3>

                <div class="rsup-tugas-line"></div>

                <p>
                    Meningkatnya pemerataan akses dan mutu
                    pelayanan kesehatan lanjutan.
                </p>
            </article>

            {{-- 2 --}}
            <article class="rsup-tugas-card">
                <div class="rsup-tugas-card-top">
                    <div class="rsup-tugas-icon blue">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <span class="rsup-tugas-number">02</span>
                </div>

                <h3>
                    Meningkatnya Kapabilitas Riset di RS
                </h3>

                <div class="rsup-tugas-line"></div>

                <p>
                    Meningkatnya kapabilitas riset di rumah sakit.
                </p>
            </article>

            {{-- 3 --}}
            <article class="rsup-tugas-card">
                <div class="rsup-tugas-card-top">
                    <div class="rsup-tugas-icon purple">
                        <i class="fas fa-dna"></i>
                    </div>
                    <span class="rsup-tugas-number">03</span>
                </div>

                <h3>
                    Meningkatnya Layanan Berbasis Kedokteran Presisi
                </h3>

                <div class="rsup-tugas-line"></div>

                <p>
                    Meningkatnya layanan berbasis kedokteran presisi.
                </p>
            </article>

            {{-- 4 --}}
            <article class="rsup-tugas-card">
                <div class="rsup-tugas-card-top">
                    <div class="rsup-tugas-icon orange">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <span class="rsup-tugas-number">04</span>
                </div>

                <h3>
                    Meningkatnya Tata Kelola Organisasi dan
                    Pengendalian Intern Kementerian Kesehatan
                </h3>

                <div class="rsup-tugas-line"></div>

                <p>
                    Meningkatnya tata kelola organisasi dan
                    pengendalian intern Kementerian Kesehatan.
                </p>
            </article>

            {{-- 5 --}}
            <article class="rsup-tugas-card">
                <div class="rsup-tugas-card-top">
                    <div class="rsup-tugas-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <span class="rsup-tugas-number">05</span>
                </div>

                <h3>
                    Meningkatnya Kecukupan Pendanaan Kesehatan
                    yang Berkeadilan dan Berkelanjutan
                </h3>

                <div class="rsup-tugas-line"></div>

                <p>
                    Meningkatnya kecukupan pendanaan kesehatan
                    yang berkeadilan dan berkelanjutan.
                </p>
            </article>

        </div>

        {{-- PENUTUP --}}
        <div class="rsup-tugas-footer">
            <div class="rsup-tugas-footer-icon">
                <i class="fas fa-heartbeat"></i>
            </div>

            <div>
                <h3>Komitmen Pelayanan Kesehatan</h3>
                <p>
                    Kelima fokus tersebut menjadi bagian dari arah
                    peningkatan pelayanan kesehatan, pengembangan
                    riset, serta penguatan tata kelola RSUP Surakarta.
                </p>
            </div>
        </div>

    </div>
</section>

<style>
/* HERO */
.rsup-tugas-hero {
    padding: 75px 0 65px;
    background: linear-gradient(
        135deg,
        #f3f8fc 0%,
        #ffffff 55%,
        #eef7f5 100%
    );
    border-bottom: 1px solid #edf1f5;
}

.rsup-tugas-badge {
    display: inline-flex;
    padding: 7px 14px;
    margin-bottom: 15px;
    border-radius: 30px;
    background: #e9f5f1;
    color: #17795d;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.2px;
}

.rsup-tugas-hero h1 {
    max-width: 850px;
    margin: 0 0 15px;
    color: #172033;
    font-size: clamp(32px, 4vw, 46px);
    line-height: 1.2;
    font-weight: 750;
}

.rsup-tugas-hero p {
    max-width: 750px;
    margin: 0;
    color: #667085;
    font-size: 16px;
    line-height: 1.8;
}

/* SECTION */
.rsup-tugas-section {
    padding: 70px 0 90px;
    background: #f8fafc;
}

.rsup-tugas-heading {
    max-width: 760px;
    margin-bottom: 35px;
}

.rsup-tugas-heading > span {
    display: block;
    margin-bottom: 7px;
    color: #17795d;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
}

.rsup-tugas-heading h2 {
    margin: 0 0 10px;
    color: #172033;
    font-size: 30px;
    line-height: 1.35;
    font-weight: 700;
}

.rsup-tugas-heading p {
    margin: 0;
    color: #667085;
    font-size: 14px;
    line-height: 1.8;
}

/* GRID */
.rsup-tugas-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 22px;
}

.rsup-tugas-card {
    min-width: 0;
    padding: 27px;
    background: #fff;
    border: 1px solid #e5eaf0;
    border-radius: 17px;
    box-shadow: 0 8px 28px rgba(24, 45, 67, .045);
    transition: transform .25s ease, box-shadow .25s ease;
}

.rsup-tugas-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 38px rgba(24, 45, 67, .09);
}

.rsup-tugas-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
}

.rsup-tugas-icon {
    width: 54px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    font-size: 21px;
}

.rsup-tugas-icon.green {
    background: #e9f5f1;
    color: #17795d;
}

.rsup-tugas-icon.blue {
    background: #eef5fc;
    color: #1769aa;
}

.rsup-tugas-icon.purple {
    background: #f4efff;
    color: #6941c6;
}

.rsup-tugas-icon.orange {
    background: #fff5e8;
    color: #d97706;
}

.rsup-tugas-icon.teal {
    background: #e6f7f7;
    color: #087e8b;
}

.rsup-tugas-number {
    color: #e7edf1;
    font-size: 34px;
    font-weight: 800;
    line-height: 1;
}

.rsup-tugas-card h3 {
    min-height: 75px;
    margin: 0;
    color: #1d2939;
    font-size: 17px;
    line-height: 1.55;
    font-weight: 700;
}

.rsup-tugas-line {
    width: 42px;
    height: 3px;
    margin: 19px 0 15px;
    border-radius: 5px;
    background: #17795d;
}

.rsup-tugas-card p {
    margin: 0;
    color: #667085;
    font-size: 13px;
    line-height: 1.8;
}

/* FOOTER */
.rsup-tugas-footer {
    display: flex;
    align-items: flex-start;
    gap: 18px;
    margin-top: 35px;
    padding: 27px 30px;
    border: 1px solid #dceee8;
    border-radius: 17px;
    background: #eef7f5;
}

.rsup-tugas-footer-icon {
    width: 48px;
    height: 48px;
    min-width: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    background: #17795d;
    color: #fff;
    font-size: 19px;
}

.rsup-tugas-footer h3 {
    margin: 0 0 7px;
    color: #17634f;
    font-size: 18px;
    font-weight: 700;
}

.rsup-tugas-footer p {
    margin: 0;
    color: #475467;
    font-size: 13px;
    line-height: 1.8;
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .rsup-tugas-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 768px) {
    .rsup-tugas-hero {
        padding: 55px 0;
    }

    .rsup-tugas-section {
        padding: 55px 0 70px;
    }

    .rsup-tugas-heading h2 {
        font-size: 26px;
    }

    .rsup-tugas-card {
        padding: 23px;
    }
}

@media (max-width: 576px) {
    .rsup-tugas-grid {
        grid-template-columns: 1fr;
    }

    .rsup-tugas-card h3 {
        min-height: 0;
    }

    .rsup-tugas-footer {
        flex-direction: column;
        padding: 22px;
    }
}
</style>

@endsection

