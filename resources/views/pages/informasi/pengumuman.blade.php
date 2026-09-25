@extends('layouts.app-web')

@section('title', 'Pengumuman | RSUP Surakarta')

@section('content')

<style>

    .pengumuman-page {
        padding: 50px 0 80px;
        background: #f8fafc;
    }

    .pengumuman-header {
        margin-bottom: 35px;
    }

    .pengumuman-breadcrumb {
        font-size: 14px;
        color: #777;
        margin-bottom: 12px;
    }

    .pengumuman-breadcrumb a {
        color: #0d6efd;
        text-decoration: none;
    }

    .pengumuman-title {
        font-size: 34px;
        font-weight: 700;
        color: #1f2937;
        margin: 0;
    }

    .pengumuman-subtitle {
        margin-top: 8px;
        color: #6b7280;
        font-size: 15px;
    }


    /* MAIN */

    .pengumuman-main {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0,0,0,.06);
    }

    .pengumuman-main-image {
        width: 100%;
        height: 390px;
        object-fit: cover;
        display: block;
    }

    .pengumuman-main-body {
        padding: 28px;
    }

    .pengumuman-tag {
        display: inline-block;
        background: #fff4df;
        color: #d88900;
        padding: 6px 13px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .pengumuman-main-title {
        font-size: 28px;
        font-weight: 700;
        line-height: 1.35;
        color: #1f2937;
        margin-bottom: 10px;
    }

    .pengumuman-date {
        color: #8a8f98;
        font-size: 13px;
        margin-bottom: 18px;
    }

    .pengumuman-excerpt {
        color: #667085;
        font-size: 15px;
        line-height: 1.8;
    }

    .pengumuman-read {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-top: 20px;
        padding: 10px 18px;
        background: #d88900;
        color: #fff !important;
        border-radius: 8px;
        text-decoration: none !important;
        font-size: 14px;
        font-weight: 600;
        transition: .25s;
    }

    .pengumuman-read:hover {
        background: #b97200;
        transform: translateY(-2px);
    }


    /* SIDEBAR */

    .pengumuman-sidebar {
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

    .pengumuman-tags {
        background: #fff;
        margin-top: 30px;
        padding: 25px 28px;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0,0,0,.05);
    }

    .pengumuman-tags-title {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #1f2937;
    }

    .pengumuman-tags-description {
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


    .pengumuman-empty {
        text-align: center;
        padding: 70px 20px;
        background: #fff;
        border-radius: 16px;
        color: #999;
    }


    @media(max-width: 991px) {

        .pengumuman-main-image {
            height: 300px;
        }

        .pengumuman-sidebar {
            position: static;
            margin-top: 30px;
        }

    }


    @media(max-width: 576px) {

        .pengumuman-page {
            padding: 30px 0 50px;
        }

        .pengumuman-title {
            font-size: 27px;
        }

        .pengumuman-main-title {
            font-size: 22px;
        }

        .pengumuman-main-image {
            height: 220px;
        }

        .pengumuman-main-body {
            padding: 20px;
        }

    }

</style>


<div class="pengumuman-page">

    <div class="container">

        {{-- HEADER --}}

        <div class="pengumuman-header">

            <div class="pengumuman-breadcrumb">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <span class="mx-2">/</span>

                Pengumuman

            </div>

            <h1 class="pengumuman-title">
                Pengumuman
            </h1>

            <div class="pengumuman-subtitle">
                Informasi dan pengumuman resmi RSUP Surakarta
            </div>

        </div>


        @if($pengumuman->count())

            <div class="row">

                {{-- MAIN --}}

                <div class="col-lg-8">

                    @php

                        $mainPengumuman = $pengumuman->first();

                        $mainTranslation =
                            $mainPengumuman->translations->first();

                    @endphp


                    @if($mainTranslation)

                        <article class="pengumuman-main">

                            @if($mainPengumuman->thumbnail)

                                <img
                                    src="{{ asset('storage/'.$mainPengumuman->thumbnail) }}"
                                    class="pengumuman-main-image"
                                    alt="{{ $mainTranslation->title }}"
                                >

                            @endif


                            <div class="pengumuman-main-body">

                                <span class="pengumuman-tag">
                                    Pengumuman
                                </span>


                                <h2 class="pengumuman-main-title">

                                    {{ $mainTranslation->title }}

                                </h2>


                                <div class="pengumuman-date">

                                    <i class="fas fa-calendar-alt mr-1"></i>

                                    {{ $mainPengumuman->published_at
                                        ? \Carbon\Carbon::parse($mainPengumuman->published_at)->translatedFormat('d F Y')
                                        : \Carbon\Carbon::parse($mainPengumuman->created_at)->translatedFormat('d F Y')
                                    }}

                                </div>


                                @if($mainTranslation->excerpt)

                                    <div class="pengumuman-excerpt">

                                        {{ strip_tags($mainTranslation->excerpt) }}

                                    </div>

                                @elseif($mainTranslation->content)

                                    <div class="pengumuman-excerpt">

                                        {{ \Illuminate\Support\Str::limit(strip_tags($mainTranslation->content), 300) }}

                                    </div>

                                @endif


                                <a
                                    href="{{ route('artikel.detail', $mainTranslation->slug) }}"
                                    class="pengumuman-read"
                                >

                                    Lihat Pengumuman

                                    <i class="fas fa-arrow-right"></i>

                                </a>

                            </div>

                        </article>

                    @endif

                </div>


                {{-- SIDEBAR --}}

                <div class="col-lg-4">

                    <div class="pengumuman-sidebar">

                        <div class="sidebar-title">
                            Pengumuman Lainnya
                        </div>


                        @foreach($pengumuman->skip(1) as $item)

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

                            @endif

                        @endforeach

                    </div>

                </div>

            </div>


            {{-- TAGS --}}

            <div class="pengumuman-tags">

                <div class="pengumuman-tags-title">
                    Tags
                </div>

                <div class="pengumuman-tags-description">
                    Informasi terkait pengumuman RSUP Surakarta.
                </div>

                <div>

                    <span class="tag-item">
                        Pengumuman
                    </span>

                    <span class="tag-item">
                        Informasi
                    </span>

                    <span class="tag-item">
                        Pelayanan
                    </span>

                    <span class="tag-item">
                        RSUP Surakarta
                    </span>

                </div>

            </div>

        @else

            <div class="pengumuman-empty">

                <i class="fas fa-bullhorn fa-3x mb-3"></i>

                <h5>
                    Belum ada pengumuman
                </h5>

                <p>
                    Pengumuman belum tersedia saat ini.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection
