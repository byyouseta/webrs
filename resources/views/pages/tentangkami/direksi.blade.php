@extends('layouts.app-web')

@section('title', 'Direksi | RSUP Surakarta')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="direksi-hero">

    <div class="container-custom">

        <span class="direksi-badge">
            PROFIL PIMPINAN
        </span>

        <h1>
            Direksi RSUP Surakarta
        </h1>

        <p>
            Direksi RSUP Surakarta merupakan unsur pimpinan yang
            bertanggung jawab dalam penyelenggaraan pelayanan,
            pendidikan, penelitian, pengembangan, dan tata kelola
            rumah sakit.
        </p>

    </div>

</section>


{{-- =========================================================
    DIREKTUR UTAMA
========================================================= --}}
<section class="direktur-utama-section">

    <div class="container-custom">

        <div class="direktur-utama-card">

            <div class="direktur-foto">

                <img
                    src="{{ asset('img/direksi/dr_sutanto.svg') }}"
                    alt="dr. Sutanto"
                >

            </div>

            <div class="direktur-content">

                <span>
                    Plt. DIREKTUR UTAMA
                </span>

                <h2>
                    dr. Sutanto
                </h2>

                <p>
                    Memimpin penyelenggaraan rumah sakit serta
                    mengkoordinasikan seluruh unit pelayanan,
                    pendidikan, penelitian, dan pengembangan.
                </p>

                {{-- ACTION --}}
                <div class="direksi-actions">

                    <button
                        type="button"
                        class="btn-direksi btn-pendidikan"
                        onclick="openPendidikan('sutanto')"
                    >
                        <i class="fas fa-graduation-cap"></i>
                        Riwayat Pendidikan
                    </button>

                    <a
                         href="{{ asset('storage/lhkpn/dr-sutanto.pdf') }}"
                        target="_blank"
                        rel="noopener"
                        class="btn-direksi btn-lhkpn"
                    >
                        <i class="fas fa-file-pdf"></i>
                        LHKPN
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    JAJARAN DIREKSI
========================================================= --}}
<section class="direksi-list-section">

    <div class="container-custom">

        <div class="section-title-center">

            <span>
                STRUKTUR DIREKSI
            </span>

            <h2>
                Jajaran Direksi
            </h2>

        </div>


        <div class="direksi-grid">


            {{-- =================================================
                SUTANTO
            ================================================= --}}
            <div class="direksi-card">

                <img
                    src="{{ asset('img/direksi/dr_sutanto.svg') }}"
                    alt="dr. Sutanto"
                >

                <div class="direksi-body">

                    <h4>
                        Direktur Pelayanan Medik,
                        Keperawatan dan Penunjang
                    </h4>

                    <p>
                        dr. Sutanto
                    </p>


                    <div class="direksi-actions">

                        <button
                            type="button"
                            class="btn-direksi btn-pendidikan"
                            onclick="openPendidikan('sutanto')"
                        >
                            <i class="fas fa-graduation-cap"></i>
                            Pendidikan
                        </button>

                        <a
                            href="{{ asset('storage/lhkpn/dr-sutanto.pdf') }}"
                            target="_blank"
                            rel="noopener"
                            class="btn-direksi btn-lhkpn"
                        >
                            <i class="fas fa-file-pdf"></i>
                            LHKPN
                        </a>

                    </div>

                </div>

            </div>


            {{-- =================================================
                LESLIE JANE
            ================================================= --}}
            <div class="direksi-card">

                <img
                    src="{{ asset('img/direksi/dr_leslie_jane.svg') }}"
                    alt="drg. Leslie Jane DT, MPH"
                >

                <div class="direksi-body">

                    <h4>
                        Direktur Perencanaan,
                        Keuangan, Layanan, dan Operasional
                    </h4>

                    <p>
                        drg. Leslie Jane DT, MPH
                    </p>


                    <div class="direksi-actions">

                        <button
                            type="button"
                            class="btn-direksi btn-pendidikan"
                            onclick="openPendidikan('leslie')"
                        >
                            <i class="fas fa-graduation-cap"></i>
                            Pendidikan
                        </button>

                        <a
                            href="{{ asset('storage/lhkpn/drg-leslie-jane.pdf') }}"
                            target="_blank"
                            rel="noopener"
                            class="btn-direksi btn-lhkpn"
                        >
                            <i class="fas fa-file-pdf"></i>
                            LHKPN
                        </a>

                    </div>

                </div>

            </div>


            {{-- =================================================
                HERU
            ================================================= --}}
            <div class="direksi-card">

                <img
                    src="{{ asset('img/direksi/heru_tri.svg') }}"
                    alt="Heru Tri Subagyo, S.Sos, MM"
                >

                <div class="direksi-body">

                    <h4>
                        Direktur SDM,
                        Pendidikan dan Penelitian
                    </h4>

                    <p>
                        Heru Tri Subagyo, S.Sos, MM
                    </p>


                    <div class="direksi-actions">

                        <button
                            type="button"
                            class="btn-direksi btn-pendidikan"
                            onclick="openPendidikan('heru')"
                        >
                            <i class="fas fa-graduation-cap"></i>
                            Pendidikan
                        </button>

                        <a
                            href="{{ asset('storage/lhkpn/heru-tri-subagyo.pdf') }}"
                            target="_blank"
                            rel="noopener"
                            class="btn-direksi btn-lhkpn"
                        >
                            <i class="fas fa-file-pdf"></i>
                            LHKPN
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    TUGAS DIREKSI
========================================================= --}}
<section class="direksi-duty">

    <div class="container-custom">

        <div class="duty-wrapper">

            <h2></h2>

            <div class="duty-grid">

                <div>
                    <i class="fas fa-check-circle"></i>
                    Menyusun kebijakan rumah sakit.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mengelola pelayanan kesehatan.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mengembangkan SDM dan organisasi.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mengelola keuangan dan aset.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Menjamin mutu dan keselamatan pasien.
                </div>

                <div>
                    <i class="fas fa-check-circle"></i>
                    Mendukung pendidikan dan penelitian.
                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
    POPUP RIWAYAT PENDIDIKAN
========================================================= --}}
<div
    id="pendidikanPopup"
    class="pendidikan-popup"
    aria-hidden="true"
>

    <div
        class="pendidikan-card"
        role="dialog"
        aria-modal="true"
        aria-labelledby="pendidikanNama"
    >

        {{-- CLOSE --}}
        <button
            type="button"
            class="pendidikan-close"
            onclick="closePendidikan()"
            aria-label="Tutup"
        >
            &times;
        </button>


        {{-- HEADER --}}
        <div class="pendidikan-card-header">

            <div class="pendidikan-icon">

                <i class="fas fa-graduation-cap"></i>

            </div>

            <div>

                <small>
                    RIWAYAT PENDIDIKAN
                </small>

                <h3 id="pendidikanNama">
                    -
                </h3>

            </div>

        </div>


        {{-- CONTENT --}}
        <div
            class="pendidikan-list"
            id="pendidikanList"
        >
        </div>

    </div>

</div>



{{-- =========================================================
    CSS
========================================================= --}}
<style>

/* =========================================================
   BUTTON
========================================================= */

.direksi-actions {

    display: flex;

    align-items: center;

    gap: 10px;

    margin-top: 18px;

    flex-wrap: wrap;

}


.btn-direksi {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    padding: 9px 14px;

    border-radius: 8px;

    font-size: 13px;

    font-weight: 600;

    text-decoration: none !important;

    cursor: pointer;

    border: none;

    transition:
        all .25s ease;

}


.btn-pendidikan {

    background: #eef6ff;

    color: #1769aa;

}


.btn-pendidikan:hover {

    background: #1769aa;

    color: #fff;

    transform: translateY(-2px);

}


.btn-lhkpn {

    background: #fff1f1;

    color: #d62828;

}


.btn-lhkpn:hover {

    background: #d62828;

    color: #fff !important;

    transform: translateY(-2px);

}


/* =========================================================
   POPUP
========================================================= */

.pendidikan-popup {

    position: fixed;

    inset: 0;

    width: 100%;

    height: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 20px;

    background:
        rgba(15, 23, 42, .60);

    backdrop-filter:
        blur(5px);

    -webkit-backdrop-filter:
        blur(5px);

    z-index: 999999;

    opacity: 0;

    visibility: hidden;

    pointer-events: none;

    transition:
        opacity .25s ease,
        visibility .25s ease;

}


/* POPUP ACTIVE */

.pendidikan-popup.show {

    opacity: 1;

    visibility: visible;

    pointer-events: auto;

}


/* =========================================================
   CARD
========================================================= */

.pendidikan-card {

    position: relative;

    width: 100%;

    max-width: 540px;

    max-height: 85vh;

    overflow-y: auto;

    padding: 30px;

    background: #fff;

    border-radius: 20px;

    box-shadow:
        0 30px 80px rgba(0, 0, 0, .25);

    transform:
        translateY(25px)
        scale(.96);

    transition:
        transform .3s ease;

}


/* CARD ACTIVE */

.pendidikan-popup.show .pendidikan-card {

    transform:
        translateY(0)
        scale(1);

}


/* =========================================================
   CLOSE BUTTON
========================================================= */

.pendidikan-close {

    position: absolute;

    top: 16px;

    right: 16px;

    width: 36px;

    height: 36px;

    display: flex;

    align-items: center;

    justify-content: center;

    border: none;

    border-radius: 50%;

    background: #f1f5f9;

    color: #64748b;

    font-size: 25px;

    line-height: 1;

    cursor: pointer;

    transition:
        all .2s ease;

}


.pendidikan-close:hover {

    background: #e2e8f0;

    color: #111827;

    transform:
        rotate(90deg);

}


/* =========================================================
   HEADER
========================================================= */

.pendidikan-card-header {

    display: flex;

    align-items: center;

    gap: 15px;

    padding-right: 45px;

    margin-bottom: 25px;

}


.pendidikan-icon {

    width: 52px;

    height: 52px;

    flex: 0 0 52px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 14px;

    background: #eef6ff;

    color: #1769aa;

    font-size: 21px;

}


.pendidikan-card-header small {

    display: block;

    margin-bottom: 4px;

    color: #1769aa;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1.2px;

}


.pendidikan-card-header h3 {

    margin: 0;

    color: #172033;

    font-size: 20px;

    font-weight: 700;

}


/* =========================================================
   EDUCATION LIST
========================================================= */

.pendidikan-list {

    display: flex;

    flex-direction: column;

}


/* ROW */

.pendidikan-row {

    display: flex;

    gap: 18px;

    padding: 17px 0;

    border-bottom:
        1px solid #edf0f4;

}


.pendidikan-row:first-child {

    padding-top: 0;

}


.pendidikan-row:last-child {

    padding-bottom: 0;

    border-bottom: none;

}


/* YEAR */

.pendidikan-tahun {

    flex: 0 0 58px;

    width: 58px;

    height: 30px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 7px;

    background: #eef6ff;

    color: #1769aa;

    font-size: 12px;

    font-weight: 700;

}


/* INFO */

.pendidikan-info {

    display: flex;

    flex-direction: column;

    gap: 4px;

}


.pendidikan-info strong {

    display: block;

    color: #1e293b;

    font-size: 14px;

    font-weight: 700;

}


.pendidikan-info span {

    display: block;

    color: #64748b;

    font-size: 13px;

}


/* =========================================================
   BODY LOCK
========================================================= */

body.pendidikan-popup-open {

    overflow: hidden;

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 576px) {

    .pendidikan-popup {

        padding: 15px;

    }


    .pendidikan-card {

        padding: 23px;

        border-radius: 17px;

        max-height: 90vh;

    }


    .pendidikan-card-header {

        gap: 12px;

    }


    .pendidikan-icon {

        width: 45px;

        height: 45px;

        flex-basis: 45px;

        font-size: 18px;

    }


    .pendidikan-card-header h3 {

        font-size: 17px;

    }


    .pendidikan-row {

        gap: 12px;

    }


    .pendidikan-tahun {

        flex-basis: 52px;

        width: 52px;

    }


    .direksi-actions {

        flex-direction: column;

        align-items: stretch;

    }


    .btn-direksi {

        width: 100%;

    }

}

</style>



{{-- =========================================================
    JAVASCRIPT
========================================================= --}}
<script>

/*
|--------------------------------------------------------------------------
| DATA RIWAYAT PENDIDIKAN
|--------------------------------------------------------------------------
|
| Ganti isi data berikut dengan data resmi masing-masing direksi.
|
*/

const dataPendidikan = {

    sutanto: {

        nama: 'dr. Sutanto',

        pendidikan: [

            {
                tahun: '1999',
                pendidikan: 'S1 Kedokteran',
                institusi: 'Universitas Diponegoro'
            }

        ]

    },


    leslie: {

        nama: 'drg. Leslie Jane DT, MPH',

        pendidikan: [

            {
                tahun: '-',
                pendidikan: 'S1 Kedokteran Gigi',
                institusi: 'Universitas Hasanuddin'
            },
            {
                tahun: '-',
                pendidikan: 'S2',
                institusi: 'University of Leeds, UK'
            },


        ]

    },


    heru: {

        nama: 'Heru Tri Subagyo, S.Sos, MM',

        pendidikan: [

            {
                tahun: '1998',
                pendidikan: 'S1 Administrasi',
                institusi: 'Sekolah Tinggi Ilmu Administrasi YAPPAN'
            },

            {
                tahun: '2009',
                pendidikan: 'S2  Magister Manajemen',
                institusi: 'Universitas Surapati'
            }

        ]

    }

};


/*
|--------------------------------------------------------------------------
| OPEN POPUP
|--------------------------------------------------------------------------
*/

function openPendidikan(id)
{

    console.log('Membuka riwayat pendidikan:', id);


    const popup =
        document.getElementById('pendidikanPopup');


    const nama =
        document.getElementById('pendidikanNama');


    const list =
        document.getElementById('pendidikanList');


    /*
    | Pastikan popup ditemukan
    */

    if (!popup) {

        console.error(
            'Element #pendidikanPopup tidak ditemukan.'
        );

        return;

    }


    /*
    | Ambil data
    */

    const data =
        dataPendidikan[id];


    if (!data) {

        console.error(
            'Data pendidikan tidak ditemukan:',
            id
        );

        return;

    }


    /*
    | Set nama
    */

    nama.textContent =
        data.nama;


    /*
    | Bersihkan list
    */

    list.innerHTML = '';


    /*
    | Buat daftar pendidikan
    */

    data.pendidikan.forEach(function(item) {

        const row =
            document.createElement('div');

        row.className =
            'pendidikan-row';


        row.innerHTML = `

            <div class="pendidikan-tahun">
                ${item.tahun}
            </div>

            <div class="pendidikan-info">

                <strong>
                    ${item.pendidikan}
                </strong>

                <span>
                    ${item.institusi}
                </span>

            </div>

        `;


        list.appendChild(row);

    });


    /*
    | Tampilkan popup
    */

    popup.classList.add('show');


    popup.setAttribute(
        'aria-hidden',
        'false'
    );


    /*
    | Lock scroll halaman
    */

    document.body.classList.add(
        'pendidikan-popup-open'
    );

}


/*
|--------------------------------------------------------------------------
| CLOSE POPUP
|--------------------------------------------------------------------------
*/

function closePendidikan()
{

    const popup =
        document.getElementById('pendidikanPopup');


    if (!popup) {

        return;

    }


    popup.classList.remove('show');


    popup.setAttribute(
        'aria-hidden',
        'true'
    );


    document.body.classList.remove(
        'pendidikan-popup-open'
    );

}


/*
|--------------------------------------------------------------------------
| CLICK OUTSIDE CARD
|--------------------------------------------------------------------------
*/

document.addEventListener(
    'click',
    function(event)
    {

        const popup =
            document.getElementById(
                'pendidikanPopup'
            );


        if (!popup) {

            return;

        }


        /*
        | Jika yang diklik adalah area overlay
        */

        if (
            event.target === popup &&
            popup.classList.contains('show')
        ) {

            closePendidikan();

        }

    }
);


/*
|--------------------------------------------------------------------------
| ESCAPE KEY
|--------------------------------------------------------------------------
*/

document.addEventListener(
    'keydown',
    function(event)
    {

        if (
            event.key === 'Escape' ||
            event.key === 'Esc'
        ) {

            closePendidikan();

        }

    }
);

</script>

@endsection
