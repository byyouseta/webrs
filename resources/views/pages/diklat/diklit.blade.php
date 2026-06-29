@extends('layouts.app-web')
@section('title', 'Penelitian | RSUP Surakarta')
@section('content')

<!-- HERO -->
<section class="diklit-hero">

    <div class="container-custom">

        <div class="diklit-grid">

            <div class="diklit-content">

                <span class="diklit-label">
                    PENDIDIKAN & PENELITIAN
                </span>

                <h1>
                    Pengajuan Penelitian dan Karya Ilmiah
                </h1>

                <p>
                    RSUP Surakarta membuka kesempatan bagi mahasiswa,
                    peneliti, dosen, dan institusi untuk melaksanakan
                    penelitian, pengambilan data, maupun pengembangan
                    ilmu pengetahuan di lingkungan rumah sakit sesuai
                    ketentuan yang berlaku.
                </p>

            </div>

            <div class="diklit-image">

                <img src="{{ asset('img/assets/general-service/proposal.svg') }}?v={{ rand() }}"
                     alt="Penelitian">

            </div>

        </div>

    </div>

</section>


<!-- TENTANG -->
<section class="diklit-about">

    <div class="container-custom">

        <div class="section-title-center">

            <span>TENTANG DIKLIT</span>

            <h2>
                Pendidikan dan Penelitian
            </h2>

        </div>

        <p class="diklit-desc">
            Unit Pendidikan dan Penelitian RSUP Surakarta mendukung
            kegiatan penelitian ilmiah, pengembangan ilmu kesehatan,
            serta peningkatan mutu pelayanan melalui riset yang
            berkualitas dan beretika.
        </p>

    </div>

</section>


<!-- JENIS PENELITIAN -->
<section class="research-types">

    <div class="container-custom">

        <div class="section-title-center">

            <span>JENIS PENELITIAN</span>

            <h2>
                Penelitian yang Dapat Diajukan
            </h2>

        </div>

        <div class="research-grid">

            <div class="research-card">
                <i class="fas fa-graduation-cap"></i>
                <h4>Skripsi</h4>
                <p>Penelitian mahasiswa program sarjana.</p>
            </div>

            <div class="research-card">
                <i class="fas fa-book"></i>
                <h4>Tesis</h4>
                <p>Penelitian mahasiswa program magister.</p>
            </div>

            <div class="research-card">
                <i class="fas fa-university"></i>
                <h4>Disertasi</h4>
                <p>Penelitian mahasiswa program doktoral.</p>
            </div>

            <div class="research-card">
                <i class="fas fa-microscope"></i>
                <h4>Penelitian Institusi</h4>
                <p>Riset akademik maupun kolaborasi institusi.</p>
            </div>

        </div>

    </div>

</section>

<section class="research-process">

    <div class="container-custom">

        <div class="section-title-center">
            <span>ALUR PENELITIAN</span>
            <h2>Tahapan Pengajuan Penelitian</h2>
        </div>

        <div class="process-wrapper">

            <div class="process-item">

                <div class="process-step">
                    <span>STEP</span>
                    <strong>01</strong>
                </div>

                <div class="process-card">

                    <h4>Surat Permohonan</h4>

                    <p>
                        Peneliti mengirimkan surat permohonan penelitian
                        kepada Direktur Utama RSUP Surakarta.
                    </p>

                </div>

            </div>

            <div class="process-item">

                <div class="process-step">
                    <span>STEP</span>
                    <strong>02</strong>
                </div>

                <div class="process-card">

                    <h4>Upload Resume Proposal</h4>

                    <p>
                        Peneliti mengunggah resume proposal penelitian
                        sesuai ketentuan yang berlaku.
                    </p>

                </div>

            </div>

            <div class="process-item">

                <div class="process-step">
                    <span>STEP</span>
                    <strong>03</strong>
                </div>

                <div class="process-card">

                    <h4>Telaah Proposal</h4>

                    <p>
                        Tim Pendidikan dan Penelitian melakukan
                        telaah awal terhadap proposal yang diajukan.
                    </p>

                </div>

            </div>

            <div class="process-item">

                <div class="process-step">
                    <span>STEP</span>
                    <strong>04</strong>
                </div>

                <div class="process-card">

                    <h4>Kelaikan Etik Penelitian</h4>

                    <p>
                        Peneliti melengkapi proses etik penelitian
                        apabila diperlukan sesuai jenis penelitian.
                    </p>

                </div>

            </div>

            <div class="process-item">

                <div class="process-step">
                    <span>STEP</span>
                    <strong>05</strong>
                </div>

                <div class="process-card">

                    <h4>Penerbitan Izin Penelitian</h4>

                    <p>
                        Setelah seluruh persyaratan terpenuhi,
                        surat izin penelitian diterbitkan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- PERSYARATAN -->
<section class="research-requirements">

    <div class="container-custom">

        <div class="section-title-center">

            <span>PERSYARATAN</span>

            <h2>
                Dokumen yang Harus Disiapkan
            </h2>

        </div>

        <div class="requirement-box">

            <ul>
                <li>Surat permohonan penelitian dari institusi.</li>
                <li>Proposal penelitian lengkap.</li>
                <li>Surat pengantar pembimbing.</li>
                <li>Identitas peneliti.</li>
                <li>Persetujuan etik penelitian (jika diperlukan).</li>
                <li>Dokumen pendukung lainnya sesuai ketentuan.</li>
            </ul>

        </div>

    </div>

</section>


<!-- KONTAK -->
<section class="diklit-contact">

    <div class="container-custom">

        <div class="diklit-contact-card">

            <h2>
                Informasi Penelitian
            </h2>

            <p>
                Untuk konsultasi, pengajuan proposal penelitian,
                dan informasi lainnya silakan menghubungi petugas
                Pendidikan dan Penelitian RSUP Surakarta.
            </p>

            <div class="contact-list">

                <div>
                    <i class="fas fa-user-tie"></i>
                    Misbah
                </div>

                <div>
                    <i class="fas fa-phone-alt"></i>
                    (0271) 713055
                </div>

                <div>
                    <i class="fab fa-whatsapp"></i>
                    0896-4946-7197
                </div>

                <div>
                    <i class="fas fa-envelope"></i>
                    diklit@rsupsurakarta.id
                </div>

            </div>

        </div>

    </div>

</section>

@endsection
