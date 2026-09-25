@extends('layouts.app-web')

@section('title', 'Artikel | RSUP Surakarta')

@section('content')

<style>

    .artikel-page {
        padding: 50px 0 80px;
        background: #f8fafc;
    }

    /* HEADER */

    .artikel-header {
        margin-bottom: 35px;
    }

    .artikel-breadcrumb {
        font-size: 14px;
        color: #777;
        margin-bottom: 12px;
    }

    .artikel-breadcrumb a {
        color: #0d6efd;
        text-decoration: none;
    }

    .artikel-title {
        font-size: 34px;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }

    .artikel-subtitle {
        margin-top: 8px;
        color: #6b7280;
        font-size: 15px;
    }


    /* MAIN ARTICLE */

    .artikel-main {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0,0,0,.06);
        transition: .3s;
    }

    .artikel-main:hover {
        box-shadow: 0 10px 35px rgba(0,0,0,.09);
    }

    .artikel-main-image {
        width: 100%;
        height: 390px;
        object-fit: cover;
        display: block;
    }

    .artikel-main-body {
        padding: 28px;
    }

    .artikel-tag {
        display: inline-block;
        background: #e8f3ff;
        color: #0d6efd;
        padding: 6px 13px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .artikel-main-title {
        font-size: 28px;
        font-weight: 700;
        line-height: 1.35;
        color: #1f2937;
        margin-bottom: 10px;
    }

    .artikel-date {
        color: #8a8f98;
        font-size: 13px;
        margin-bottom: 18px;
    }

    .artikel-excerpt {
        color: #667085;
        font-size: 15px;
        line-height: 1.8;
    }

    .artikel-read {
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

    .artikel-read:hover {
        background: #0958c7;
        transform: translateY(-2px);
    }


    /* SIDEBAR */

    .artikel-sidebar {
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


    /* TAGS */

    .artikel-tags {
        background: #fff;
        margin-top: 30px;
        padding: 25px 28px;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0,0,0,.05);
    }

    .artikel-tags-title {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #1f2937;
    }

    .artikel-tags-description {
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


    /* EMPTY */

    .artikel-empty {
        text-align: center;
        padding: 70px 20px;
        background: #fff;
        border-radius: 16px;
        color: #999;
    }


    /* MOBILE */

    @media(max-width: 991px) {

        .artikel-main-image {
            height: 300px;
        }

        .artikel-sidebar {
            position: static;
            margin-top: 30px;
        }

    }

    @media(max-width: 576px) {

        .artikel-page {
            padding: 30px 0 50px;
        }

        .artikel-title {
            font-size: 27px;
        }

        .artikel-main-title {
            font-size: 22px;
        }

        .artikel-main-image {
            height: 220px;
        }

        .artikel-main-body {
            padding: 20px;
        }

    }

</style>


<div class="artikel-page">

    <div class="container">

        {{-- HEADER --}}
        <div class="artikel-header">

            <div class="artikel-breadcrumb">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <span class="mx-2">/</span>

                Artikel

            </div>

            <h1 class="artikel-title">
                Artikel
            </h1>

            <div class="artikel-subtitle">
                Informasi dan artikel kesehatan RSUP Surakarta
            </div>

        </div>


        @if($articles->count())

            <div class="row">

                {{-- ================= MAIN ================= --}}
                <div class="col-lg-8">

                    @php
                        $mainArticle = $articles->first();
                    @endphp

                    @php
                        $mainTranslation = $mainArticle->translations->first();
                    @endphp


                    @if($mainTranslation)

                        <article class="artikel-main">

                            @if($mainArticle->thumbnail)

                                <img
                                    src="{{ asset('storage/'.$mainArticle->thumbnail) }}"
                                    class="artikel-main-image"
                                    alt="{{ $mainTranslation->title }}"
                                >

                            @endif


                            <div class="artikel-main-body">

                                <span class="artikel-tag">
                                    Artikel
                                </span>

                                <h2 class="artikel-main-title">

                                    {{ $mainTranslation->title }}

                                </h2>


                                <div class="artikel-date">

                                    <i class="fas fa-calendar-alt mr-1"></i>

                                    {{ $mainArticle->published_at
                                        ? \Carbon\Carbon::parse($mainArticle->published_at)->translatedFormat('d F Y')
                                        : \Carbon\Carbon::parse($mainArticle->created_at)->translatedFormat('d F Y')
                                    }}

                                </div>


                                @if($mainTranslation->excerpt)

                                    <div class="artikel-excerpt">

                                        {{ strip_tags($mainTranslation->excerpt) }}

                                    </div>

                                @elseif($mainTranslation->content)

                                    <div class="artikel-excerpt">

                                        {{ \Illuminate\Support\Str::limit(strip_tags($mainTranslation->content), 300) }}

                                    </div>

                                @endif


                                <a
                                    href="{{ route('artikel.detail', $mainTranslation->slug) }}"
                                    class="artikel-read"
                                >

                                    Baca Selengkapnya

                                    <i class="fas fa-arrow-right"></i>

                                </a>

                            </div>

                        </article>

                    @endif

                </div>


                {{-- ================= SIDEBAR ================= --}}
                <div class="col-lg-4">

                    <div class="artikel-sidebar">

                        <div class="sidebar-title">
                            Artikel Lainnya
                        </div>


                        @foreach($articles->skip(1) as $item)

                            @php
                                $translation = $item->translations->first();
                            @endphp

                            @if($translation)

                                <a
                                    href="{{ route('artikel.detail', $translation->slug) }}"
                                    class="sidebar-item"
                                >

                                    @if($item->thumbnail)

                                        <img
                                            src="{{ asset('storage/'.$item->thumbnail) }}"
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
                                                ? \Carbon\Carbon::parse($item->published_at)->translatedFormat('d M Y')
                                                : \Carbon\Carbon::parse($item->created_at)->translatedFormat('d M Y')
                                            }}

                                        </div>

                                    </div>

                                </a>

                            @endforeach

                        @endif

                    </div>

                </div>

            </div>


            {{-- ================= TAGS ================= --}}
            <div class="artikel-tags">

                <div class="artikel-tags-title">
                    Tags
                </div>

                <div class="artikel-tags-description">
                    Temukan informasi lainnya berdasarkan topik artikel.
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
                        Informasi Kesehatan
                    </span>

                </div>

            </div>

        @else

            <div class="artikel-empty">

                <i class="fas fa-newspaper fa-3x mb-3"></i>

                <h5>
                    Belum ada artikel
                </h5>

                <p>
                    Artikel belum tersedia saat ini.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection
