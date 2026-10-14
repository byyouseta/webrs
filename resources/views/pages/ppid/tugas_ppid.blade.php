@extends('layouts.app-web')

@section('title', 'Tugas dan Wewenang PPID | RSUP Surakarta')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="ppid-duty-hero">

    <div class="container-custom">

        <span class="ppid-duty-badge">
            PPID RSUP SURAKARTA
        </span>

        <h1>
            Tugas dan Wewenang PPID
        </h1>

        <p>
            Tugas dan tanggung jawab Pejabat Pengelola Informasi dan
            Dokumentasi (PPID) RSUP Surakarta dalam penyelenggaraan
            layanan informasi publik.
        </p>

    </div>

</section>


{{-- =========================================================
    CONTENT
========================================================= --}}
<section class="ppid-duty-section">

    <div class="container-custom">

        <div class="ppid-duty-wrapper">


            {{-- INTRO --}}
            <div class="ppid-duty-intro">

                <div class="ppid-duty-icon">

                    <i class="fas fa-tasks"></i>

                </div>

                <div>

                    <span>
                        TUGAS DAN WEWENANG
                    </span>

                    <h2>
                        PPID RSUP Surakarta
                    </h2>

                    <p>
                        Sesuai dengan Surat Keputusan Direktur Utama
                        RSUP Surakarta Nomor
                        <strong>HK.02.03/D.XXXI/3204/2024</strong>,
                        PPID RSUP Surakarta mempunyai tugas dan
                        tanggung jawab sebagai berikut:
                    </p>

                </div>

            </div>


            {{-- LIST TUGAS --}}
            <div class="ppid-duty-list">


                {{-- 01 --}}
                <div class="ppid-duty-item">

                    <div class="ppid-duty-number">
                        01
                    </div>

                    <div class="ppid-duty-content">

                        <h3>
                            Penyimpanan dan Pelayanan Informasi Publik
                        </h3>

                        <p>
                            Melaksanakan penyimpanan, pendokumentasian,
                            penyediaan dan pelayanan informasi publik
                            yang dihasilkan, disimpan, dikelola,
                            dikirim dan/atau diterima di lingkungan
                            RSUP Surakarta.
                        </p>

                    </div>

                </div>


                {{-- 02 --}}
                <div class="ppid-duty-item">

                    <div class="ppid-duty-number">
                        02
                    </div>

                    <div class="ppid-duty-content">

                        <h3>
                            Pelaksanaan Kewenangan Atasan PPID Pelaksana
                        </h3>

                        <p>
                            Melaksanakan kewenangan atasan PPID
                            pelaksana yang didelegasikan kepadanya.
                        </p>

                    </div>

                </div>


                {{-- 03 --}}
                <div class="ppid-duty-item">

                    <div class="ppid-duty-number">
                        03
                    </div>

                    <div class="ppid-duty-content">

                        <h3>
                            Kategori Informasi
                        </h3>

                        <p>
                            Melaksanakan kategori informasi di
                            lingkungan RSUP Surakarta.
                        </p>

                    </div>

                </div>


                {{-- 04 --}}
                <div class="ppid-duty-item">

                    <div class="ppid-duty-number">
                        04
                    </div>

                    <div class="ppid-duty-content">

                        <h3>
                            Informasi yang Dikecualikan
                        </h3>

                        <p>
                            Menyampaikan informasi kategori yang
                            dikecualikan kepada atasan PPID pelaksana.
                        </p>

                    </div>

                </div>


                {{-- 05 --}}
                <div class="ppid-duty-item">

                    <div class="ppid-duty-number">
                        05
                    </div>

                    <div class="ppid-duty-content">

                        <h3>
                            Pelayanan Informasi Publik
                        </h3>

                        <p>
                            Melaksanakan pelayanan informasi Publik.
                        </p>

                    </div>

                </div>


            </div>


            {{-- FOOTER INFO --}}
            <div class="ppid-duty-note">

                <div class="ppid-duty-note-icon">

                    <i class="fas fa-info-circle"></i>

                </div>

                <div>

                    <strong>
                        Dasar Pelaksanaan
                    </strong>

                    <p>
                        Surat Keputusan Direktur Utama RSUP Surakarta
                        Nomor HK.02.03/D.XXXI/3204/2024.
                    </p>

                </div>

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

.ppid-duty-hero {

    padding: 75px 0 65px;

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


.ppid-duty-badge {

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


.ppid-duty-hero h1 {

    margin: 0 0 14px;

    color: #172033;

    font-size: clamp(32px, 4vw, 46px);

    font-weight: 750;

}


.ppid-duty-hero p {

    max-width: 700px;

    margin: 0;

    color: #667085;

    font-size: 16px;

    line-height: 1.8;

}


/* =========================================================
   SECTION
========================================================= */

.ppid-duty-section {

    padding: 70px 0 90px;

    background: #f8fafc;

}


.ppid-duty-wrapper {

    max-width: 950px;

    margin: 0 auto;

}


/* =========================================================
   INTRO
========================================================= */

.ppid-duty-intro {

    display: flex;

    align-items: flex-start;

    gap: 22px;

    padding: 30px;

    margin-bottom: 30px;

    background: #ffffff;

    border:
        1px solid #e5eaf0;

    border-radius: 18px;

    box-shadow:
        0 10px 35px rgba(24, 45, 67, .05);

}


.ppid-duty-icon {

    width: 58px;

    height: 58px;

    flex: 0 0 58px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 15px;

    background: #eef5ff;

    color: #1769aa;

    font-size: 22px;

}


.ppid-duty-intro span {

    display: block;

    margin-bottom: 5px;

    color: #1769aa;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

}


.ppid-duty-intro h2 {

    margin: 0 0 12px;

    color: #172033;

    font-size: 27px;

    font-weight: 700;

}


.ppid-duty-intro p {

    margin: 0;

    color: #667085;

    font-size: 14px;

    line-height: 1.8;

}


.ppid-duty-intro strong {

    color: #344054;

}


/* =========================================================
   LIST
========================================================= */

.ppid-duty-list {

    display: flex;

    flex-direction: column;

    gap: 16px;

}


/* =========================================================
   ITEM
========================================================= */

.ppid-duty-item {

    display: flex;

    align-items: flex-start;

    gap: 20px;

    padding: 25px 28px;

    background: #ffffff;

    border:
        1px solid #e5eaf0;

    border-radius: 15px;

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        border-color .25s ease;

}


.ppid-duty-item:hover {

    transform:
        translateX(5px);

    border-color:
        #d4e5df;

    box-shadow:
        0 12px 30px rgba(24, 45, 67, .07);

}


/* NUMBER */

.ppid-duty-number {

    width: 46px;

    height: 46px;

    flex: 0 0 46px;

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

.ppid-duty-content {

    padding-top: 2px;

}


.ppid-duty-content h3 {

    margin: 0 0 7px;

    color: #1d2939;

    font-size: 16px;

    font-weight: 700;

}


.ppid-duty-content p {

    margin: 0;

    color: #667085;

    font-size: 14px;

    line-height: 1.75;

}


/* =========================================================
   NOTE
========================================================= */

.ppid-duty-note {

    display: flex;

    align-items: center;

    gap: 15px;

    margin-top: 25px;

    padding: 20px 23px;

    background: #eef7f5;

    border:
        1px solid #dceee8;

    border-radius: 13px;

}


.ppid-duty-note-icon {

    width: 42px;

    height: 42px;

    flex: 0 0 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 10px;

    background: #ffffff;

    color: #17795d;

}


.ppid-duty-note strong {

    display: block;

    margin-bottom: 3px;

    color: #175c4b;

    font-size: 14px;

}


.ppid-duty-note p {

    margin: 0;

    color: #5f716c;

    font-size: 13px;

    line-height: 1.6;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 768px) {

    .ppid-duty-hero {

        padding: 55px 0;

    }


    .ppid-duty-section {

        padding: 55px 0 70px;

    }


    .ppid-duty-intro {

        padding: 25px;

    }

}


@media (max-width: 576px) {

    .ppid-duty-intro {

        flex-direction: column;

        gap: 17px;

        padding: 22px;

    }


    .ppid-duty-icon {

        width: 50px;

        height: 50px;

        flex-basis: 50px;

    }


    .ppid-duty-intro h2 {

        font-size: 23px;

    }


    .ppid-duty-item {

        gap: 14px;

        padding: 21px;

    }


    .ppid-duty-number {

        width: 40px;

        height: 40px;

        flex-basis: 40px;

    }


    .ppid-duty-content h3 {

        font-size: 15px;

    }


    .ppid-duty-content p {

        font-size: 13px;

    }


    .ppid-duty-note {

        align-items: flex-start;

        padding: 18px;

    }

}

</style>

@endsection
