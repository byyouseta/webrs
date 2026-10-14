@extends('layouts.app-web')

@section('title', 'Maklumat Pelayanan PPID | RSUP Surakarta')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="ppid-maklumat-hero">

    <div class="container-custom">

        <span class="ppid-maklumat-badge">
            PPID RSUP SURAKARTA
        </span>

        <h1>
            Maklumat Pelayanan PPID
        </h1>

        <p>
            Maklumat Pelayanan Pejabat Pengelola Informasi dan
            Dokumentasi (PPID) RSUP Surakarta sebagai bentuk
            komitmen dalam memberikan pelayanan informasi publik.
        </p>

    </div>

</section>


{{-- =========================================================
    POSTER
========================================================= --}}
<section class="ppid-maklumat-section">

    <div class="container-custom">

        <div class="ppid-maklumat-header">

            <div>

                <span>
                    MAKLUMAT PELAYANAN
                </span>

                <h2>
                    Maklumat Pelayanan PPID
                </h2>

            </div>


            <div class="ppid-maklumat-actions">

                <a
                    href="{{ asset('storage/ppid/maklumat-pelayanan-ppid-new.jpeg') }}"
                    target="_blank"
                    rel="noopener"
                    class="btn-maklumat-outline"
                >
                    <i class="fas fa-expand"></i>
                    Lihat Ukuran Penuh
                </a>

                <a
                    href="{{ asset('storage/ppid/maklumat-pelayanan-ppid-new.jpeg') }}"
                    download="maklumat-pelayanan-ppid.jpeg"
                    class="btn-maklumat-primary"
                >
                    <i class="fas fa-download"></i>
                    Unduh Poster
                </a>

            </div>

        </div>


        {{-- POSTER CARD --}}
        <div class="ppid-maklumat-card">

            <img
                src="{{ asset('storage/ppid/maklumat-pelayanan-ppid-new.jpeg') }}"
                alt="Maklumat Pelayanan PPID RSUP Surakarta"
                class="ppid-maklumat-image"
            >

        </div>


        {{-- INFO --}}
        <div class="ppid-maklumat-caption">

            <i class="fas fa-info-circle"></i>

            <span>
                Maklumat Pelayanan Pejabat Pengelola Informasi dan
                Dokumentasi (PPID) RSUP Surakarta.
            </span>

        </div>

    </div>

</section>



<style>

/* =========================================================
   HERO
========================================================= */

.ppid-maklumat-hero {

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


.ppid-maklumat-badge {

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


.ppid-maklumat-hero h1 {

    margin: 0 0 14px;

    color: #172033;

    font-size: clamp(32px, 4vw, 46px);

    font-weight: 750;

}


.ppid-maklumat-hero p {

    max-width: 720px;

    margin: 0;

    color: #667085;

    font-size: 16px;

    line-height: 1.8;

}


/* =========================================================
   SECTION
========================================================= */

.ppid-maklumat-section {

    padding: 65px 0 90px;

    background: #f8fafc;

}


/* =========================================================
   HEADER
========================================================= */

.ppid-maklumat-header {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 25px;

    margin-bottom: 30px;

}


.ppid-maklumat-header > div:first-child span {

    color: #17795d;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

}


.ppid-maklumat-header h2 {

    margin: 7px 0 0;

    color: #172033;

    font-size: 28px;

    font-weight: 700;

}


/* =========================================================
   BUTTON
========================================================= */

.ppid-maklumat-actions {

    display: flex;

    gap: 10px;

    flex-wrap: wrap;

}


.btn-maklumat-primary,
.btn-maklumat-outline {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    padding: 10px 16px;

    border-radius: 8px;

    font-size: 13px;

    font-weight: 600;

    text-decoration: none !important;

    transition: all .25s ease;

}


.btn-maklumat-primary {

    background: #17795d;

    color: #fff !important;

}


.btn-maklumat-primary:hover {

    background: #12634d;

    color: #fff !important;

    transform: translateY(-2px);

    box-shadow:
        0 7px 18px rgba(23, 121, 93, .20);

}


.btn-maklumat-outline {

    background: #fff;

    color: #17795d;

    border: 1px solid #d8e7e2;

}


.btn-maklumat-outline:hover {

    background: #edf7f4;

    color: #17795d;

    transform: translateY(-2px);

}


/* =========================================================
   POSTER CARD
========================================================= */

.ppid-maklumat-card {

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 25px;

    background: #fff;

    border: 1px solid #e5eaf0;

    border-radius: 18px;

    box-shadow:
        0 15px 45px rgba(24, 45, 67, .08);

    overflow: hidden;

}


/* IMAGE */

.ppid-maklumat-image {

    display: block;

    width: auto;

    max-width: 100%;

    height: auto;

    border-radius: 8px;

}


/* =========================================================
   CAPTION
========================================================= */

.ppid-maklumat-caption {

    display: flex;

    align-items: center;

    gap: 9px;

    margin-top: 15px;

    padding: 13px 17px;

    background: #eef7f5;

    border: 1px solid #dceee8;

    border-radius: 10px;

    color: #5d706a;

    font-size: 13px;

}


.ppid-maklumat-caption i {

    color: #17795d;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 768px) {

    .ppid-maklumat-hero {

        padding: 55px 0;

    }


    .ppid-maklumat-header {

        align-items: flex-start;

        flex-direction: column;

    }


    .ppid-maklumat-actions {

        width: 100%;

    }


    .btn-maklumat-primary,
    .btn-maklumat-outline {

        flex: 1;

    }


    .ppid-maklumat-card {

        padding: 12px;

        border-radius: 14px;

    }

}


@media (max-width: 576px) {

    .ppid-maklumat-header h2 {

        font-size: 24px;

    }


    .ppid-maklumat-actions {

        flex-direction: column;

    }


    .btn-maklumat-primary,
    .btn-maklumat-outline {

        width: 100%;

    }


    .ppid-maklumat-card {

        padding: 8px;

    }


    .ppid-maklumat-caption {

        align-items: flex-start;

    }

}

</style>

@endsection
