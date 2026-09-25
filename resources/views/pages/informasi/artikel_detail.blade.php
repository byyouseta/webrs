@extends('layouts.app-web')

@section('title', $translation->title)

@section('meta')

    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $translation->title }}">
    <meta property="og:description" content="{{ $translation->excerpt
              ? Str::limit(strip_tags($translation->excerpt), 160)
              : Str::limit(strip_tags($translation->content), 160) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="RSUP Surakarta">

    <meta property="og:image" content="{{ asset('storage/' . $article->thumbnail) }}">
    <meta property="og:image:secure_url" content="{{ asset('storage/' . $article->thumbnail) }}">
    <meta property="og:image:alt" content="{{ $translation->title }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="article:published_time" content="{{ \Carbon\Carbon::parse($article->published_at)->toIso8601String() }}">
    <meta property="article:section" content="{{ ucfirst($article->type) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $translation->title }}">
    <meta name="twitter:description" content="{{ $translation->excerpt
              ? Str::limit(strip_tags($translation->excerpt), 160)
              : Str::limit(strip_tags($translation->content), 160) }}">

        <meta name="twitter:image" content="{{ asset('storage/' . $article->thumbnail) }}">
        <meta name="twitter:image:alt" content="{{ $translation->title }}">

@endsection

@section('content')

<div class="article-page">

    {{-- =========================================
        BREADCRUMB
    ========================================== --}}
    <div class="article-container">

        <div class="article-breadcrumb">

            <a href="{{ url('/') }}">
                <i class="fas fa-home"></i>
                Home
            </a>

            <span>/</span>

            <a href="{{ url('/yangterbaru/artikel') }}">
                Artikel
            </a>

            <span>/</span>

            <span>{{ Str::limit($translation->title, 40) }}</span>

        </div>


        {{-- =========================================
            ARTICLE HEADER
        ========================================== --}}
        <article class="article-detail">

            {{-- CATEGORY --}}
            <div class="article-category">

                <span>
                    {{ ucfirst($article->type) }}
                </span>

            </div>


            {{-- TITLE --}}
            <h1 class="article-title">
                {{ $translation->title }}
            </h1>


            {{-- EXCERPT --}}
            @if($translation->excerpt)

                <div class="article-excerpt">
                    {{ $translation->excerpt }}
                </div>

            @endif


            {{-- META --}}
            <div class="article-meta">

                <div>

                    <i class="far fa-calendar-alt"></i>

                    {{ $article->published_at
                        ? \Carbon\Carbon::parse($article->published_at)->translatedFormat('d F Y')
                        : \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y')
                    }}

                </div>

                <span>•</span>

                <div>

                    <i class="far fa-clock"></i>

                    {{ \Carbon\Carbon::parse(
                        $article->published_at ?? $article->created_at
                    )->format('H:i') }}

                </div>

            </div>


            {{-- =========================================
                THUMBNAIL
            ========================================== --}}
            @if($article->thumbnail)

                <div class="article-cover">

                    <img
                        src="{{ asset('storage/'.$article->thumbnail) }}"
                        alt="{{ $translation->title }}"
                    >

                </div>

            @endif


            {{-- =========================================
                CONTENT
            ========================================== --}}
            <div class="article-content">

                {!! $translation->content !!}

            </div>


            {{-- =========================================
                TAG
            ========================================== --}}
            @if(!empty($article->type))

                <div class="article-tags">

                    <span class="tag-label">
                        <i class="fas fa-tags"></i>
                        Tag:
                    </span>

                    <a href="#">
                        #{{ strtolower($article->type) }}
                    </a>

                </div>

            @endif


            {{-- =========================================
                SHARE
            ========================================== --}}
            <div class="article-share">

                <span>
                    Bagikan artikel
                </span>

                <div class="share-buttons">

                    {{-- WHATSAPP --}}
                    <a
                        href="https://wa.me/?text={{ urlencode($translation->title.' '.url()->current()) }}"
                        target="_blank"
                        class="share-wa"
                        title="Bagikan ke WhatsApp"
                    >
                        <i class="fab fa-whatsapp"></i>
                    </a>


                    {{-- FACEBOOK --}}
                    <a
                        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                        target="_blank"
                        class="share-facebook"
                        title="Bagikan ke Facebook"
                    >
                        <i class="fab fa-facebook-f"></i>
                    </a>


                    {{-- COPY --}}
                    <button
                        type="button"
                        class="share-copy"
                        onclick="copyArticleLink()"
                        title="Salin link"
                    >
                        <i class="fas fa-link"></i>
                    </button>

                </div>

            </div>

        </article>


        {{-- =========================================
            BACK
        ========================================== --}}
        <div class="article-back">

            <a href="{{ url('/yangterbaru/artikel') }}">

                <i class="fas fa-arrow-left"></i>

                Kembali ke artikel

            </a>

        </div>

    </div>

</div>


{{-- COPY TOAST --}}
<div id="copyToast" class="copy-toast">

    <i class="fas fa-check-circle"></i>

    Link berhasil disalin

</div>


<script>

function copyArticleLink()
{
    const url = window.location.href;

    navigator.clipboard.writeText(url).then(function() {

        const toast = document.getElementById('copyToast');

        toast.classList.add('show');

        setTimeout(function() {

            toast.classList.remove('show');

        }, 2000);

    });

}

</script>

@endsection
