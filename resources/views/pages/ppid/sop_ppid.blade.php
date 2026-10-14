@extends('layouts.app-web')

@section('title', 'Kebijakan / Keputusan PPID | RSUP Surakarta')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="ppid-sop-hero">

    <div class="container-custom">

        <span class="ppid-sop-badge">
            PPID RSUP SURAKARTA
        </span>

        <h1>
            Kebijakan / Keputusan
        </h1>

        <p>
            Penyelenggaraan layanan informasi publik PPID RSUP Surakarta.
        </p>

    </div>

</section>


{{-- =========================================================
    DAFTAR SOP
========================================================= --}}
<section class="ppid-sop-section">

    <div class="container-custom">

        {{-- HEADING --}}
        <div class="ppid-sop-heading">

            <span>
                DOKUMEN PPID
            </span>

            <h2>
                Standar Operasional Prosedur
            </h2>

            <p>
                Berikut merupakan dokumen Standar Operasional Prosedur
                PPID RSUP Surakarta yang dapat dilihat dan diunduh.
            </p>

        </div>


        {{-- =================================================
            SOP LIST
        ================================================= --}}
        <div class="ppid-sop-list">


            {{-- =================================================
                SOP 01
            ================================================= --}}
            <div class="ppid-sop-card">

                {{-- PDF PREVIEW --}}
                <div class="ppid-sop-preview">

                    <iframe
                        src="{{ asset('storage/sop_ppid/sop-pelayanan-informasi-publik.pdf') }}"
                        title="Preview SOP Pelayanan Informasi Publik"
                        loading="lazy"
                    ></iframe>

                    {{-- FLOATING BUTTON --}}
                    <div class="ppid-sop-preview-button">

                        <a
                            href="{{ asset('storage/sop_ppid/sop-pelayanan-informasi-publik.pdf') }}"
                            target="_blank"
                            rel="noopener"
                        >
                            <i class="fas fa-expand"></i>
                            Buka PDF
                        </a>

                    </div>

                </div>


                {{-- DOCUMENT INFO --}}
                <div class="ppid-sop-content">

                    <div class="ppid-sop-document-icon">

                        <i class="fas fa-file-pdf"></i>

                    </div>

                    <div class="ppid-sop-document-info">

                        <span class="ppid-sop-label">
                            STANDAR OPERASIONAL PROSEDUR
                        </span>

                        <h3>
                            SOP Pelayanan Informasi Publik
                        </h3>

                        <p>
                            Standar Operasional Prosedur pelayanan
                            informasi publik pada PPID RSUP Surakarta.
                        </p>

                    </div>

                </div>


                {{-- ACTION --}}
                <div class="ppid-sop-footer">

                    <a
                        href="{{ asset('storage/sop_ppid/sop-pelayanan-informasi-publik.pdf') }}"
                        target="_blank"
                        rel="noopener"
                        class="btn-sop-view"
                    >
                        <i class="fas fa-file-pdf"></i>
                        Buka PDF
                    </a>

                    <a
                        href="{{ asset('storage/sop_ppid/sop-pelayanan-informasi-publik.pdf') }}"
                        download
                        class="btn-sop-download"
                    >
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>

                </div>

            </div>



             {{-- =================================================
                SOP 02
            ================================================= --}}
            <div class="ppid-sop-card">

                {{-- PDF PREVIEW --}}
                <div class="ppid-sop-preview">

                    <iframe
                        src="{{ asset('storage/sop_ppid/20250708144956SK-KEBIJAKAN-INVESTASI-RSUP-SURAKARTA.pdf') }}"
                        title="Preview Kebijakan"
                        loading="lazy"
                    ></iframe>

                    {{-- FLOATING BUTTON --}}
                    <div class="ppid-sop-preview-button">

                        <a
                            href="{{ asset('storage/sop_ppid/20250708144956SK-KEBIJAKAN-INVESTASI-RSUP-SURAKARTA.pdf') }}"
                            target="_blank"
                            rel="noopener"
                        >
                            <i class="fas fa-expand"></i>
                            Buka PDF
                        </a>

                    </div>

                </div>


                {{-- DOCUMENT INFO --}}
                <div class="ppid-sop-content">

                    <div class="ppid-sop-document-icon">

                        <i class="fas fa-file-pdf"></i>

                    </div>

                    <div class="ppid-sop-document-info">

                        <span class="ppid-sop-label">
                            Kebijakan Investasi RSUP Surakarta
                        </span>

                        <h3>
                            Kebijakan
                        </h3>

                        <p>
                            Kebijakan Investasi RSUP Surakarta
                        </p>

                    </div>

                </div>


                {{-- ACTION --}}
                <div class="ppid-sop-footer">

                    <a
                        href="{{ asset('storage/sop_ppid/20250708144956SK-KEBIJAKAN-INVESTASI-RSUP-SURAKARTA.pdf') }}"
                        target="_blank"
                        rel="noopener"
                        class="btn-sop-view"
                    >
                        <i class="fas fa-file-pdf"></i>
                        Buka PDF
                    </a>

                    <a
                        href="{{ asset('storage/sop_ppid/20250708144956SK-KEBIJAKAN-INVESTASI-RSUP-SURAKARTA.pdf') }}"
                        download
                        class="btn-sop-download"
                    >
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>

                </div>

            </div>



            {{-- =================================================
                SOP 03
            ================================================= --}}
            <div class="ppid-sop-card">

                {{-- PDF PREVIEW --}}
                <div class="ppid-sop-preview">

                    <iframe
                        src="{{ asset('storage/sop_ppid/INFORMASI-YANG-DIKECUALIKAN-KEMENKES.pdf') }}"
                        title="Preview Kebijakan"
                        loading="lazy"
                    ></iframe>

                    {{-- FLOATING BUTTON --}}
                    <div class="ppid-sop-preview-button">

                        <a
                            href="{{ asset('storage/sop_ppid/INFORMASI-YANG-DIKECUALIKAN-KEMENKES.pdf') }}"
                            target="_blank"
                            rel="noopener"
                        >
                            <i class="fas fa-expand"></i>
                            Buka PDF
                        </a>

                    </div>

                </div>


                {{-- DOCUMENT INFO --}}
                <div class="ppid-sop-content">

                    <div class="ppid-sop-document-icon">

                        <i class="fas fa-file-pdf"></i>

                    </div>

                    <div class="ppid-sop-document-info">

                        <span class="ppid-sop-label">
                            Informasi yang dikecualikan
                        </span>

                        <h3>
                            Kebijakan
                        </h3>

                        <p>
                            Informasi yang dikecualikan
                        </p>

                    </div>

                </div>


                {{-- ACTION --}}
                <div class="ppid-sop-footer">

                    <a
                        href="{{ asset('storage/sop_ppid/INFORMASI-YANG-DIKECUALIKAN-KEMENKES.pdf') }}"
                        target="_blank"
                        rel="noopener"
                        class="btn-sop-view"
                    >
                        <i class="fas fa-file-pdf"></i>
                        Buka PDF
                    </a>

                    <a
                        href="{{ asset('storage/sop_ppid/INFORMASI-YANG-DIKECUALIKAN-KEMENKES.pdf') }}"
                        download
                        class="btn-sop-download"
                    >
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>

                </div>

            </div>


            {{-- =================================================
                SOP 04
            ================================================= --}}
            <div class="ppid-sop-card">

                {{-- PDF PREVIEW --}}
                <div class="ppid-sop-preview">

                    <iframe
                        src="{{ asset('storage/sop_ppid/SK-Kebijakan-Ambulans.pdf') }}"
                        title="Preview Kebijakan"
                        loading="lazy"
                    ></iframe>

                    {{-- FLOATING BUTTON --}}
                    <div class="ppid-sop-preview-button">

                        <a
                            href="{{ asset('storage/sop_ppid/SK-Kebijakan-Ambulans.pdf') }}"
                            target="_blank"
                            rel="noopener"
                        >
                            <i class="fas fa-expand"></i>
                            Buka PDF
                        </a>

                    </div>

                </div>


                {{-- DOCUMENT INFO --}}
                <div class="ppid-sop-content">

                    <div class="ppid-sop-document-icon">

                        <i class="fas fa-file-pdf"></i>

                    </div>

                    <div class="ppid-sop-document-info">

                        <span class="ppid-sop-label">
                            Kebijakan Ambulans
                        </span>

                        <h3>
                            Kebijakan
                        </h3>

                        <p>
                            Kebijakan Ambulans
                        </p>

                    </div>

                </div>


                {{-- ACTION --}}
                <div class="ppid-sop-footer">

                    <a
                        href="{{ asset('storage/sop_ppid/SK-Kebijakan-Ambulans.pdf') }}"
                        target="_blank"
                        rel="noopener"
                        class="btn-sop-view"
                    >
                        <i class="fas fa-file-pdf"></i>
                        Buka PDF
                    </a>

                    <a
                        href="{{ asset('storage/sop_ppid/SK-Kebijakan-Ambulans.pdf') }}"
                        download
                        class="btn-sop-download"
                    >
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>

                </div>

            </div>


             {{-- =================================================
                SOP 05
            ================================================= --}}
            <div class="ppid-sop-card">

                {{-- PDF PREVIEW --}}
                <div class="ppid-sop-preview">

                    <iframe
                        src="{{ asset('storage/sop_ppid/SK-PANDUAN-KTR-ettd.pdf') }}"
                        title="Preview Kebijakan"
                        loading="lazy"
                    ></iframe>

                    {{-- FLOATING BUTTON --}}
                    <div class="ppid-sop-preview-button">

                        <a
                            href="{{ asset('storage/sop_ppid/SK-PANDUAN-KTR-ettd.pdf') }}"
                            target="_blank"
                            rel="noopener"
                        >
                            <i class="fas fa-expand"></i>
                            Buka PDF
                        </a>

                    </div>

                </div>


                {{-- DOCUMENT INFO --}}
                <div class="ppid-sop-content">

                    <div class="ppid-sop-document-icon">

                        <i class="fas fa-file-pdf"></i>

                    </div>

                    <div class="ppid-sop-document-info">

                        <span class="ppid-sop-label">
                            Panduan KTR
                        </span>

                        <h3>
                            Panduan
                        </h3>

                        <p>
                            Panduan KTR
                        </p>

                    </div>

                </div>


                {{-- ACTION --}}
                <div class="ppid-sop-footer">

                    <a
                        href="{{ asset('storage/sop_ppid/SK-PANDUAN-KTR-ettd.pdf') }}"
                        target="_blank"
                        rel="noopener"
                        class="btn-sop-view"
                    >
                        <i class="fas fa-file-pdf"></i>
                        Buka PDF
                    </a>

                    <a
                        href="{{ asset('storage/sop_ppid/SK-PANDUAN-KTR-ettd.pdf') }}"
                        download
                        class="btn-sop-download"
                    >
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>

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

.ppid-sop-hero {

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


.ppid-sop-badge {

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


.ppid-sop-hero h1 {

    margin: 0 0 14px;

    color: #172033;

    font-size: clamp(32px, 4vw, 46px);

    font-weight: 750;

}


.ppid-sop-hero p {

    max-width: 700px;

    margin: 0;

    color: #667085;

    font-size: 16px;

    line-height: 1.8;

}


/* =========================================================
   SECTION
========================================================= */

.ppid-sop-section {

    padding: 65px 0 90px;

    background: #f8fafc;

}


/* =========================================================
   HEADING
========================================================= */

.ppid-sop-heading {

    max-width: 700px;

    margin-bottom: 35px;

}


.ppid-sop-heading span {

    color: #17795d;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

}


.ppid-sop-heading h2 {

    margin: 7px 0 10px;

    color: #172033;

    font-size: 30px;

    font-weight: 700;

}


.ppid-sop-heading p {

    margin: 0;

    color: #667085;

    font-size: 14px;

    line-height: 1.7;

}


/* =========================================================
   LIST
========================================================= */

.ppid-sop-list {

    display: flex;

    flex-direction: column;

    gap: 35px;

}


/* =========================================================
   CARD
========================================================= */

.ppid-sop-card {

    width: 100%;

    overflow: hidden;

    background: #ffffff;

    border:
        1px solid #e5eaf0;

    border-radius: 18px;

    box-shadow:
        0 10px 35px rgba(24, 45, 67, .06);

    transition:
        transform .25s ease,
        box-shadow .25s ease;

}


.ppid-sop-card:hover {

    transform:
        translateY(-3px);

    box-shadow:
        0 18px 45px rgba(24, 45, 67, .10);

}


/* =========================================================
   PDF PREVIEW
========================================================= */

.ppid-sop-preview {

    position: relative;

    width: 100%;

    height: 650px;

    overflow: hidden;

    background: #e9edf2;

}


.ppid-sop-preview iframe {

    display: block;

    width: 100%;

    height: 100%;

    border: none;

}


/* =========================================================
   PREVIEW BUTTON
========================================================= */

.ppid-sop-preview-button {

    position: absolute;

    right: 18px;

    bottom: 18px;

    z-index: 5;

}


.ppid-sop-preview-button a {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    padding: 10px 15px;

    border-radius: 8px;

    background:
        rgba(23, 121, 93, .95);

    color: #ffffff !important;

    font-size: 12px;

    font-weight: 600;

    text-decoration: none !important;

    box-shadow:
        0 6px 18px rgba(0, 0, 0, .18);

    transition:
        all .2s ease;

}


.ppid-sop-preview-button a:hover {

    background:
        #12634d;

    transform:
        translateY(-2px);

}


/* =========================================================
   DOCUMENT CONTENT
========================================================= */

.ppid-sop-content {

    display: flex;

    align-items: flex-start;

    gap: 17px;

    padding: 25px 28px 15px;

}


/* PDF ICON */

.ppid-sop-document-icon {

    width: 50px;

    height: 50px;

    flex: 0 0 50px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    background: #fff1f1;

    color: #d62828;

    font-size: 20px;

}


/* INFO */

.ppid-sop-document-info {

    flex: 1;

}


.ppid-sop-label {

    display: block;

    margin-bottom: 5px;

    color: #17795d;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1.2px;

}


.ppid-sop-document-info h3 {

    margin: 0 0 6px;

    color: #1d2939;

    font-size: 18px;

    font-weight: 700;

}


.ppid-sop-document-info p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}


/* =========================================================
   FOOTER
========================================================= */

.ppid-sop-footer {

    display: flex;

    gap: 10px;

    padding: 10px 28px 25px;

}


.btn-sop-view,
.btn-sop-download {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    padding: 11px 18px;

    border-radius: 8px;

    font-size: 13px;

    font-weight: 600;

    text-decoration: none !important;

    transition:
        all .25s ease;

}


/* VIEW */

.btn-sop-view {

    flex: 1;

    background: #eef7f5;

    color: #17795d !important;

    border:
        1px solid #dceee8;

}


.btn-sop-view:hover {

    background: #dff0eb;

    color: #12634d !important;

    transform:
        translateY(-2px);

}


/* DOWNLOAD */

.btn-sop-download {

    flex: 1;

    background: #17795d;

    color: #ffffff !important;

}


.btn-sop-download:hover {

    background: #12634d;

    color: #ffffff !important;

    transform:
        translateY(-2px);

    box-shadow:
        0 6px 16px rgba(23, 121, 93, .20);

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 768px) {

    .ppid-sop-hero {

        padding: 55px 0;

    }


    .ppid-sop-section {

        padding: 55px 0 70px;

    }


    .ppid-sop-preview {

        height: 550px;

    }


    .ppid-sop-content {

        padding:
            22px
            22px
            12px;

    }


    .ppid-sop-footer {

        padding:
            10px
            22px
            22px;

    }

}


@media (max-width: 576px) {

    .ppid-sop-heading h2 {

        font-size: 25px;

    }


    .ppid-sop-list {

        gap: 25px;

    }


    .ppid-sop-preview {

        height: 450px;

    }


    .ppid-sop-content {

        gap: 12px;

        padding:
            20px
            18px
            10px;

    }


    .ppid-sop-document-icon {

        width: 43px;

        height: 43px;

        flex-basis: 43px;

        font-size: 17px;

    }


    .ppid-sop-document-info h3 {

        font-size: 16px;

    }


    .ppid-sop-footer {

        flex-direction: column;

        padding:
            10px
            18px
            18px;

    }


    .btn-sop-view,
    .btn-sop-download {

        width: 100%;

        flex: none;

    }


    .ppid-sop-preview-button {

        right: 12px;

        bottom: 12px;

    }

}

</style>

@endsection
