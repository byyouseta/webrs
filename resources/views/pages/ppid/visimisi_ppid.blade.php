@extends('layouts.app-web')

@section('title', 'Visi dan Misi PPID | RSUP Surakarta')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="ppid-hero">

    <div class="container-custom">

        <span class="ppid-badge">
            PPID RSUP SURAKARTA
        </span>

        <h1>
            Visi & Misi PPID
        </h1>

        <p>
            Arah dan komitmen RSUP Surakarta dalam mewujudkan
            layanan informasi publik yang terbuka, profesional,
            transparan, dan akuntabel.
        </p>

    </div>

</section>


{{-- =========================================================
    VISI
========================================================= --}}
<section class="ppid-visi-section">

    <div class="container-custom">

        <div class="ppid-visi-card">

            <div class="ppid-visi-icon">
                <i class="fas fa-eye"></i>
            </div>

            <div class="ppid-visi-content">

                <span class="ppid-section-label">
                    VISI
                </span>

                <h2>
                    Terwujudnya layanan informasi publik yang
                    profesional, transparan dan akuntabel
                </h2>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    PENJABARAN VISI
========================================================= --}}
<section class="ppid-penjabaran-section">

    <div class="container-custom">

        <div class="ppid-section-heading">

            <span>
                PENJABARAN VISI
            </span>

            <h2>
                Komitmen Layanan Informasi Publik
            </h2>

            <p>
                Penjabaran visi PPID RSUP Surakarta sebagai landasan
                dalam memberikan layanan informasi publik kepada masyarakat.
            </p>

        </div>


        <div class="ppid-visi-grid">


            {{-- 01 --}}
            <div class="ppid-visi-item">

                <div class="ppid-number">
                    01
                </div>

                <div class="ppid-item-content">

                    <h3>
                        Layanan Informasi Publik
                    </h3>

                    <p>
                        Suatu usaha untuk memberikan informasi publik
                        sesuai Undang-Undang No. 14 Tahun 2008 tentang
                        Keterbukaan Informasi Publik di lingkungan
                        RSUP Surakarta.
                    </p>

                </div>

            </div>


            {{-- 02 --}}
            <div class="ppid-visi-item">

                <div class="ppid-number">
                    02
                </div>

                <div class="ppid-item-content">

                    <h3>
                        Profesional
                    </h3>

                    <p>
                        Memiliki komitmen untuk senantiasa meningkatkan
                        layanan informasi publik.
                    </p>

                </div>

            </div>


            {{-- 03 --}}
            <div class="ppid-visi-item">

                <div class="ppid-number">
                    03
                </div>

                <div class="ppid-item-content">

                    <h3>
                        Transparan
                    </h3>

                    <p>
                        Memberikan akses seluas-luasnya kepada masyarakat
                        dalam memperoleh informasi publik dengan cepat
                        dan tepat waktu, biaya ringan, dan cara yang sederhana.
                    </p>

                </div>

            </div>


            {{-- 04 --}}
            <div class="ppid-visi-item">

                <div class="ppid-number">
                    04
                </div>

                <div class="ppid-item-content">

                    <h3>
                        Akuntabel
                    </h3>

                    <p>
                        Pengelolaan informasi dan dokumentasi dilakukan
                        dengan prinsip <em>good governance</em>
                        (tata kelola pemerintahan yang baik).
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    MISI
========================================================= --}}
<section class="ppid-misi-section">

    <div class="container-custom">

        <div class="ppid-misi-wrapper">

            <div class="ppid-misi-heading">

                <div class="ppid-misi-icon">
                    <i class="fas fa-bullseye"></i>
                </div>

                <div>

                    <span>
                        MISI
                    </span>

                    <h2>
                        Misi PPID RSUP Surakarta
                    </h2>

                </div>

            </div>


            <div class="ppid-misi-list">


                {{-- MISI 01 --}}
                <div class="ppid-misi-item">

                    <div class="ppid-misi-number">
                        01
                    </div>

                    <div>

                        <h3>
                            Pelayanan Informasi yang Cepat
                        </h3>

                        <p>
                            Menyediakan Pelayanan Informasi publik
                            secara cepat, mudah, dan wajar sesuai
                            petunjuk teknis standard pelayanan
                            informasi publik.
                        </p>

                    </div>

                </div>


                {{-- MISI 02 --}}
                <div class="ppid-misi-item">

                    <div class="ppid-misi-number">
                        02
                    </div>

                    <div>

                        <h3>
                            Sumber Daya dan Infrastruktur
                        </h3>

                        <p>
                            Menyediakan sumberdaya manusia dan
                            infrastruktur pelayanan informasi
                            yang memadai.
                        </p>

                    </div>

                </div>


                {{-- MISI 03 --}}
                <div class="ppid-misi-item">

                    <div class="ppid-misi-number">
                        03
                    </div>

                    <div>

                        <h3>
                            Pelayanan yang Santun dan Bertanggung Jawab
                        </h3>

                        <p>
                            Senantiasa melayani pemohon informasi
                            secara santun, transparan dan
                            bertanggung jawab.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    PENUTUP
========================================================= --}}
<section class="ppid-closing">

    <div class="container-custom">

        <div class="ppid-closing-card">

            <div class="ppid-closing-icon">
                <i class="fas fa-info-circle"></i>
            </div>

            <div>

                <h3>
                    Keterbukaan Informasi Publik
                </h3>

                <p>
                    RSUP Surakarta berkomitmen memberikan akses
                    informasi publik secara profesional, transparan,
                    dan akuntabel sesuai dengan ketentuan yang berlaku.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
    CSS
========================================================= --}}
<style>

/* =========================================================
   HERO
========================================================= */

.ppid-hero {

    padding: 85px 0 75px;

    background:
        linear-gradient(
            135deg,
            #f3f8fc 0%,
            #ffffff 55%,
            #eef7f5 100%
        );

    border-bottom:
        1px solid #edf1f5;

}


.ppid-badge {

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


.ppid-hero h1 {

    margin: 0 0 15px;

    color: #172033;

    font-size: clamp(32px, 4vw, 48px);

    font-weight: 750;

}


.ppid-hero p {

    max-width: 700px;

    margin: 0;

    color: #667085;

    font-size: 16px;

    line-height: 1.8;

}


/* =========================================================
   VISI
========================================================= */

.ppid-visi-section {

    padding: 70px 0 30px;

}


.ppid-visi-card {

    display: flex;

    align-items: center;

    gap: 28px;

    padding: 35px 40px;

    background: #ffffff;

    border-radius: 20px;

    border:
        1px solid #e8edf2;

    box-shadow:
        0 15px 45px rgba(24, 45, 67, .07);

}


.ppid-visi-icon {

    width: 70px;

    height: 70px;

    flex: 0 0 70px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 18px;

    background: #eaf5f2;

    color: #17795d;

    font-size: 27px;

}


.ppid-section-label {

    display: block;

    margin-bottom: 8px;

    color: #17795d;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

}


.ppid-visi-content h2 {

    max-width: 850px;

    margin: 0;

    color: #172033;

    font-size: clamp(22px, 3vw, 32px);

    line-height: 1.45;

    font-weight: 700;

}


/* =========================================================
   PENJABARAN
========================================================= */

.ppid-penjabaran-section {

    padding: 60px 0 80px;

    background: #f8fafc;

}


.ppid-section-heading {

    max-width: 700px;

    margin-bottom: 40px;

}


.ppid-section-heading > span {

    color: #17795d;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

}


.ppid-section-heading h2 {

    margin: 8px 0 12px;

    color: #172033;

    font-size: 30px;

    font-weight: 700;

}


.ppid-section-heading p {

    margin: 0;

    color: #667085;

    line-height: 1.7;

}


/* GRID */

.ppid-visi-grid {

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 20px;

}


/* ITEM */

.ppid-visi-item {

    display: flex;

    gap: 20px;

    padding: 28px;

    background: #ffffff;

    border:
        1px solid #e8edf2;

    border-radius: 16px;

    transition:
        transform .25s ease,
        box-shadow .25s ease;

}


.ppid-visi-item:hover {

    transform:
        translateY(-4px);

    box-shadow:
        0 15px 35px rgba(24, 45, 67, .08);

}


/* NUMBER */

.ppid-number {

    width: 45px;

    height: 45px;

    flex: 0 0 45px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    background: #edf7f4;

    color: #17795d;

    font-size: 12px;

    font-weight: 800;

}


/* CONTENT */

.ppid-item-content h3 {

    margin: 2px 0 8px;

    color: #1d2939;

    font-size: 17px;

    font-weight: 700;

}


.ppid-item-content p {

    margin: 0;

    color: #667085;

    font-size: 14px;

    line-height: 1.75;

}


/* =========================================================
   MISI
========================================================= */

.ppid-misi-section {

    padding: 80px 0;

}


.ppid-misi-wrapper {

    max-width: 950px;

    margin: auto;

}


.ppid-misi-heading {

    display: flex;

    align-items: center;

    gap: 18px;

    margin-bottom: 40px;

}


.ppid-misi-icon {

    width: 60px;

    height: 60px;

    flex: 0 0 60px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 16px;

    background: #eef5ff;

    color: #1769aa;

    font-size: 23px;

}


.ppid-misi-heading span {

    display: block;

    color: #1769aa;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

}


.ppid-misi-heading h2 {

    margin: 4px 0 0;

    color: #172033;

    font-size: 30px;

    font-weight: 700;

}


/* LIST */

.ppid-misi-list {

    display: flex;

    flex-direction: column;

    gap: 18px;

}


/* ITEM */

.ppid-misi-item {

    display: flex;

    align-items: flex-start;

    gap: 22px;

    padding: 25px 28px;

    border:
        1px solid #e8edf2;

    border-radius: 15px;

    background: #ffffff;

    transition:
        transform .25s ease,
        box-shadow .25s ease;

}


.ppid-misi-item:hover {

    transform:
        translateX(5px);

    box-shadow:
        0 12px 30px rgba(24, 45, 67, .07);

}


.ppid-misi-number {

    width: 42px;

    height: 42px;

    flex: 0 0 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #eef5ff;

    color: #1769aa;

    font-size: 12px;

    font-weight: 800;

}


.ppid-misi-item h3 {

    margin: 2px 0 7px;

    color: #1d2939;

    font-size: 16px;

    font-weight: 700;

}


.ppid-misi-item p {

    margin: 0;

    color: #667085;

    font-size: 14px;

    line-height: 1.75;

}


/* =========================================================
   CLOSING
========================================================= */

.ppid-closing {

    padding: 0 0 80px;

}


.ppid-closing-card {

    display: flex;

    align-items: center;

    gap: 20px;

    padding: 25px 30px;

    border-radius: 16px;

    background: #f0f7f5;

    border:
        1px solid #dceee8;

}


.ppid-closing-icon {

    width: 45px;

    height: 45px;

    flex: 0 0 45px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    background: #ffffff;

    color: #17795d;

    font-size: 19px;

}


.ppid-closing-card h3 {

    margin: 0 0 5px;

    color: #175c4b;

    font-size: 16px;

    font-weight: 700;

}


.ppid-closing-card p {

    margin: 0;

    color: #5f716c;

    font-size: 13px;

    line-height: 1.7;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 768px) {

    .ppid-hero {

        padding: 60px 0;

    }


    .ppid-visi-card {

        align-items: flex-start;

        padding: 28px;

    }


    .ppid-visi-grid {

        grid-template-columns: 1fr;

    }


    .ppid-misi-section {

        padding: 60px 0;

    }

}


@media (max-width: 576px) {

    .ppid-visi-card {

        flex-direction: column;

        gap: 18px;

    }


    .ppid-visi-icon {

        width: 58px;

        height: 58px;

        flex-basis: 58px;

    }


    .ppid-section-heading h2,
    .ppid-misi-heading h2 {

        font-size: 25px;

    }


    .ppid-visi-item {

        padding: 22px;

    }


    .ppid-misi-item {

        gap: 15px;

        padding: 22px;

    }


    .ppid-closing-card {

        align-items: flex-start;

        padding: 22px;

    }

}

</style>

@endsection
