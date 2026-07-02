@extends('layouts.app-web')
@section('title', 'PPID | RSUP Surakarta')

@section('content')

<section class="section ppid-page">
    <div class="container-custom">

        <!-- HEADER -->
        <div class="ppid-header">

            <span class="badge-ppid">
                PPID RSUP Surakarta
            </span>

            <h1>
                Pejabat Pengelola Informasi dan Dokumentasi
            </h1>

            <p>
                Informasi publik RSUP Surakarta yang dapat diakses
                masyarakat secara transparan dan akuntabel.
            </p>

        </div>

        <!-- INFO BOX -->
        <div class="ppid-info-grid">

            <div class="ppid-info-card">
                <i class="bi bi-file-earmark-text"></i>
                <h5>Informasi Berkala</h5>
                <p>
                    Informasi rutin yang diperbarui secara berkala.
                </p>
            </div>

            <div class="ppid-info-card">
                <i class="bi bi-megaphone"></i>
                <h5>Informasi Serta Merta</h5>
                <p>
                    Informasi penting yang wajib diumumkan segera.
                </p>
            </div>

            <div class="ppid-info-card">
                <i class="bi bi-folder2-open"></i>
                <h5>Dokumen Publik</h5>
                <p>
                    Dokumen resmi yang dapat diakses masyarakat.
                </p>
            </div>

            <div class="ppid-info-card">
                <i class="bi bi-shield-check"></i>
                <h5>Layanan Informasi</h5>
                <p>
                    Pelayanan permohonan informasi publik RSUP.
                </p>
            </div>

        </div>

        <!-- FILTER -->
        <div class="ppid-tools">

            <div class="search-box-ppid">
                <i class="bi bi-search"></i>

                <input
                    type="text"
                    id="searchPPID"
                    placeholder="Cari dokumen atau informasi..."
                >
            </div>

            <select id="filterKategori">
                <option value="all">Semua Kategori</option>
                <option value="berkala">Informasi Berkala</option>
                <option value="serta-merta">Serta Merta</option>
                <option value="dokumen">Dokumen Publik</option>
            </select>

        </div>

        <!-- TABLE -->
        <div class="table-wrapper">

            <table class="ppid-table" id="ppidTable">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Informasi</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>File</th>
                        <th>Preview</th>
                    </tr>
                </thead>

                <tbody>
                    <tr data-category="dokumen">
                        <td>7</td>
                        <td>Rencana Umum Pengadaan 2026</td>
                        <td>
                            <span class="kategori dokumen">
                                Dokumen
                            </span>
                        </td>
                        <td>09 Februari 2026</td>
                        <td>
                            <a href="{{ asset('storage/ppid/RENCANA_UMUM_PENGADAAN_2026.pdf') }}" class="btn-download" target="_blank">
                                Download
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/ppid/RENCANA_UMUM_PENGADAAN_2026.pdf') }}" class="btn-preview" target="_blank">
                                View
                            </a>
                        </td>
                    </tr>

                    <tr data-category="dokumen">
                        <td>6</td>
                        <td>Standar Pelayanan RSUP Surakarta 2026</td>
                        <td>
                            <span class="kategori dokumen">
                                Dokumen
                            </span>
                        </td>
                        <td>18 Mei 2026</td>
                        <td>
                            <a href="{{ asset('storage/ppid/20260626091248SK_STANDAR_PELAYANAN.pdf') }}" class="btn-download" target="_blank">
                                Download
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/ppid/20260626091248SK_STANDAR_PELAYANAN.pdf') }}" class="btn-preview" target="_blank">
                                View
                            </a>
                        </td>
                    </tr>


                    <tr data-category="dokumen">
                        <td>5</td>
                        <td>Rencana Strategi Bisnis 2025-2029 RSUP Surakarta</td>
                        <td>
                            <span class="kategori dokumen">
                                Dokumen
                            </span>
                        </td>
                        <td>10 Juli 2025</td>
                        <td>
                            <a href="{{ asset('storage/ppid/Rencana_Strategis_Bisnis_RSUP_Surakarta_2025-2029_fixx.pdf') }}" class="btn-download" target="_blank">
                                Download
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/ppid/Rencana_Strategis_Bisnis_RSUP_Surakarta_2025-2029_fixx.pdf') }}" class="btn-preview" target="_blank">
                                View
                            </a>
                        </td>
                    </tr>

                    <tr data-category="berkala">
                        <td>4</td>
                        <td>LAKIP 2025 RSUP Surakarta</td>
                        <td>
                            <span class="kategori berkala">
                                Berkala
                            </span>
                        </td>
                        <td>30 Januari 2026</td>
                        <td>
                            <a href="{{ asset('storage/ppid/LAKIP_Tahun_2025_TTE.pdf') }}" class="btn-download" target="_blank">
                                Download
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/ppid/LAKIP_Tahun_2025_TTE.pdf') }}" class="btn-preview" target="_blank">
                                View
                            </a>
                        </td>
                    </tr>


                    <tr data-category="berkala">
                        <td>3</td>
                        <td>Rencana Kerja dan Anggaran Tahun 2025 RSUP Surakarta</td>
                        <td>
                            <span class="kategori berkala">
                                Berkala
                            </span>
                        </td>
                        <td>10 Januari 2025</td>
                        <td>
                            <a href="{{ asset('storage/ppid/RINCIAN_KERTAS_KERJA_RSUP_SURAKARTA.pdf') }}" class="btn-download" target="_blank">
                                Download
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/ppid/RINCIAN_KERTAS_KERJA_RSUP_SURAKARTA.pdf') }}" class="btn-preview" target="_blank">
                                View
                            </a>
                        </td>
                    </tr>


                    <tr data-category="berkala">
                        <td>2</td>
                        <td>LAKIP Semester I 2025 RSUP Surakarta</td>
                        <td>
                            <span class="kategori berkala">
                                Berkala
                            </span>
                        </td>
                        <td>10 Juli 2025</td>
                        <td>
                            <a href="{{ asset('storage/ppid/LAKIP_Semester_I_2025_RSUP_Surakarta.pdf') }}" class="btn-download" target="_blank">
                                Download
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/ppid/LAKIP_Semester_I_2025_RSUP_Surakarta.pdf') }}" class="btn-preview" target="_blank">
                                View
                            </a>
                        </td>
                    </tr>

                    <tr data-category="dokumen">
                        <td>1</td>
                        <td>Laporan Tahunan 2024 RSUP Surakarta</td>
                        <td>
                            <span class="kategori dokumen">
                                Dokumen
                            </span>
                        </td>
                        <td>05 Januari 2025</td>
                        <td>
                            <a href="{{ asset('storage/ppid/Laporan_Tahunan_2024_RSUP_Surakarta.pdf') }}" class="btn-download" target="_blank">
                                Download
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/ppid/Laporan_Tahunan_2024_RSUP_Surakarta.pdf') }}" class="btn-preview" target="_blank">
                                View
                            </a>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>
</section>

<script>

const searchInput = document.getElementById('searchPPID');
const filterKategori = document.getElementById('filterKategori');
const rows = document.querySelectorAll('#ppidTable tbody tr');

function filterTable(){

    const search = searchInput.value.toLowerCase();
    const kategori = filterKategori.value;

    rows.forEach(row => {

        const text = row.innerText.toLowerCase();
        const category = row.dataset.category;

        const cocokSearch = text.includes(search);

        const cocokKategori =
            kategori === 'all' || category === kategori;

        if(cocokSearch && cocokKategori){
            row.style.display = '';
        }else{
            row.style.display = 'none';
        }

    });

}

searchInput.addEventListener('keyup', filterTable);
filterKategori.addEventListener('change', filterTable);
</script>

@endsection
