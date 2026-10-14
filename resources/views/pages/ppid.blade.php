
@extends('layouts.app-web')

@section('title', 'PPID | RSUP Surakarta')

@section('content')

@php
    /*
    |--------------------------------------------------------------------------
    | Kategori PPID
    |--------------------------------------------------------------------------
    | Nama kategori harus sesuai dengan data pada tabel kategori.
    */

    $kategoriPPID = [
        [
            'nama' => 'Informasi Berkala',
            'deskripsi' => 'Informasi yang diumumkan secara berkala.',
            'icon' => 'bi-calendar2-check',
            'warna' => 'green',
        ],
        [
            'nama' => 'Informasi Setiap Saat',
            'deskripsi' => 'Informasi yang wajib tersedia setiap saat.',
            'icon' => 'bi-folder2-open',
            'warna' => 'blue',
        ],
        [
            'nama' => 'Informasi yang Dikecualikan',
            'deskripsi' => 'Kategori pengelolaan informasi yang dikecualikan.',
            'icon' => 'bi-shield-lock',
            'warna' => 'red',
        ],
        [
            'nama' => 'Informasi Serta Merta',
            'deskripsi' => 'Informasi yang diumumkan segera sesuai ketentuan.',
            'icon' => 'bi-megaphone',
            'warna' => 'orange',
        ],
    ];

    /*
    |--------------------------------------------------------------------------
    | Kelompokkan dokumen berdasarkan kategori
    |--------------------------------------------------------------------------
    */

    $ppidGrouped = $ppid->groupBy(function ($data) {
        return $data->category->name ?? 'Lainnya';
    });
@endphp

<section class="ppid-page">

    {{-- HERO --}}
{{-- HERO PPID --}}
<section class="ppid-hero-modern">
    <div class="ppid-hero-decoration ppid-decoration-one"></div>
    <div class="ppid-hero-decoration ppid-decoration-two"></div>

    <div class="container-custom ppid-hero-container">

        <div class="ppid-hero-content">

            <div class="ppid-hero-label">
                <i class="bi bi-shield-check"></i>
                <span>PPID RSUP SURAKARTA</span>
            </div>

            <h1>
                Pejabat Pengelola
                <span>Informasi dan Dokumentasi</span>
            </h1>

            <div class="ppid-hero-divider"></div>

            <p>
                Informasi publik RSUP Surakarta yang dapat diakses
                masyarakat secara transparan, akuntabel, dan
                bertanggung jawab.
            </p>

            <div class="ppid-hero-footer">
                <div class="ppid-hero-footer-icon">
                    <i class="bi bi-info-circle"></i>
                </div>

                <span>
                    Layanan Informasi Publik
                    <strong>RSUP Surakarta</strong>
                </span>
            </div>

        </div>

        <div class="ppid-hero-visual">
            <div class="ppid-visual-circle ppid-circle-large"></div>
            <div class="ppid-visual-circle ppid-circle-small"></div>

            <div class="ppid-visual-card">
                <div class="ppid-visual-icon">
                    <i class="bi bi-file-earmark-text"></i>
                </div>

                <div class="ppid-visual-lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="ppid-visual-check">
                    <i class="bi bi-check-lg"></i>
                </div>
            </div>

            <div class="ppid-floating-tag">
                <i class="bi bi-unlock"></i>
                Keterbukaan Informasi
            </div>
        </div>

    </div>

    <div class="ppid-hero-bottom-line"></div>
</section>


    <div class="container-custom ppid-main">

        {{-- PENCARIAN DAN FILTER --}}
        <div class="ppid-toolbar">

            <div class="ppid-toolbar-heading">
                <span>LAYANAN INFORMASI PUBLIK</span>
                <h2>Daftar Informasi Publik</h2>
                <p>
                    Pilih kategori atau cari dokumen yang Anda butuhkan.
                </p>
            </div>

            <div class="ppid-tools">

            {{-- PENCARIAN --}}
            <div class="ppid-search">
                <i class="bi bi-search"></i>

                <input
                    type="text"
                    id="searchPPID"
                    placeholder="Cari dokumen..."
                    aria-label="Cari dokumen PPID"
                >

                <button
                    type="button"
                    id="clearSearch"
                    aria-label="Hapus pencarian"
                >
                    &times;
                </button>
            </div>

            {{-- CHECKLIST KATEGORI --}}
            <div class="ppid-category-filters">

                <label class="ppid-check-item ppid-check-all">
                    <input
                        type="checkbox"
                        id="checkSemua"
                        checked
                    >
                    <span>Semua</span>
                </label>

                <label class="ppid-check-item">
                    <input
                        type="checkbox"
                        class="filter-ppid"
                        value="Informasi Berkala"
                        checked
                    >
                    <span>Informasi Berkala</span>
                </label>

                <label class="ppid-check-item">
                    <input
                        type="checkbox"
                        class="filter-ppid"
                        value="Informasi Setiap Saat"
                        checked
                    >
                    <span>Informasi Setiap Saat</span>
                </label>

                <label class="ppid-check-item">
                    <input
                        type="checkbox"
                        class="filter-ppid"
                        value="Informasi yang Dikecualikan"
                        checked
                    >
                    <span>Informasi yang Dikecualikan</span>
                </label>

                <label class="ppid-check-item">
                    <input
                        type="checkbox"
                        class="filter-ppid"
                        value="Informasi Serta Merta"
                        checked
                    >
                    <span>Informasi Serta Merta</span>
                </label>

            </div>

        </div>

        </div>


        {{-- EMPAT KATEGORI --}}
        <div class="ppid-category-grid" id="ppidCategoryGrid">

            @foreach($kategoriPPID as $kategori)

                @php
                    $namaKategori = $kategori['nama'];

                    $dokumenKategori = $ppidGrouped->get(
                        $namaKategori,
                        collect()
                    );
                @endphp

                <section
                    class="ppid-category-card"
                    data-category="{{ $namaKategori }}"
                >

                    {{-- HEADER KATEGORI --}}
                    <div class="ppid-category-header">

                        <div class="ppid-category-title">

                            <div class="ppid-category-icon {{ $kategori['warna'] }}">
                                <i class="bi {{ $kategori['icon'] }}"></i>
                            </div>

                            <div>
                                <h2>{{ $namaKategori }}</h2>
                                <p>{{ $kategori['deskripsi'] }}</p>
                            </div>

                        </div>

                        <span class="ppid-count">
                            {{ $dokumenKategori->count() }}
                        </span>

                    </div>


                    {{-- DAFTAR DOKUMEN --}}
                    <div class="ppid-document-list">

                        @forelse($dokumenKategori as $data)

                            @php
                                $judul = optional($data->translation)->title
                                    ?? 'Dokumen tanpa judul';

                                $tanggal = $data->tanggal
                                    ? \Carbon\Carbon::parse($data->tanggal)->format('d M Y')
                                    : '-';

                                $fileUrl = $data->file
                                    ? asset('storage/' . $data->file)
                                    : null;
                            @endphp

                            <article
                                class="ppid-document-item"
                                data-page-item
                                data-search="{{ \Illuminate\Support\Str::lower($judul . ' ' . $namaKategori . ' ' . $tanggal) }}"
                            >

                                <div class="ppid-document-icon">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>

                                <div class="ppid-document-info">

                                    <a
                                        href="{{ $fileUrl ?? '#' }}"
                                        class="ppid-document-title {{ $fileUrl ? '' : 'disabled' }}"
                                        @if($fileUrl)
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        @endif
                                    >
                                        {{ $judul }}
                                    </a>

                                    <span class="ppid-document-date">
                                        <i class="bi bi-calendar3"></i>
                                        {{ $tanggal }}
                                    </span>

                                </div>

                                <div class="ppid-document-actions">

                                    @if($fileUrl)

                                        <a
                                            href="{{ $fileUrl }}"
                                            class="ppid-action-btn view"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            title="Lihat dokumen"
                                            aria-label="Lihat {{ $judul }}"
                                        >
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a
                                            href="{{ $fileUrl }}"
                                            class="ppid-action-btn download"
                                            download
                                            title="Download dokumen"
                                            aria-label="Download {{ $judul }}"
                                        >
                                            <i class="bi bi-download"></i>
                                        </a>

                                    @else

                                        <span class="ppid-no-file">
                                            File belum tersedia
                                        </span>

                                    @endif

                                </div>

                            </article>

                        @empty

                            <div class="ppid-empty-category">
                                <i class="bi bi-folder2"></i>
                                <p>Belum ada dokumen pada kategori ini.</p>
                            </div>

                        @endforelse

                        <div class="ppid-no-results" hidden>
                            <i class="bi bi-search"></i>
                            <p>Dokumen tidak ditemukan.</p>
                        </div>

                    </div>

                    {{-- PAGINATION PER KATEGORI --}}
                    <div class="ppid-pagination" data-pagination>
                        <button
                            type="button"
                            class="ppid-page-prev"
                            data-page-prev
                            disabled
                            aria-label="Halaman sebelumnya"
                        >
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <div class="ppid-page-numbers" data-page-numbers></div>

                        <button
                            type="button"
                            class="ppid-page-next"
                            data-page-next
                            aria-label="Halaman berikutnya"
                        >
                            <i class="bi bi-chevron-right"></i>
                        </button>

                        <span class="ppid-page-info" data-page-info></span>
                    </div>

                </section>

            @endforeach

        </div>


        {{-- HASIL PENCARIAN KOSONG --}}
        <div id="ppidGlobalEmpty" class="ppid-global-empty" hidden>
            <i class="bi bi-search"></i>
            <h3>Dokumen tidak ditemukan</h3>
            <p>
                Coba gunakan kata kunci lain atau pilih kategori berbeda.
            </p>
            <button type="button" id="resetPPID">
                Tampilkan Semua Dokumen
            </button>
        </div>


        {{-- INFORMASI PERMOHONAN --}}
        <div class="ppid-request-banner">

            <div class="ppid-request-icon">
                <i class="bi bi-info-circle"></i>
            </div>

            <div class="ppid-request-text">
                <h3>Tidak menemukan informasi yang dibutuhkan?</h3>
                <p>
                    Anda dapat mengajukan permohonan informasi publik
                    melalui layanan PPID RSUP Surakarta.
                </p>
            </div>

            <a
                href="{{ route('ppid_form') }}"
                class="ppid-request-button"
            >
                Ajukan Permohonan
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>

</section>

<style>

    /* HEADER MODERN: berlaku di semua ukuran layar */

    .ppid-hero-modern {

        position: relative;

        overflow: hidden;

        isolation: isolate;

        padding: 76px 0 72px;

        color: #ffffff;

        background:

            radial-gradient(

                circle at 78% 45%,

                rgba(37, 237, 157, 0.16),

                transparent 28%

            ),

            linear-gradient(

                115deg,

                #29884d 0%,

                #3ab7a2 48%,

                #18d9a5 100%

            );

    }



    /* FILTER CHECKLIST */

    .ppid-category-filters {

        display: flex;

        flex-wrap: wrap;

        align-items: center;

        gap: 10px;

        width: 100%;

        margin-top: 12px;

    }



    .ppid-check-item {

        display: inline-flex;

        align-items: center;

        gap: 7px;

        padding: 9px 12px;

        margin: 0;

        border: 1px solid #e5eaf0;

        border-radius: 8px;

        background: #ffffff;

        color: #475467;

        font-size: 12px;

        font-weight: 500;

        cursor: pointer;

        transition: all .2s ease;

    }



    .ppid-check-item:hover {

        border-color: #17795d;

        background: #f4faf8;

    }



    .ppid-check-item input {

        width: 15px;

        height: 15px;

        margin: 0;

        accent-color: #17795d;

        cursor: pointer;

    }



    .ppid-check-all {

        background: #e9f5f1;

        border-color: #cce8dc;

        color: #17795d;

        font-weight: 700;

    }



    .ppid-check-item:has(input:checked) {

        border-color: #b7ddce;

        background: #f0f8f4;

    }



    .ppid-check-all:has(input:checked) {

        background: #17795d;

        border-color: #17795d;

        color: #ffffff;

    }



    .ppid-hero p {

        max-width: 720px;

        margin: 0;

        color: #667085;

        font-size: 15px;

        line-height: 1.8;

    }



    .ppid-main {

        padding-top: 55px;

        padding-bottom: 80px;

    }





/* =====================================================

   TOOLBAR

===================================================== */



.ppid-toolbar {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 25px;

    margin-bottom: 30px;

}



.ppid-toolbar-heading {

    max-width: 500px;

}



.ppid-toolbar-heading > span {

    color: #17795d;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1.4px;

}



.ppid-toolbar-heading h2 {

    margin: 7px 0;

    color: #172033;

    font-size: 27px;

    font-weight: 750;

}



.ppid-toolbar-heading p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}



.ppid-tools {

    display: flex;

    align-items: center;

    gap: 10px;

    width: min(100%, 510px);

}



.ppid-search {

    position: relative;

    display: flex;

    align-items: center;

    flex: 1;

    min-width: 180px;

}



.ppid-search > i {

    position: absolute;

    left: 14px;

    color: #98a2b3;

    pointer-events: none;

}



.ppid-search input {

    width: 100%;

    height: 44px;

    padding: 0 36px 0 39px;

    border: 1px solid #d0d5dd;

    border-radius: 9px;

    outline: none;

    background: #fff;

    color: #344054;

    font-size: 13px;

}



.ppid-search input:focus {

    border-color: #17795d;

    box-shadow: 0 0 0 3px rgba(23, 121, 93, .09);

}



.ppid-search button {

    position: absolute;

    right: 8px;

    width: 25px;

    height: 25px;

    border: none;

    border-radius: 5px;

    background: transparent;

    color: #667085;

    font-size: 22px;

    line-height: 1;

    cursor: pointer;

}



.ppid-search button:hover {

    background: #f2f4f7;

}



\#filterKategori {

    height: 44px;

    max-width: 210px;

    padding: 0 30px 0 12px;

    border: 1px solid #d0d5dd;

    border-radius: 9px;

    background: #fff;

    color: #344054;

    font-size: 12px;

    outline: none;

}





/* =====================================================

   GRID KATEGORI

===================================================== */



.ppid-category-grid {

    display: grid;

    grid-template-columns: repeat(2, minmax(0, 1fr));

    align-items: start;

    gap: 25px;

}



.ppid-category-card {

    min-width: 0;

    overflow: hidden;

    border: 1px solid #e5eaf0;

    border-radius: 16px;

    background: #fff;

    box-shadow: 0 7px 25px rgba(24, 45, 67, .045);

    transition: box-shadow .25s ease;

}



.ppid-category-card:hover {

    box-shadow: 0 12px 30px rgba(24, 45, 67, .075);

}



.ppid-category-card.is-hidden {

    display: none;

}



.ppid-category-header {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 12px;

    padding: 23px 24px;

    border-bottom: 1px solid #edf0f3;

}



.ppid-category-title {

    display: flex;

    align-items: center;

    gap: 13px;

    min-width: 0;

}



.ppid-category-icon {

    display: flex;

    align-items: center;

    justify-content: center;

    flex: 0 0 45px;

    width: 45px;

    height: 45px;

    border-radius: 12px;

    font-size: 19px;

}



.ppid-category-icon.green {

    background: #e9f5f1;

    color: #17795d;

}



.ppid-category-icon.blue {

    background: #eef5fc;

    color: #1769aa;

}



.ppid-category-icon.red {

    background: #fff0f0;

    color: #c0392b;

}



.ppid-category-icon.orange {

    background: #fff5e8;

    color: #b7791f;

}



.ppid-category-title h2 {

    margin: 0 0 5px;

    color: #1d2939;

    font-size: 16px;

    line-height: 1.45;

    font-weight: 750;

}



.ppid-category-title p {

    margin: 0;

    color: #98a2b3;

    font-size: 11px;

    line-height: 1.5;

}



.ppid-count {

    display: flex;

    align-items: center;

    justify-content: center;

    flex: 0 0 31px;

    width: 31px;

    height: 31px;

    border-radius: 50%;

    background: #eef7f5;

    color: #17795d;

    font-size: 12px;

    font-weight: 700;

}





/* =====================================================

   DOCUMENT LIST

===================================================== */



.ppid-document-list {

    padding: 5px 22px;

}



.ppid-document-item {

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 17px 0;

    border-bottom: 1px solid #f0f2f5;

}



.ppid-document-item:last-of-type {

    border-bottom: none;

}



.ppid-document-item[hidden],

.ppid-no-results[hidden],

.ppid-global-empty[hidden] {

    display: none !important;

}



.ppid-document-icon {

    display: flex;

    align-items: center;

    justify-content: center;

    flex: 0 0 37px;

    width: 37px;

    height: 37px;

    border-radius: 9px;

    background: #f2f7f5;

    color: #17795d;

    font-size: 17px;

}



.ppid-document-info {

    flex: 1;

    min-width: 0;

}



.ppid-document-title {

    display: block;

    color: #344054;

    font-size: 13px;

    line-height: 1.6;

    font-weight: 600;

    text-decoration: none;

    overflow-wrap: anywhere;

    transition: color .2s ease;

}



.ppid-document-title:hover {

    color: #17795d;

    text-decoration: none;

}



.ppid-document-title.disabled {

    color: #98a2b3;

    pointer-events: none;

}



.ppid-document-date {

    display: block;

    margin-top: 5px;

    color: #98a2b3;

    font-size: 11px;

}



.ppid-document-date i {

    margin-right: 4px;

}



.ppid-document-actions {

    display: flex;

    align-items: center;

    gap: 6px;

}



.ppid-action-btn {

    display: flex;

    align-items: center;

    justify-content: center;

    width: 33px;

    height: 33px;

    flex: 0 0 33px;

    border-radius: 8px;

    font-size: 14px;

    text-decoration: none !important;

    transition: all .2s ease;

}



.ppid-action-btn.view {

    background: #eef5fc;

    color: #1769aa;

}



.ppid-action-btn.view:hover {

    background: #dceafa;

    color: #12548a;

}



.ppid-action-btn.download {

    background: #e9f5f1;

    color: #17795d;

}



.ppid-action-btn.download:hover {

    background: #d8eee5;

    color: #12634d;

}



.ppid-no-file {

    max-width: 95px;

    color: #98a2b3;

    font-size: 10px;

    text-align: right;

}



.ppid-empty-category,

.ppid-no-results {

    padding: 30px 15px;

    color: #98a2b3;

    text-align: center;

}



.ppid-empty-category i,

.ppid-no-results i {

    display: block;

    margin-bottom: 9px;

    font-size: 25px;

}



.ppid-empty-category p,

.ppid-no-results p {

    margin: 0;

    font-size: 12px;

}





/* =====================================================

   REQUEST BANNER

===================================================== */



.ppid-request-banner {

    display: flex;

    align-items: center;

    gap: 18px;

    margin-top: 35px;

    padding: 25px 28px;

    border: 1px solid #dceee8;

    border-radius: 16px;

    background: #eef7f5;

}



.ppid-request-icon {

    display: flex;

    align-items: center;

    justify-content: center;

    flex: 0 0 47px;

    width: 47px;

    height: 47px;

    border-radius: 12px;

    background: #17795d;

    color: #fff;

    font-size: 19px;

}



.ppid-request-text {

    flex: 1;

}



.ppid-request-text h3 {

    margin: 0 0 6px;

    color: #17634f;

    font-size: 16px;

    font-weight: 750;

}



.ppid-request-text p {

    margin: 0;

    color: #475467;

    font-size: 12px;

    line-height: 1.7;

}



.ppid-request-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    flex: 0 0 auto;

    padding: 12px 17px;

    border-radius: 8px;

    background: #17795d;

    color: #fff !important;

    font-size: 12px;

    font-weight: 700;

    text-decoration: none !important;

    transition: background .2s ease;

}



.ppid-request-button:hover {

    background: #12634d;

}





/* =====================================================

   GLOBAL EMPTY

===================================================== */



.ppid-global-empty {

    padding: 50px 20px;

    border: 1px dashed #d0d5dd;

    border-radius: 14px;

    background: #fff;

    text-align: center;

}



.ppid-global-empty > i {

    color: #98a2b3;

    font-size: 35px;

}



.ppid-global-empty h3 {

    margin: 12px 0 7px;

    color: #344054;

    font-size: 18px;

}



.ppid-global-empty p {

    margin: 0 0 18px;

    color: #667085;

    font-size: 13px;

}



.ppid-global-empty button {

    padding: 10px 15px;

    border: none;

    border-radius: 8px;

    background: #17795d;

    color: #fff;

    font-size: 12px;

    font-weight: 600;

    cursor: pointer;

}

/* =========================================
   PAGINATION PER CARD KATEGORI
========================================= */

.ppid-pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 6px;
    padding: 15px 18px;
    border-top: 1px solid #edf0f3;
    background: #fcfdfd;
}

.ppid-page-numbers {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 5px;
}

.ppid-page-prev,
.ppid-page-next,
.ppid-page-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    height: 32px;
    padding: 0 9px;
    border: 1px solid #e5eaf0;
    border-radius: 7px;
    background: #fff;
    color: #475467;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all .2s ease;
}

.ppid-page-prev:hover:not(:disabled),
.ppid-page-next:hover:not(:disabled),
.ppid-page-number:hover {
    border-color: #17795d;
    color: #17795d;
    background: #eef7f5;
}

.ppid-page-number.active {
    border-color: #17795d;
    background: #17795d;
    color: #fff;
}

.ppid-page-prev:disabled,
.ppid-page-next:disabled {
    opacity: .35;
    cursor: not-allowed;
}

.ppid-page-info {
    width: 100%;
    margin-top: 3px;
    color: #98a2b3;
    font-size: 10px;
    text-align: center;
}

.ppid-pagination[hidden] {
    display: none !important;
}




/* =====================================================

   RESPONSIVE

===================================================== */



@media (max-width: 992px) {

    .ppid-toolbar {

        align-items: flex-start;

        flex-direction: column;

    }



    .ppid-tools {

        width: 100%;

    }



    .ppid-category-grid {

        gap: 18px;

    }



    .ppid-category-header {

        padding: 20px;

    }



    .ppid-document-list {

        padding: 5px 18px;

    }

}



@media (max-width: 768px) {

    .ppid-hero {

        padding: 55px 0;

    }



    .ppid-main {

        padding-top: 40px;

        padding-bottom: 60px;

    }



    .ppid-category-grid {

        grid-template-columns: 1fr;

    }



    .ppid-toolbar-heading h2 {

        font-size: 24px;

    }



    .ppid-request-banner {

        align-items: flex-start;

        flex-wrap: wrap;

        padding: 22px;

    }



    .ppid-request-text {

        flex-basis: calc(100% - 70px);

    }



    .ppid-request-button {

        width: 100%;

    }

}



    @media (max-width: 480px) {

        .ppid-tools {

            align-items: stretch;

            flex-direction: column;

        }



        #filterKategori {

            width: 100%;

            max-width: none;

        }



        .ppid-category-title h2 {

            font-size: 14px;

        }



        .ppid-category-title p {

            font-size: 10px;

        }



        .ppid-document-item {

            gap: 9px;

        }



        .ppid-document-icon {

            flex-basis: 32px;

            width: 32px;

            height: 32px;

            font-size: 15px;

        }



        .ppid-document-title {

            font-size: 12px;

        }



        .ppid-action-btn {

            width: 30px;

            height: 30px;

            flex-basis: 30px;

        }



        .ppid-no-file {

            max-width: 65px;

            font-size: 9px;

        }

    }


    @media (max-width: 576px) {

            .ppid-category-filters {

                gap: 8px;

            }



            .ppid-check-item {

                padding: 8px 10px;

                font-size: 11px;

            }

    }





    /* =========================================

    MODERN PPID HERO

    ========================================= */



    .ppid-hero-modern {

        position: relative;

        overflow: hidden;

        isolation: isolate;

        padding: 78px 0 82px;

        background: linear-gradient(

            115deg,

            #103b36 0%,

            #12634f 48%,

            #16866b 100%

        );

        color: #ffffff;

    }



    .ppid-hero-container {

        position: relative;

        z-index: 2;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 45px;

    }



    .ppid-hero-content {

        flex: 1;

        max-width: 740px;

    }



    /* Badge */

    .ppid-hero-label {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        padding: 10px 15px;

        margin-bottom: 24px;

        border: 1px solid rgba(255, 255, 255, .23);

        border-radius: 50px;

        background: rgba(255, 255, 255, .10);

        color: #d5fff0;

        font-size: 11px;

        font-weight: 700;

        letter-spacing: 1.5px;

        backdrop-filter: blur(8px);

    }



    .ppid-hero-label i {

        font-size: 16px;

    }



    /* Heading */

    .ppid-hero-content h1 {

        max-width: 720px;

        margin: 0;

        color: #ffffff;

        font-size: clamp(32px, 4.2vw, 51px);

        line-height: 1.2;

        font-weight: 800;

        letter-spacing: -1.1px;

    }



    .ppid-hero-content h1 span {

        display: block;

        margin-top: 5px;

        color: #9ef0d0;

    }



    /* Accent line */

    .ppid-hero-divider {

        width: 76px;

        height: 4px;

        margin: 25px 0 20px;

        border-radius: 10px;

        background: #9ef0d0;

    }



    /* Description */

    .ppid-hero-content > p {

        max-width: 610px;

        margin: 0;

        color: rgba(255, 255, 255, .83);

        font-size: 15px;

        line-height: 1.9;

    }



    /* Footer label */

    .ppid-hero-footer {

        display: flex;

        align-items: center;

        gap: 12px;

        margin-top: 30px;

        color: rgba(255, 255, 255, .8);

        font-size: 12px;

    }



    .ppid-hero-footer-icon {

        display: flex;

        align-items: center;

        justify-content: center;

        width: 39px;

        height: 39px;

        flex: 0 0 39px;

        border: 1px solid rgba(255, 255, 255, .22);

        border-radius: 11px;

        background: rgba(255, 255, 255, .10);

        color: #9ef0d0;

        font-size: 17px;

    }



    .ppid-hero-footer strong {

        display: block;

        margin-top: 3px;

        color: #ffffff;

        font-size: 13px;

    }



    /* Decorative background */

    .ppid-hero-decoration {

        position: absolute;

        z-index: -1;

        border: 1px solid rgba(255, 255, 255, .09);

        border-radius: 50%;

        pointer-events: none;

    }



    .ppid-decoration-one {

        width: 570px;

        height: 570px;

        top: -300px;

        right: -100px;

        box-shadow:

            0 0 0 45px rgba(255, 255, 255, .025),

            0 0 0 90px rgba(255, 255, 255, .02);

    }



    .ppid-decoration-two {

        width: 400px;

        height: 400px;

        bottom: -290px;

        left: 30%;

        box-shadow: 0 0 0 45px rgba(255, 255, 255, .025);

    }



    /* Illustration */

    .ppid-hero-visual {

        position: relative;

        display: flex;

        align-items: center;

        justify-content: center;

        flex: 0 0 310px;

        height: 280px;

    }



    .ppid-visual-circle {

        position: absolute;

        border-radius: 50%;

        border: 1px solid rgba(255, 255, 255, .15);

    }



    .ppid-circle-large {

        width: 255px;

        height: 255px;

        background: rgba(255, 255, 255, .045);

        box-shadow: 0 0 0 24px rgba(255, 255, 255, .025);

    }



    .ppid-circle-small {

        width: 185px;

        height: 185px;

        background: rgba(158, 240, 208, .08);

    }



    /* Document illustration */

    .ppid-visual-card {

        position: relative;

        z-index: 2;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        width: 145px;

        height: 175px;

        border: 1px solid rgba(255, 255, 255, .75);

        border-radius: 19px;

        background: linear-gradient(145deg, #ffffff, #e7f8f1);

        box-shadow: 0 25px 60px rgba(0, 0, 0, .20);

        transform: rotate(-5deg);

    }



    .ppid-visual-icon {

        display: flex;

        align-items: center;

        justify-content: center;

        width: 58px;

        height: 58px;

        margin-bottom: 17px;

        border-radius: 15px;

        background: #d8f3e8;

        color: #17795d;

        font-size: 31px;

    }



    .ppid-visual-lines {

        display: flex;

        flex-direction: column;

        gap: 7px;

        width: 83px;

    }



    .ppid-visual-lines span {

        display: block;

        height: 5px;

        border-radius: 10px;

        background: #c8dcd4;

    }



    .ppid-visual-lines span:nth-child(2) {

        width: 75%;

    }



    .ppid-visual-lines span:nth-child(3) {

        width: 55%;

    }



    /* Verification badge */

    .ppid-visual-check {

        position: absolute;

        right: -18px;

        bottom: 20px;

        display: flex;

        align-items: center;

        justify-content: center;

        width: 43px;

        height: 43px;

        border: 4px solid #12634f;

        border-radius: 50%;

        background: #9ef0d0;

        color: #10533f;

        font-size: 23px;

    }



    /* Floating tag */

    .ppid-floating-tag {

        position: absolute;

        z-index: 3;

        right: -5px;

        bottom: 20px;

        display: flex;

        align-items: center;

        gap: 8px;

        padding: 12px 15px;

        border: 1px solid rgba(255, 255, 255, .55);

        border-radius: 12px;

        background: #ffffff;

        color: #17634f;

        font-size: 11px;

        font-weight: 700;

        box-shadow: 0 12px 30px rgba(0, 0, 0, .13);

    }



    /* Bottom accent */

    .ppid-hero-bottom-line {

        position: absolute;

        right: 0;

        bottom: 0;

        left: 0;

        height: 5px;

        background: linear-gradient(

            90deg,

            #9ef0d0,

            #ffffff,

            #80d9ba

        );

    }



    /* =========================================

    RESPONSIVE

    ========================================= */



    @media (max-width: 900px) {

        .ppid-hero-modern {

            padding: 65px 0 70px;

        }



        .ppid-hero-container {

            gap: 20px;

        }



        .ppid-hero-visual {

            flex-basis: 240px;

            transform: scale(.85);

        }



        .ppid-floating-tag {

            right: -15px;

        }

    }



    @media (max-width: 680px) {

        .ppid-hero-modern {

            padding: 50px 0 55px;

        }



        .ppid-hero-container {

            flex-direction: column;

            align-items: flex-start;

            gap: 15px;

        }



        .ppid-hero-content h1 {

            font-size: clamp(30px, 8vw, 40px);

            letter-spacing: -.6px;

        }



        .ppid-hero-content > p {

            font-size: 14px;

        }



        .ppid-hero-visual {

            align-self: center;

            width: 100%;

            height: 235px;

            flex-basis: auto;

            margin-top: 5px;

            transform: scale(.85);

        }



        .ppid-floating-tag {

            right: 0;

        }

    }
    @media (max-width: 480px) {
        .ppid-pagination {
            gap: 4px;
            padding: 13px 8px;
        }

        .ppid-page-prev,
        .ppid-page-next,
        .ppid-page-number {
            min-width: 29px;
            height: 29px;
            padding: 0 7px;
            font-size: 11px;
        }
    }


</style>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('searchPPID');
    const clearSearch = document.getElementById('clearSearch');
    const checkSemua = document.getElementById('checkSemua');
    const categoryCheckboxes = document.querySelectorAll('.filter-ppid');
    const categoryCards = document.querySelectorAll('.ppid-category-card');
    const globalEmpty = document.getElementById('ppidGlobalEmpty');
    const resetPPID = document.getElementById('resetPPID');

    // Jumlah dokumen yang ditampilkan per halaman dalam setiap kategori.
    const ITEMS_PER_PAGE = 5;

    // Menyimpan halaman aktif masing-masing kategori.
    const currentPages = new WeakMap();

    function getCurrentPage(card) {
        return currentPages.get(card) || 1;
    }

    function setCurrentPage(card, page) {
        currentPages.set(card, page);
    }

    function updateSelectAll() {
        const checkedCount = document.querySelectorAll(
            '.filter-ppid:checked'
        ).length;

        checkSemua.checked =
            checkedCount === categoryCheckboxes.length;

        checkSemua.indeterminate =
            checkedCount > 0 &&
            checkedCount < categoryCheckboxes.length;
    }

    function renderPagination(card, totalItems) {
        const pagination = card.querySelector('[data-pagination]');
        const numbers = card.querySelector('[data-page-numbers]');
        const prev = card.querySelector('[data-page-prev]');
        const next = card.querySelector('[data-page-next]');
        const info = card.querySelector('[data-page-info]');

        const totalPages = Math.ceil(totalItems / ITEMS_PER_PAGE);

        if (totalPages <= 1) {
            pagination.hidden = true;
            numbers.innerHTML = '';
            return;
        }

        pagination.hidden = false;

        let page = getCurrentPage(card);
        page = Math.max(1, Math.min(page, totalPages));
        setCurrentPage(card, page);

        prev.disabled = page === 1;
        next.disabled = page === totalPages;

        numbers.innerHTML = '';

        // Maksimal lima nomor halaman terlihat sekaligus.
        let startPage = Math.max(1, page - 2);
        let endPage = Math.min(totalPages, startPage + 4);

        startPage = Math.max(1, endPage - 4);

        for (let i = startPage; i <= endPage; i++) {
            const button = document.createElement('button');

            button.type = 'button';
            button.className = 'ppid-page-number';
            button.textContent = i;
            button.setAttribute('aria-label', 'Halaman ' + i);

            if (i === page) {
                button.classList.add('active');
                button.setAttribute('aria-current', 'page');
            }

            button.addEventListener('click', function () {
                setCurrentPage(card, i);
                filterPPID();
            });

            numbers.appendChild(button);
        }

        const firstItem = (page - 1) * ITEMS_PER_PAGE + 1;
        const lastItem = Math.min(
            page * ITEMS_PER_PAGE,
            totalItems
        );

        info.textContent =
            'Menampilkan ' + firstItem + '-' + lastItem +
            ' dari ' + totalItems + ' dokumen';
    }

    function filterPPID() {
        const search = searchInput.value.trim().toLowerCase();

        const selectedCategories = Array.from(categoryCheckboxes)
            .filter(input => input.checked)
            .map(input => input.value);

        let totalResults = 0;

        categoryCards.forEach(function (card) {
            const category = card.dataset.category;

            const categoryActive =
                selectedCategories.includes(category);

            const documents = Array.from(
                card.querySelectorAll('[data-page-item]')
            );

            const emptyMessage = card.querySelector('.ppid-no-results');
            const emptyCategory = card.querySelector('.ppid-empty-category');

            // Cari semua dokumen yang cocok sebelum menerapkan pagination.
            const matchedDocuments = documents.filter(function (item) {
                const text = (
                    item.dataset.search || item.innerText
                ).toLowerCase();

                return categoryActive && text.includes(search);
            });

            totalResults += matchedDocuments.length;

            const totalPages = Math.ceil(
                matchedDocuments.length / ITEMS_PER_PAGE
            );

            let page = getCurrentPage(card);

            // Kembali ke halaman pertama jika halaman sebelumnya sudah tidak ada.
            if (page > totalPages) {
                page = 1;
                setCurrentPage(card, page);
            }

            const startIndex = (page - 1) * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;

            // Tampilkan hanya dokumen untuk halaman aktif.
            documents.forEach(function (item) {
                item.hidden = true;
            });

            matchedDocuments.slice(startIndex, endIndex)
                .forEach(function (item) {
                    item.hidden = false;
                });

            card.classList.toggle(
                'is-hidden',
                !categoryActive
            );

            if (emptyCategory) {
                emptyCategory.hidden =
                    !categoryActive ||
                    search !== '' ||
                    documents.length > 0;
            }

            if (emptyMessage) {
                emptyMessage.hidden =
                    !categoryActive ||
                    search === '' ||
                    matchedDocuments.length > 0;
            }

            renderPagination(card, matchedDocuments.length);
        });

        updateSelectAll();

        globalEmpty.hidden = totalResults > 0;

        if (totalResults === 0) {
            const emptyTitle = globalEmpty.querySelector('h3');
            const emptyText = globalEmpty.querySelector('p');

            if (selectedCategories.length === 0) {
                emptyTitle.textContent = 'Belum ada kategori dipilih';
                emptyText.textContent =
                    'Aktifkan minimal satu checklist kategori untuk menampilkan dokumen.';
            } else {
                emptyTitle.textContent = 'Dokumen tidak ditemukan';
                emptyText.textContent =
                    'Coba kata kunci lain atau aktifkan kategori lainnya.';
            }
        }
    }

    // Navigasi halaman sebelumnya/berikutnya untuk masing-masing kategori.
    categoryCards.forEach(function (card) {
        setCurrentPage(card, 1);

        card.querySelector('[data-page-prev]').addEventListener(
            'click',
            function () {
                setCurrentPage(
                    card,
                    Math.max(1, getCurrentPage(card) - 1)
                );
                filterPPID();
            }
        );

        card.querySelector('[data-page-next]').addEventListener(
            'click',
            function () {
                setCurrentPage(card, getCurrentPage(card) + 1);
                filterPPID();
            }
        );
    });

    checkSemua.addEventListener('change', function () {
        categoryCheckboxes.forEach(function (checkbox) {
            checkbox.checked = checkSemua.checked;
        });

        filterPPID();
    });

    categoryCheckboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            // Kembalikan kategori yang berubah ke halaman pertama.
            categoryCards.forEach(function (card) {
                if (card.dataset.category === checkbox.value) {
                    setCurrentPage(card, 1);
                }
            });

            filterPPID();
        });
    });

    searchInput.addEventListener('input', function () {
        // Pencarian baru dimulai dari halaman pertama tiap kategori.
        categoryCards.forEach(function (card) {
            setCurrentPage(card, 1);
        });

        filterPPID();
    });

    clearSearch.addEventListener('click', function () {
        searchInput.value = '';

        categoryCards.forEach(function (card) {
            setCurrentPage(card, 1);
        });

        filterPPID();
        searchInput.focus();
    });

    if (resetPPID) {
        resetPPID.addEventListener('click', function () {
            searchInput.value = '';

            categoryCheckboxes.forEach(function (checkbox) {
                checkbox.checked = true;
            });

            categoryCards.forEach(function (card) {
                setCurrentPage(card, 1);
            });

            filterPPID();
        });
    }

    filterPPID();
});
</script>

@endsection
