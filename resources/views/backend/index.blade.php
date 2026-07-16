<!DOCTYPE html>
<html lang="id">

<head>
    @include('backend.partials.head.head-meta')

    <title>Dashboard Admin - RSUP Surakarta</title>

    <link
        rel="stylesheet"
        href="{{ asset('backend/assets/css/swiper-bundle.min.css') }}">

    @include('backend.partials.head.head-links')

    <style>
        .rsup-welcome {
            position: relative;
            overflow: hidden;
            min-height: 220px;
            background:
                radial-gradient(
                    circle at top right,
                    rgba(255, 255, 255, 0.25),
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #087f72 0%,
                    #0e9f8d 55%,
                    #6cc4a1 100%
                );
            color: #ffffff;
        }

        .rsup-welcome::after {
            content: "";
            position: absolute;
            right: -70px;
            bottom: -100px;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
        }

        .rsup-welcome::before {
            content: "";
            position: absolute;
            right: 130px;
            top: -80px;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        .rsup-welcome-content {
            position: relative;
            z-index: 2;
        }

        .dashboard-stat-card {
            transition: all 0.2s ease;
        }

        .dashboard-stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(15, 76, 69, 0.08);
        }

        .dashboard-icon {
            width: 52px;
            height: 52px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
        }

        .dashboard-icon svg {
            width: 26px;
            height: 26px;
        }

        .quick-menu {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px;
            border: 1px solid #e8ecef;
            border-radius: 14px;
            color: inherit;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .quick-menu:hover {
            border-color: #0e9f8d;
            background: rgba(14, 159, 141, 0.05);
            color: #087f72;
            transform: translateY(-2px);
        }

        .quick-menu-icon {
            width: 44px;
            height: 44px;
            flex-shrink: 0;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quick-menu-icon svg {
            width: 23px;
            height: 23px;
        }

        .content-avatar {
            width: 44px;
            height: 44px;
            object-fit: cover;
            border-radius: 12px;
        }

        .content-placeholder {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eef7f5;
            color: #0e9f8d;
        }

        .status-dot {
            width: 9px;
            height: 9px;
            display: inline-block;
            border-radius: 50%;
        }
    </style>
</head>

<body>

    <div>
        {{-- SIDEBAR --}}
        @include('backend.partials.sidebar-collapse')

        {{-- MAIN CONTENT --}}
        <div
            id="content"
            class="position-relative h-100">

            {{-- TOPBAR --}}
            @include('backend.partials.topbar-second')

            <div class="custom-container">

                {{-- WELCOME --}}
                <div class="row g-6 mb-6">
                    <div class="col-xl-8 col-lg-7">
                        <div class="rsup-welcome rounded-3 p-7 p-lg-8">
                            <div class="rsup-welcome-content">
                                <span
                                    class="badge bg-white text-success mb-4 px-3 py-2">
                                    Dashboard Administrator
                                </span>

                                <h1 class="fs-3 text-white mb-2">
                                    Selamat datang,
                                    {{ auth()->user()->name ?? 'Administrator' }}
                                </h1>

                                <p class="mb-1 text-white">
                                    Sistem Manajemen Konten Website RSUP Surakarta
                                </p>

                                <p
                                    class="mb-5"
                                    style="color: rgba(255,255,255,.78)">
                                    Kelola dokter, layanan, artikel, testimoni,
                                    dan informasi publik dari satu halaman.
                                </p>

                                <div class="d-flex flex-wrap gap-2">
                                    <a
                                        href="{{ route('home_web') }}"
                                        target="_blank"
                                        class="btn btn-light">
                                        Lihat Website
                                    </a>

                                    <a
                                        href="{{ url('/master/information') }}"
                                        class="btn btn-outline-light">
                                        Buat Artikel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- STATUS WEBSITE --}}
                    <div class="col-xl-4 col-lg-5">
                        <div class="card card-lg h-100">
                            <div class="card-body">
                                <div
                                    class="d-flex justify-content-between align-items-start mb-5">
                                    <div>
                                        <h5 class="mb-1">
                                            Status Website
                                        </h5>

                                        <p class="text-muted small mb-0">
                                            Informasi sistem saat ini
                                        </p>
                                    </div>

                                    <span
                                        class="badge text-success-emphasis bg-success-subtle">
                                        Online
                                    </span>
                                </div>

                                <div class="d-flex flex-column gap-4">

                                    <div
                                        class="d-flex justify-content-between align-items-center">
                                        <div
                                            class="d-flex align-items-center gap-2">
                                            <span
                                                class="status-dot bg-success">
                                            </span>

                                            <span>
                                                Website publik
                                            </span>
                                        </div>

                                        <strong class="text-success">
                                            Aktif
                                        </strong>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between align-items-center">
                                        <div
                                            class="d-flex align-items-center gap-2">
                                            <span
                                                class="status-dot bg-success">
                                            </span>

                                            <span>
                                                Panel admin
                                            </span>
                                        </div>

                                        <strong class="text-success">
                                            Aktif
                                        </strong>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between align-items-center">
                                        <div
                                            class="d-flex align-items-center gap-2">
                                            <span
                                                class="status-dot bg-info">
                                            </span>

                                            <span>
                                                Terakhir diperbarui
                                            </span>
                                        </div>

                                        <span class="text-muted">
                                            {{ now()->format('d-m-Y H:i') }}
                                        </span>
                                    </div>

                                </div>

                                <hr class="my-5">

                                <div
                                    class="d-flex align-items-center justify-content-between">
                                    <span class="text-muted">
                                        Lingkungan
                                    </span>

                                    <span
                                        class="badge bg-light text-dark">
                                        {{ app()->environment() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- STATISTIK UTAMA --}}
                <div
                    class="row row-cols-1 row-cols-sm-2 row-cols-xl-5 g-4 mb-6">

                    {{-- DOKTER --}}
                    <div class="col">
                        <div
                            class="card card-lg h-100 dashboard-stat-card">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between mb-5">
                                    <div
                                        class="dashboard-icon bg-primary-subtle text-primary">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.7"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M12 12a4 4 0 1 0 0 -8a4 4 0 0 0 0 8"/>
                                            <path d="M6 20v-2a6 6 0 0 1 12 0v2"/>
                                            <path d="M19 8v4"/>
                                            <path d="M17 10h4"/>
                                        </svg>
                                    </div>

                                    <span
                                        class="badge text-success-emphasis bg-success-subtle">
                                        Aktif
                                    </span>
                                </div>

                                <div class="fs-3 fw-bold">
                                    {{ $totalDoctors ?? \App\Models\Doctor::count() }}
                                </div>

                                <div class="text-muted mt-1">
                                    Dokter
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- LAYANAN --}}
                    <div class="col">
                        <div
                            class="card card-lg h-100 dashboard-stat-card">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between mb-5">
                                    <div
                                        class="dashboard-icon bg-success-subtle text-success">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.7"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M3 21h18"/>
                                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"/>
                                            <path d="M9 9h6"/>
                                            <path d="M12 6v6"/>
                                            <path d="M9 17h.01"/>
                                            <path d="M15 17h.01"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="fs-3 fw-bold">
                                    {{ $totalServices ?? \App\Models\Service::count() }}
                                </div>

                                <div class="text-muted mt-1">
                                    Layanan
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ARTIKEL --}}
                    <div class="col">
                        <div
                            class="card card-lg h-100 dashboard-stat-card">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between mb-5">
                                    <div
                                        class="dashboard-icon bg-warning-subtle text-warning">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.7"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M6 4h12a2 2 0 0 1 2 2v14h-14a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"/>
                                            <path d="M8 8h8"/>
                                            <path d="M8 12h8"/>
                                            <path d="M8 16h4"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="fs-3 fw-bold">
                                    {{ $totalArticles ?? \App\Models\Article::count() }}
                                </div>

                                <div class="text-muted mt-1">
                                    Artikel
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TESTIMONI --}}
                    <div class="col">
                        <div
                            class="card card-lg h-100 dashboard-stat-card">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between mb-5">
                                    <div
                                        class="dashboard-icon bg-info-subtle text-info">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.7"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M8 9h8"/>
                                            <path d="M8 13h6"/>
                                            <path d="M12 21l-4 -4h-3a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-3z"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="fs-3 fw-bold">
                                    {{ $totalTestimonials ?? \App\Models\Testimonial::count() }}
                                </div>

                                <div class="text-muted mt-1">
                                    Testimoni
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- PPID --}}
                    <div class="col">
                        <div
                            class="card card-lg h-100 dashboard-stat-card">
                            <div class="card-body">
                                <div
                                    class="d-flex align-items-center justify-content-between mb-5">
                                    <div
                                        class="dashboard-icon bg-danger-subtle text-danger">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.7"
                                            stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"/>
                                            <path d="M5 13v-8a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"/>
                                            <path d="M3 17h6"/>
                                            <path d="M6 14l3 3l-3 3"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="fs-3 fw-bold">
                                    {{ $totalPpids ?? \App\Models\PpidDocument::count() }}
                                </div>

                                <div class="text-muted mt-1">
                                    Dokumen PPID
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- KONTEN DAN MENU CEPAT --}}
                <div class="row g-6 mb-6">

                    {{-- KONTEN TERBARU --}}
                    <div class="col-xl-8">
                        <div class="card card-lg h-100">

                            <div
                                class="card-header border-bottom d-flex align-items-center justify-content-between">
                                <div>
                                    <h5 class="mb-1">
                                        Artikel Terbaru
                                    </h5>

                                    <p class="text-muted small mb-0">
                                        Daftar konten artikel terakhir diperbarui
                                    </p>
                                </div>

                                <a
                                    href="{{ url('/content/articles') }}"
                                    class="btn btn-white btn-sm">
                                    Lihat Semua
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table text-nowrap mb-0 table-centered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Artikel</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $latestArticles = $latestArticles
                                                ?? \App\Models\Article::latest()
                                                    ->limit(5)
                                                    ->get();
                                        @endphp

                                        @forelse ($latestArticles as $article)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="d-flex align-items-center gap-3">

                                                        @if (!empty($article->thumbnail))
                                                            <img
                                                                src="{{ Storage::url($article->thumbnail) }}"
                                                                alt="Thumbnail"
                                                                class="content-avatar">
                                                        @else
                                                            <div
                                                                class="content-placeholder">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="22"
                                                                    height="22"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5">
                                                                    <path d="M4 19h16"/>
                                                                    <path d="M4 5h16"/>
                                                                    <path d="M4 9h16"/>
                                                                    <path d="M4 13h10"/>
                                                                </svg>
                                                            </div>
                                                        @endif

                                                        <div>
                                                            <div class="fw-semibold">
                                                                {{ $article->title
                                                                    ?? $article->translation?->title
                                                                    ?? $article->translations?->first()?->title
                                                                    ?? 'Artikel tanpa judul' }}
                                                            </div>

                                                            <small class="text-muted">
                                                                {{ $article->slug ?? 'Konten artikel' }}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    @if ($article->is_active ?? true)
                                                        <span
                                                            class="badge text-success-emphasis bg-success-subtle">
                                                            Dipublikasi
                                                        </span>
                                                    @else
                                                        <span
                                                            class="badge text-secondary-emphasis bg-secondary-subtle">
                                                            Draft
                                                        </span>
                                                    @endif
                                                </td>

                                                <td>
                                                    {{ optional($article->created_at)->format('d-m-Y') }}
                                                </td>

                                                <td>
                                                    <a
                                                        href="{{ url('/content/articles') }}"
                                                        class="btn btn-white btn-sm">
                                                        Kelola
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td
                                                    colspan="4"
                                                    class="text-center text-muted py-5">
                                                    Belum ada data artikel.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- MENU CEPAT --}}
                    <div class="col-xl-4">
                        <div class="card card-lg h-100">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h5 class="mb-1">
                                        Menu Cepat
                                    </h5>

                                    <p class="text-muted small mb-0">
                                        Akses cepat pengelolaan website
                                    </p>
                                </div>

                                <div class="d-flex flex-column gap-3">

                                    <a
                                        href="{{ url('/content/doctors') }}"
                                        class="quick-menu">
                                        <div
                                            class="quick-menu-icon bg-primary-subtle text-primary">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.7">
                                                <path d="M12 12a4 4 0 1 0 0 -8a4 4 0 0 0 0 8"/>
                                                <path d="M6 20v-2a6 6 0 0 1 12 0v2"/>
                                            </svg>
                                        </div>

                                        <div>
                                            <div class="fw-semibold">
                                                Kelola Dokter
                                            </div>

                                            <small class="text-muted">
                                                Tambah dan edit data dokter
                                            </small>
                                        </div>
                                    </a>

                                    <a
                                        href="{{ url('/content/services') }}"
                                        class="quick-menu">
                                        <div
                                            class="quick-menu-icon bg-success-subtle text-success">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.7">
                                                <path d="M3 21h18"/>
                                                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"/>
                                                <path d="M9 9h6"/>
                                                <path d="M12 6v6"/>
                                            </svg>
                                        </div>

                                        <div>
                                            <div class="fw-semibold">
                                                Kelola Layanan
                                            </div>

                                            <small class="text-muted">
                                                Informasi layanan rumah sakit
                                            </small>
                                        </div>
                                    </a>

                                    <a
                                        href="{{ url('/master/information') }}"
                                        class="quick-menu">
                                        <div
                                            class="quick-menu-icon bg-warning-subtle text-warning">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.7">
                                                <path d="M6 4h12a2 2 0 0 1 2 2v14h-12a2 2 0 0 1 -2 -2z"/>
                                                <path d="M9 8h6"/>
                                                <path d="M9 12h6"/>
                                                <path d="M9 16h3"/>
                                            </svg>
                                        </div>

                                        <div>
                                            <div class="fw-semibold">
                                                Kelola Artikel
                                            </div>

                                            <small class="text-muted">
                                                Berita dan informasi terkini
                                            </small>
                                        </div>
                                    </a>

                                    <a
                                        href="{{ url('/content/testimonials') }}"
                                        class="quick-menu">
                                        <div
                                            class="quick-menu-icon bg-info-subtle text-info">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.7">
                                                <path d="M8 9h8"/>
                                                <path d="M8 13h6"/>
                                                <path d="M12 21l-4 -4h-3a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-3z"/>
                                            </svg>
                                        </div>

                                        <div>
                                            <div class="fw-semibold">
                                                Kelola Testimoni
                                            </div>

                                            <small class="text-muted">
                                                Testimoni pasien dan layanan
                                            </small>
                                        </div>
                                    </a>

                                    <a
                                        href="{{ url('/content/ppids') }}"
                                        class="quick-menu">
                                        <div
                                            class="quick-menu-icon bg-danger-subtle text-danger">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="1.7">
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4"/>
                                                <path d="M5 13v-8a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"/>
                                                <path d="M3 17h6"/>
                                            </svg>
                                        </div>

                                        <div>
                                            <div class="fw-semibold">
                                                Dokumen PPID
                                            </div>

                                            <small class="text-muted">
                                                Kelola informasi publik
                                            </small>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- RINGKASAN STATUS --}}
                <div class="row g-6 mb-6">

                    <div class="col-xl-4">
                        <div class="card card-lg h-100">
                            <div class="card-body">
                                <h5 class="mb-5">
                                    Status Dokter
                                </h5>

                                @php
                                    $activeDoctors = $activeDoctors
                                        ?? \App\Models\Doctor::where(
                                            'is_active',
                                            true
                                        )->count();

                                    $inactiveDoctors = $inactiveDoctors
                                        ?? \App\Models\Doctor::where(
                                            'is_active',
                                            false
                                        )->count();

                                    $doctorTotal = max(
                                        $activeDoctors + $inactiveDoctors,
                                        1
                                    );

                                    $doctorPercent = round(
                                        ($activeDoctors / $doctorTotal) * 100
                                    );
                                @endphp

                                <div
                                    class="d-flex justify-content-between align-items-center mb-2">
                                    <span>
                                        Aktif praktik
                                    </span>

                                    <strong>
                                        {{ $activeDoctors }}
                                    </strong>
                                </div>

                                <div
                                    class="progress mb-4"
                                    style="height:8px">
                                    <div
                                        class="progress-bar bg-success"
                                        style="width:{{ $doctorPercent }}%">
                                    </div>
                                </div>

                                <div
                                    class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">
                                        Tidak aktif
                                    </span>

                                    <strong>
                                        {{ $inactiveDoctors }}
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card card-lg h-100">
                            <div class="card-body">
                                <h5 class="mb-5">
                                    Status Layanan
                                </h5>

                                @php
                                    $activeServices = $activeServices
                                        ?? \App\Models\Service::where(
                                            'is_active',
                                            true
                                        )->count();

                                    $inactiveServices = $inactiveServices
                                        ?? \App\Models\Service::where(
                                            'is_active',
                                            false
                                        )->count();

                                    $serviceTotal = max(
                                        $activeServices + $inactiveServices,
                                        1
                                    );

                                    $servicePercent = round(
                                        ($activeServices / $serviceTotal) * 100
                                    );
                                @endphp

                                <div
                                    class="d-flex justify-content-between align-items-center mb-2">
                                    <span>
                                        Layanan aktif
                                    </span>

                                    <strong>
                                        {{ $activeServices }}
                                    </strong>
                                </div>

                                <div
                                    class="progress mb-4"
                                    style="height:8px">
                                    <div
                                        class="progress-bar bg-primary"
                                        style="width:{{ $servicePercent }}%">
                                    </div>
                                </div>

                                <div
                                    class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">
                                        Tidak aktif
                                    </span>

                                    <strong>
                                        {{ $inactiveServices }}
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card card-lg h-100">
                            <div class="card-body">
                                <h5 class="mb-5">
                                    Informasi Aplikasi
                                </h5>

                                <div class="d-flex flex-column gap-4">
                                    <div
                                        class="d-flex justify-content-between">
                                        <span class="text-muted">
                                            Laravel
                                        </span>

                                        <strong>
                                            {{ app()->version() }}
                                        </strong>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between">
                                        <span class="text-muted">
                                            PHP
                                        </span>

                                        <strong>
                                            {{ PHP_VERSION }}
                                        </strong>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between">
                                        <span class="text-muted">
                                            Zona waktu
                                        </span>

                                        <strong>
                                            {{ config('app.timezone') }}
                                        </strong>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between">
                                        <span class="text-muted">
                                            Tanggal
                                        </span>

                                        <strong>
                                            {{ now()->translatedFormat('d F Y') }}
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- FOOTER TEXT --}}
                <div class="text-center text-muted small pb-4">
                    Dashboard Administrator Website RSUP Surakarta
                    &copy; {{ date('Y') }}
                </div>

            </div>
        </div>
    </div>

    @include('backend.partials.scripts')

    <script src="{{ asset('backend/assets/js/vendors/sidebarnav.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/apexcharts.min.js') }}"></script>

</body>

</html>
