@extends('layouts.app-web')

@section('title', 'Struktur Organisasi PPID | RSUP Surakarta')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="ppid-structure-hero">

    <div class="container-custom">

        <span class="ppid-structure-badge">
            PPID RSUP SURAKARTA
        </span>

        <h1>
            Struktur Organisasi PPID
        </h1>

        <p>
            Struktur organisasi Pejabat Pengelola Informasi dan
            Dokumentasi (PPID) RSUP Surakarta.
        </p>

    </div>

</section>


{{-- =========================================================
    POSTER
========================================================= --}}
<section class="ppid-structure-section">

    <div class="container-custom">

        <div class="ppid-structure-header">

            <div>

                <span>
                    STRUKTUR ORGANISASI
                </span>

                <h2>
                    Struktur Organisasi PPID
                </h2>

            </div>

            <div class="ppid-structure-actions">

                <a
                    href="{{ asset('storage/ppid/struktur-organisasi-ppid.png') }}"
                    target="_blank"
                    rel="noopener"
                    class="btn-ppid-outline"
                >
                    <i class="fas fa-expand"></i>
                    Lihat Ukuran Penuh
                </a>

                <a
                    href="{{ asset('storage/ppid/struktur-organisasi-ppid.png') }}"
                    download="struktur-organisasi-ppid.png"
                    class="btn-ppid-primary"
                >
                    <i class="fas fa-download"></i>
                    Unduh Poster
                </a>

            </div>

        </div>


        {{-- POSTER CARD --}}
        <div class="ppid-poster-card">

            <img
                src="{{ asset('storage/ppid/struktur-organisasi-ppid.png') }}"
                alt="Struktur Organisasi PPID RSUP Surakarta"
                class="ppid-poster-image"
            >

        </div>


        <div class="ppid-poster-caption">

            <i class="fas fa-info-circle"></i>

            <span>
                Struktur Organisasi Pejabat Pengelola Informasi dan
                Dokumentasi (PPID) RSUP Surakarta.
            </span>

        </div>

    </div>

</section>



<style>

/* =========================================================
   HERO
========================================================= */

.ppid-structure-hero {

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


.ppid-structure-badge {

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


.ppid-structure-hero h1 {

    margin: 0 0 14px;

    color: #172033;

    font-size: clamp(32px, 4vw, 46px);

    font-weight: 750;

}


.ppid-structure-hero p {

    max-width: 700px;

    margin: 0;

    color: #667085;

    font-size: 16px;

    line-height: 1.8;

}


/* =========================================================
   SECTION
========================================================= */

.ppid-structure-section {

    padding: 65px 0 90px;

    background: #f8fafc;

}


/* =========================================================
   HEADER
========================================================= */

.ppid-structure-header {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 25px;

    margin-bottom: 30px;

}


.ppid-structure-header > div:first-child span {

    color: #17795d;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

}


.ppid-structure-header h2 {

    margin: 7px 0 0;

    color: #172033;

    font-size: 28px;

    font-weight: 700;

}


/* =========================================================
   BUTTON
========================================================= */

.ppid-structure-actions {

    display: flex;

    gap: 10px;

    flex-wrap: wrap;

}


.btn-ppid-primary,
.btn-ppid-outline {

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


.btn-ppid-primary {

    background: #17795d;

    color: #fff !important;

}


.btn-ppid-primary:hover {

    background: #12634d;

    color: #fff !important;

    transform: translateY(-2px);

    box-shadow:
        0 7px 18px rgba(23, 121, 93, .20);

}


.btn-ppid-outline {

    background: #fff;

    color: #17795d;

    border: 1px solid #d8e7e2;

}


.btn-ppid-outline:hover {

    background: #edf7f4;

    color: #17795d;

    transform: translateY(-2px);

}


/* =========================================================
   POSTER
========================================================= */

.ppid-poster-card {

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


.ppid-poster-image {

    display: block;

    width: auto;

    max-width: 100%;

    height: auto;

    max-height: none;

    border-radius: 8px;

}


/* =========================================================
   CAPTION
========================================================= */

.ppid-poster-caption {

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


.ppid-poster-caption i {

    color: #17795d;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 768px) {

    .ppid-structure-hero {

        padding: 55px 0;

    }


    .ppid-structure-header {

        align-items: flex-start;

        flex-direction: column;

    }


    .ppid-structure-actions {

        width: 100%;

    }


    .btn-ppid-primary,
    .btn-ppid-outline {

        flex: 1;

    }


    .ppid-poster-card {

        padding: 12px;

        border-radius: 14px;

    }

}


@media (max-width: 576px) {

    .ppid-structure-header h2 {

        font-size: 24px;

    }


    .ppid-structure-actions {

        flex-direction: column;

    }


    .btn-ppid-primary,
    .btn-ppid-outline {

        width: 100%;

    }


    .ppid-poster-card {

        padding: 8px;

    }


    .ppid-poster-caption {

        align-items: flex-start;

    }

}

</style>

@endsection
