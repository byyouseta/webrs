@extends('layouts.app-web')

@section('title', 'Survei Kepuasan Masyarakat | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="skm-hero">

    <div class="container-custom">

        <span class="skm-badge">
            PELAYANAN PUBLIK
        </span>

        <h1>
            Survei Kepuasan Masyarakat
        </h1>

        <p>
            Survei Kepuasan Masyarakat (SKM) merupakan pengukuran
            secara komprehensif mengenai tingkat kepuasan masyarakat
            terhadap kualitas pelayanan yang diberikan RSUP Surakarta.
        </p>

    </div>

</section>


<!-- NILAI IKM -->
<section class="ikm-section">

    <div class="container-custom">

        <div class="ikm-card">

            <div class="ikm-score">

                <span>Nilai IKM 2025</span>

                <h2>
                    93.79
                </h2>

                <p>
                    Sangat Baik
                </p>

            </div>

            <div class="ikm-progress">

                <div class="progress-label">

                    <span>Capaian Kepuasan</span>

                    <span>93.79%</span>

                </div>

                <div class="progress-bar-custom">

                    <div class="progress-fill"
                         style="width:91.25%">
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- UNSUR PENILAIAN -->
<section class="skm-unsur">

    <div class="container-custom">

        <div class="section-title-center">

            <span>UNSUR PENILAIAN</span>

            <h2>
                Komponen Penilaian SKM
            </h2>

        </div>

        <div class="unsur-grid">

            <div class="unsur-card">
                <i class="fas fa-user-check"></i>
                Persyaratan Pelayanan
            </div>

            <div class="unsur-card">
                <i class="fas fa-random"></i>
                Prosedur Pelayanan
            </div>

            <div class="unsur-card">
                <i class="fas fa-clock"></i>
                Waktu Pelayanan
            </div>

            <div class="unsur-card">
                <i class="fas fa-money-bill-wave"></i>
                Biaya / Tarif
            </div>

            <div class="unsur-card">
                <i class="fas fa-user-md"></i>
                Kompetensi Petugas
            </div>

            <div class="unsur-card">
                <i class="fas fa-comments"></i>
                Penanganan Pengaduan
            </div>

        </div>

    </div>

</section>


<!-- HASIL -->
<section class="skm-result">

    <div class="container-custom">

        <div class="section-title-center">

            <span>HASIL SKM</span>

            <h2>
                Hasil Survei Periode
            </h2>

        </div>

        <div class="table-responsive">

            <table class="skm-table">

                <thead>

                    <tr>
                        <th>Periode</th>
                        <th>Nilai IKM</th>
                        <th>Mutu Pelayanan</th>
                        <th>Kategori</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>2025</td>
                        <td>93.79</td>
                        <td>A</td>
                        <td>Sangat Baik</td>
                    </tr>

                     <tr>
                        <td>2026 Triwulan I</td>
                        <td>81.50</td>
                        <td>B</td>
                        <td>Baik</td>
                    </tr>


                </tbody>

            </table>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="skm-cta">

    <div class="container-custom">

        <div class="cta-box">

            <h2>
                Berikan Penilaian Anda
            </h2>

            <p>
                Masukan dan penilaian dari masyarakat sangat penting
                untuk peningkatan mutu pelayanan RSUP Surakarta.
            </p>

            <div class="cta-action">

                <a href="https://gate.rsupsurakarta.id/survei/kepuasan"
                   target="_blank"
                   class="btn-skm">

                    <i class="fas fa-poll"></i>
                    Isi Survei SKM

                </a>

                <a href="{{ asset('storage/ppid/SKM_2025.pdf') }}"
                   target="_blank"
                   class="btn-skm-outline">

                    <i class="fas fa-file-pdf"></i>
                    Download Laporan

                </a>

            </div>

        </div>

    </div>

</section>

@endsection
