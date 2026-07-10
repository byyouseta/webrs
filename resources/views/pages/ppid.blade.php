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
                    @foreach($ppid as $data)
                    <tr data-category="{{$data->category->name}}">
                        <td>{{$data->id}}</td>
                        <td>{{$data->translation->title}}</td>
                        <td>
                            <span class="kategori dokumen">
                                {{$data->category->name}}
                            </span>
                        </td>
                       <td>{{ \Carbon\Carbon::parse($data->tanggal)->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ asset('storage/'.$data->file) }}" class="btn-download" target="_blank">
                                Download
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/'.$data->file) }}" class="btn-preview" target="_blank">
                                View
                            </a>
                        </td>
                    </tr>
                    @endforeach


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
