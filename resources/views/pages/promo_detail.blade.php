@extends('layouts.app-web')

@section('title', $promotion->translation->title . ' | RSUP Surakarta')


{{-- =========================
     META SOCIAL MEDIA
========================= --}}

@section('meta')

    <meta property="og:type" content="article">

    <meta property="og:title"
          content="{{ $promotion->translation->title }}">

    <meta property="og:description"
          content="{{ \Illuminate\Support\Str::limit(
              strip_tags($promotion->translation->description ?? ''),
              160
          ) }}">

    @if($promotion->image)

        <meta property="og:image"
              content="{{ asset('storage/'.$promotion->image) }}">

        <meta property="og:image:secure_url"
              content="{{ asset('storage/'.$promotion->image) }}">

        <meta property="og:image:alt"
              content="{{ $promotion->translation->title }}">

    @endif

    <meta property="og:url"
          content="{{ url()->current() }}">

    <meta property="og:site_name"
          content="RSUP Surakarta">


    <meta name="twitter:card"
          content="summary_large_image">

    <meta name="twitter:title"
          content="{{ $promotion->translation->title }}">

    <meta name="twitter:description"
          content="{{ \Illuminate\Support\Str::limit(
              strip_tags($promotion->translation->description ?? ''),
              160
          ) }}">

    @if($promotion->image)

        <meta name="twitter:image"
              content="{{ asset('storage/'.$promotion->image) }}">

        <meta name="twitter:image:alt"
              content="{{ $promotion->translation->title }}">

    @endif

@endsection


@section('content')

<style>

    /* =========================================
       PROMO DETAIL
    ========================================= */

    .promo-detail-page {
        background: #f6f8fb;
        padding: 45px 0 70px;
    }


    /* =========================================
       BREADCRUMB
    ========================================= */

    .promo-breadcrumb {
        margin-bottom: 25px;
        font-size: 14px;
        color: #8a8f98;
    }

    .promo-breadcrumb a {
        color: #0d6efd;
        text-decoration: none;
    }

    .promo-breadcrumb a:hover {
        text-decoration: underline;
    }


    /* =========================================
       MAIN CARD
    ========================================= */

    .promo-main-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0,0,0,.06);
    }


    /* =========================================
       IMAGE
    ========================================= */

    .promo-main-image {
        width: 100%;
        max-height: 520px;
        object-fit: cover;
        display: block;
    }


    /* =========================================
       CONTENT
    ========================================= */

    .promo-main-content {
        padding: 30px;
    }

    .promo-label {
        display: inline-block;
        padding: 6px 14px;
        background: #e8f3ff;
        color: #0d6efd;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .promo-title {
        margin: 0 0 12px;
        font-size: 32px;
        line-height: 1.35;
        font-weight: 700;
        color: #1f2937;
    }

    .promo-date {
        font-size: 13px;
        color: #8a8f98;
        margin-bottom: 25px;
    }

    .promo-description {
        color: #4b5563;
        font-size: 15px;
        line-height: 1.9;
    }

    .promo-description img {
        max-width: 100%;
        height: auto;
    }

    .promo-description p {
        margin-bottom: 15px;
    }


    /* =========================================
       SERVICE
    ========================================= */

    .promo-service {
        margin-top: 30px;
        padding: 18px 20px;
        background: #f8fafc;
        border-radius: 12px;
        border: 1px solid #edf0f4;
    }

    .promo-service-label {
        font-size: 12px;
        color: #8a8f98;
        margin-bottom: 5px;
    }

    .promo-service-name {
        font-size: 15px;
        font-weight: 600;
        color: #1f2937;
    }


    /* =========================================
       SIDEBAR
    ========================================= */

    .promo-sidebar {
        position: sticky;
        top: 90px;
    }

    .promo-sidebar-title {
        font-size: 19px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 18px;
    }


    .promo-sidebar-item {
        display: flex;
        gap: 12px;

        padding: 12px;
        margin-bottom: 12px;

        background: #fff;

        border-radius: 12px;

        color: inherit;
        text-decoration: none !important;

        box-shadow: 0 3px 15px rgba(0,0,0,.05);

        transition: all .25s ease;
    }

    .promo-sidebar-item:hover {
        transform: translateY(-2px);

        box-shadow: 0 8px 22px rgba(0,0,0,.09);
    }


    .promo-sidebar-image {
        width: 85px;
        height: 70px;

        object-fit: cover;

        border-radius: 9px;

        flex-shrink: 0;
    }


    .promo-sidebar-content {
        min-width: 0;
    }

    .promo-sidebar-content h6 {
        margin: 0 0 6px;

        font-size: 14px;
        line-height: 1.4;
        font-weight: 600;

        color: #273444;

        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;

        overflow: hidden;
    }

    .promo-sidebar-date {
        font-size: 11px;
        color: #999;
    }


    /* =========================================
       INFO BAWAH
    ========================================= */

    .promo-information {
        background: #fff;

        margin-top: 25px;
        padding: 25px 30px;

        border-radius: 16px;

        box-shadow: 0 4px 20px rgba(0,0,0,.05);
    }

    .promo-information-title {
        font-size: 17px;
        font-weight: 700;
        color: #1f2937;

        margin-bottom: 8px;
    }

    .promo-information-text {
        font-size: 14px;
        line-height: 1.7;
        color: #6b7280;
    }


    /* =========================================
       PERIODE
    ========================================= */

    .promo-period {
        display: inline-flex;
        align-items: center;

        margin-top: 12px;

        padding: 8px 14px;

        background: #f1f5f9;

        border-radius: 20px;

        font-size: 12px;
        color: #475569;
    }


    /* =========================================
       BACK BUTTON
    ========================================= */

    .promo-back {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        margin-top: 25px;

        padding: 10px 17px;

        background: #fff;

        color: #475569 !important;

        border-radius: 8px;

        text-decoration: none !important;

        font-size: 13px;

        box-shadow: 0 3px 12px rgba(0,0,0,.05);

        transition: .2s;
    }

    .promo-back:hover {
        background: #f1f5f9;
    }


    /* =========================================
       MOBILE
    ========================================= */

    @media(max-width: 991px) {

        .promo-sidebar {
            position: static;
            margin-top: 30px;
        }

    }


    @media(max-width: 576px) {

        .promo-detail-page {
            padding: 30px 0 50px;
        }

        .promo-main-content {
            padding: 20px;
        }

        .promo-title {
            font-size: 24px;
        }

        .promo-main-image {
            max-height: 350px;
        }

    }

</style>


<div class="promo-detail-page">

    <div class="container">


        {{-- =====================================
             BREADCRUMB
        ====================================== --}}

        <div class="promo-breadcrumb">

            <a href="{{ url('/') }}">
                Home
            </a>

            <span class="mx-2">/</span>

            <a href="{{ route('promo') }}">
                Promo
            </a>

            <span class="mx-2">/</span>

            <span>
                {{ $promotion->translation->title }}
            </span>

        </div>



        <div class="row">


            {{-- =====================================
                 KONTEN UTAMA
            ====================================== --}}

            <div class="col-lg-8">

                <article class="promo-main-card">


                    {{-- GAMBAR PROMO --}}

                    @if($promotion->image)

                        <img
                            src="{{ asset('storage/'.$promotion->image) }}"
                            class="promo-main-image"
                            alt="{{ $promotion->translation->title }}"
                        >

                    @endif



                    <div class="promo-main-content">


                        {{-- LABEL --}}

                        <span class="promo-label">

                            PROMO

                        </span>



                        {{-- JUDUL --}}

                        <h1 class="promo-title">

                            {{ $promotion->translation->title }}

                        </h1>



                        {{-- PERIODE --}}

                        <div class="promo-date">

                            <i class="fas fa-calendar-alt mr-1"></i>

                            Berlaku

                            @if($promotion->start_date)

                                {{ $promotion->start_date->translatedFormat('d F Y') }}

                            @endif

                            -

                            @if($promotion->end_date)

                                {{ $promotion->end_date->translatedFormat('d F Y') }}

                            @endif

                        </div>



                        {{-- DESKRIPSI --}}

                        <div class="promo-description">

                            {!! $promotion->translation->description !!}

                        </div>



                        {{-- SERVICE --}}

                        @if($promotion->service)

                            <div class="promo-service">

                                <div class="promo-service-label">

                                    Layanan

                                </div>

                                <div class="promo-service-name">

                                    {{ $promotion->service->name }}

                                </div>

                            </div>

                        @endif


                    </div>

                </article>



                {{-- =====================================
                     INFORMASI SINGKAT
                ====================================== --}}

                <div class="promo-information">

                    <div class="promo-information-title">

                        Informasi Promo

                    </div>

                    <div class="promo-information-text">

                        Promo ini tersedia selama periode yang
                        telah ditentukan oleh RSUP Surakarta.

                    </div>


                    @if($promotion->start_date && $promotion->end_date)

                        <div class="promo-period">

                            <i class="fas fa-clock mr-1"></i>

                            Berlaku sampai

                            {{ $promotion->end_date->translatedFormat('d F Y') }}

                        </div>

                    @endif

                </div>



                {{-- KEMBALI --}}

                <a
                    href="{{ route('promo') }}"
                    class="promo-back"
                >

                    <i class="fas fa-arrow-left"></i>

                    Kembali ke Promo

                </a>

            </div>



            {{-- =====================================
                 SIDEBAR
            ====================================== --}}

            <div class="col-lg-4">

                <div class="promo-sidebar">


                    <div class="promo-sidebar-title">

                        Promo Lainnya

                    </div>



                    @php

                        $otherPromotions = \App\Models\Promotion::active()
                            ->with('translation')
                            ->where('id', '!=', $promotion->id)
                            ->latest()
                            ->take(5)
                            ->get();

                    @endphp



                    @foreach($otherPromotions as $other)

                        @if($other->translation)

                            <a
                                href="{{ route(
                                    'promo.detail',
                                    $other->encoded_id
                                ) }}"
                                class="promo-sidebar-item"
                            >


                                @if($other->image)

                                    <img
                                        src="{{ asset('storage/'.$other->image) }}"
                                        class="promo-sidebar-image"
                                        alt="{{ $other->translation->title }}"
                                    >

                                @endif


                                <div class="promo-sidebar-content">

                                    <h6>

                                        {{ $other->translation->title }}

                                    </h6>


                                    <div class="promo-sidebar-date">

                                        {{ $other->start_date
                                            ? $other->start_date->translatedFormat('d M Y')
                                            : '-'
                                        }}

                                    </div>

                                </div>


                            </a>

                        @endif

                    @endforeach


                </div>

            </div>

        </div>

    </div>

</div>

@endsection
