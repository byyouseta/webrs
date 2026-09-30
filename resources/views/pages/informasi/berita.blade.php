@extends('layouts.app-web')

@section('title', 'Berita | RSUP Surakarta')

@section('content')

<style>

    /* =========================================
       PAGE
    ========================================= */

    .berita-page {
        padding: 50px 0 80px;
        background: #f8fafc;
    }


    /* =========================================
       HEADER
    ========================================= */

    .berita-header {
        margin-bottom: 35px;
    }

    .berita-breadcrumb {
        font-size: 14px;
        color: #777;
        margin-bottom: 12px;
    }

    .berita-breadcrumb a {
        color: #0d6efd;
        text-decoration: none;
    }

    .berita-breadcrumb a:hover {
        text-decoration: underline;
    }

    .berita-title {
        font-size: 34px;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }

    .berita-subtitle {
        margin-top: 8px;
        color: #6b7280;
        font-size: 15px;
    }


    /* =========================================
       MAIN
    ========================================= */

    .berita-main {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0,0,0,.06);
        transition: .3s;
    }

    .berita-main:hover {
        box-shadow: 0 10px 35px rgba(0,0,0,.09);
    }


    .berita-main-image {
        width: 100%;
        height: 390px;
        object-fit: cover;
        display: block;
    }


    .berita-main-body {
        padding: 28px;
    }


    /* =========================================
       TAG
    ========================================= */

    .berita-tag {
        display: inline-block;

        background: #e8f3ff;
        color: #0d6efd;

        padding: 6px 13px;

        border-radius: 30px;

        font-size: 12px;
        font-weight: 600;

        margin-bottom: 12px;
    }


    /* =========================================
       TITLE
    ========================================= */

    .berita-main-title {
        font-size: 28px;
        font-weight: 700;

        line-height: 1.35;

        color: #1f2937;

        margin-bottom: 10px;
    }


    /* =========================================
       DATE
    ========================================= */

    .berita-date {
        color: #8a8f98;

        font-size: 13px;

        margin-bottom: 18px;
    }


    /* =========================================
       EXCERPT
    ========================================= */

    .berita-excerpt {
        color: #667085;

        font-size: 15px;

        line-height: 1.8;
    }


    /* =========================================
       BUTTON
    ========================================= */

    .berita-read {
        display: inline-flex;

        align-items: center;

        gap: 7px;

        margin-top: 20px;

        padding: 10px 18px;

        background: #0d6efd;

        color: #fff !important;

        border-radius: 8px;

        text-decoration: none !important;

        font-size: 14px;

        font-weight: 600;

        transition: .25s;
    }

    .berita-read:hover {
        background: #0958c7;

        transform: translateY(-2px);

        color: #fff !important;
    }


    /* =========================================
       SIDEBAR
    ========================================= */

    .berita-sidebar {
        position: sticky;
        top: 90px;
    }


    .sidebar-title {
        font-size: 18px;

        font-weight: 700;

        color: #1f2937;

        margin-bottom: 18px;
    }


    .sidebar-item {
        display: flex;

        gap: 12px;

        padding: 12px;

        margin-bottom: 12px;

        background: #fff;

        border-radius: 12px;

        text-decoration: none !important;

        color: inherit;

        box-shadow: 0 3px 15px rgba(0,0,0,.05);

        transition: .25s;
    }


    .sidebar-item:hover {
        transform: translateY(-2px);

        box-shadow: 0 7px 22px rgba(0,0,0,.09);

        text-decoration: none !important;
    }


    .sidebar-image {
        width: 85px;

        height: 70px;

        object-fit: cover;

        border-radius: 9px;

        flex-shrink: 0;
    }


    .sidebar-content {
        min-width: 0;
    }


    .sidebar-content h6 {
        font-size: 14px;

        font-weight: 600;

        line-height: 1.4;

        margin: 0 0 6px;

        color: #273444;

        display: -webkit-box;

        -webkit-line-clamp: 2;

        -webkit-box-orient: vertical;

        overflow: hidden;
    }


    .sidebar-date {
        font-size: 11px;

        color: #999;
    }


    /* =========================================
       TAGS
    ========================================= */

    .berita-tags {
        background: #fff;

        margin-top: 30px;

        padding: 25px 28px;

        border-radius: 16px;

        box-shadow: 0 4px 20px rgba(0,0,0,.05);
    }


    .berita-tags-title {
        font-size: 17px;

        font-weight: 700;

        margin-bottom: 8px;

        color: #1f2937;
    }


    .berita-tags-description {
        font-size: 13px;

        color: #777;

        margin-bottom: 15px;
    }


    .tag-item {
        display: inline-block;

        padding: 7px 13px;

        margin: 4px 3px;

        background: #f1f5f9;

        color: #475569;

        border-radius: 20px;

        font-size: 12px;

        text-decoration: none;
    }


    .tag-item:hover {
        background: #e2e8f0;

        color: #1e293b;

        text-decoration: none;
    }


    /* =========================================
       EMPTY
    ========================================= */

    .berita-empty {
        text-align: center;

        padding: 70px 20px;

        background: #fff;

        border-radius: 16px;

        color: #999;
    }


    /* =========================================
       MOBILE
    ========================================= */

    @media(max-width: 991px) {

        .berita-main-image {
            height: 300px;
        }

        .berita-sidebar {
            position: static;

            margin-top: 30px;
        }

    }


    @media(max-width: 576px) {

        .berita-page {
            padding: 30px 0 50px;
        }

        .berita-title {
            font-size: 27px;
        }

        .berita-main-title {
            font-size: 22px;
        }

        .berita-main-image {
            height: 220px;
        }

        .berita-main-body {
            padding: 20px;
        }

    }

</style>


<div class="berita-page">

    <div class="container">


        {{-- =========================================
             HEADER
        ========================================== --}}

        <div class="berita-header">

            <div class="berita-breadcrumb">

                <a href="/yangterbaru/berita">
                    Home
                </a>

                <span class="mx-2">
                    /
                </span>

                Berita

            </div>


            <h1 class="berita-title">

                Berita

            </h1>


            <div class="berita-subtitle">

                Informasi dan berita terbaru
                RSUP Surakarta

            </div>

        </div>



        {{-- =========================================
             CEK DATA
        ========================================== --}}

        @if($berita->count())


            <div class="row">


                {{-- =================================
                     BERITA UTAMA
                ================================== --}}

                <div class="col-lg-8">


                    @php

                        $mainBerita = $berita->first();

                        $mainTranslation =
                            $mainBerita->translations->first();

                    @endphp


                    @if($mainTranslation)


                        <article class="berita-main">


                            {{-- GAMBAR --}}

                            @if($mainBerita->thumbnail)

                                <img
                                    src="{{ asset('storage/'.$mainBerita->thumbnail) }}"
                                    class="berita-main-image"
                                    alt="{{ $mainTranslation->title }}"
                                >

                            @endif



                            <div class="berita-main-body">


                                {{-- TAG --}}

                                <span class="berita-tag">

                                    Berita

                                </span>



                                {{-- JUDUL --}}

                                <h2 class="berita-main-title">

                                    {{ $mainTranslation->title }}

                                </h2>



                                {{-- TANGGAL --}}

                                <div class="berita-date">

                                    <i class="fas fa-calendar-alt mr-1"></i>


                                    {{ $mainBerita->published_at
                                        ? \Carbon\Carbon::parse(
                                            $mainBerita->published_at
                                          )->translatedFormat('d F Y')

                                        : \Carbon\Carbon::parse(
                                            $mainBerita->created_at
                                          )->translatedFormat('d F Y')
                                    }}

                                </div>



                                {{-- EXCERPT --}}

                                @if($mainTranslation->excerpt)

                                    <div class="berita-excerpt">

                                        {{ strip_tags(
                                            $mainTranslation->excerpt
                                        ) }}

                                    </div>

                                @elseif($mainTranslation->content)

                                    <div class="berita-excerpt">

                                        {{ \Illuminate\Support\Str::limit(
                                            strip_tags(
                                                $mainTranslation->content
                                            ),
                                            300
                                        ) }}

                                    </div>

                                @endif



                                {{-- BUTTON --}}

                                <a
                                    href="{{ route(
                                        'berita.detail',
                                        $mainTranslation->slug
                                    ) }}"
                                    class="berita-read"
                                >

                                    Baca Selengkapnya

                                    <i class="fas fa-arrow-right"></i>

                                </a>


                            </div>

                        </article>


                    @endif


                </div>



                {{-- =================================
                     SIDEBAR
                ================================== --}}

                <div class="col-lg-4">


                    <div class="berita-sidebar">


                        <div class="sidebar-title">

                            Berita Lainnya

                        </div>



                        @foreach($berita->skip(1) as $item)


                            @php

                                $translation =
                                    $item->translations->first();

                            @endphp


                            @if($translation)


                                <a
                                    href="{{ route(
                                        'artikel.detail',
                                        $translation->slug
                                    ) }}"
                                    class="sidebar-item"
                                >


                                    @if($item->thumbnail)

                                        <img
                                            src="{{ asset(
                                                'storage/'.$item->thumbnail
                                            ) }}"
                                            class="sidebar-image"
                                            alt="{{ $translation->title }}"
                                        >

                                    @endif



                                    <div class="sidebar-content">


                                        <h6>

                                            {{ $translation->title }}

                                        </h6>



                                        <div class="sidebar-date">

                                            {{ $item->published_at
                                                ? \Carbon\Carbon::parse(
                                                    $item->published_at
                                                  )->translatedFormat('d M Y')

                                                : \Carbon\Carbon::parse(
                                                    $item->created_at
                                                  )->translatedFormat('d M Y')
                                            }}

                                        </div>


                                    </div>


                                </a>


                            @endif


                        @endforeach


                    </div>


                </div>


            </div>



            {{-- =================================
                 TAGS
            ================================== --}}

            <div class="berita-tags">


                <div class="berita-tags-title">

                    Tags

                </div>


                <div class="berita-tags-description">

                    Temukan berita dan informasi
                    terbaru RSUP Surakarta.

                </div>


                <div>


                    <span class="tag-item">

                        Kesehatan

                    </span>


                    <span class="tag-item">

                        Pelayanan

                    </span>


                    <span class="tag-item">

                        Rumah Sakit

                    </span>


                    <span class="tag-item">

                        RSUP Surakarta

                    </span>


                    <span class="tag-item">

                        Berita

                    </span>


                </div>


            </div>


        @else


            {{-- =================================
                 EMPTY
            ================================== --}}

            <div class="berita-empty">

                <i class="fas fa-newspaper fa-3x mb-3"></i>


                <h5>

                    Belum ada berita

                </h5>


                <p>

                    Berita belum tersedia saat ini.

                </p>


            </div>


        @endif


    </div>

</div>

@endsection
