@extends('layouts.app-web')

@section('title', 'Kebijakan Privasi Pasien | RSUP Surakarta')

@section('content')

<section class="privacy-hero">

    <div class="container-custom">

        <span class="privacy-badge">
            INFORMASI PASIEN
        </span>

        <h1>
            Kebijakan Privasi Pasien
        </h1>

        <p>
            RSUP Surakarta berkomitmen melindungi kerahasiaan,
            keamanan, dan penggunaan data pribadi pasien sesuai
            dengan ketentuan peraturan perundang-undangan yang berlaku.
        </p>

    </div>

</section>


<section class="privacy-intro">

    <div class="container-custom">

        <div class="privacy-card">

            <i class="fas fa-user-shield"></i>

            <h2>
                Komitmen Perlindungan Data Pasien
            </h2>

            <p>
                Data pribadi pasien merupakan informasi yang bersifat
                rahasia dan hanya digunakan untuk kepentingan pelayanan
                kesehatan, administrasi, pendidikan, penelitian, serta
                kewajiban hukum sesuai ketentuan yang berlaku.
            </p>

        </div>

    </div>

</section>


<section class="privacy-section">

    <div class="container-custom">

        <div class="privacy-content">

            <div class="privacy-item">

                <h3>
                    <i class="fas fa-database"></i>
                    Data yang Dikumpulkan
                </h3>

                <p>
                    RSUP Surakarta dapat mengumpulkan informasi seperti
                    identitas pasien, alamat, nomor telepon, data
                    kepesertaan BPJS, data medis, hasil pemeriksaan,
                    serta informasi lain yang diperlukan dalam pelayanan.
                </p>

            </div>


            <div class="privacy-item">

                <h3>
                    <i class="fas fa-file-medical"></i>
                    Penggunaan Data
                </h3>

                <p>
                    Data pasien digunakan untuk proses pelayanan medis,
                    administrasi, penjadwalan pelayanan, klaim pembiayaan,
                    peningkatan mutu layanan, serta keperluan pelaporan
                    yang diwajibkan oleh peraturan.
                </p>

            </div>


            <div class="privacy-item">

                <h3>
                    <i class="fas fa-lock"></i>
                    Kerahasiaan Data
                </h3>

                <p>
                    Rumah sakit menjaga kerahasiaan seluruh data pasien
                    dan tidak memberikan informasi kepada pihak lain tanpa
                    persetujuan pasien kecuali diwajibkan oleh hukum.
                </p>

            </div>


            <div class="privacy-item">

                <h3>
                    <i class="fas fa-shield-alt"></i>
                    Keamanan Informasi
                </h3>

                <p>
                    Sistem informasi rumah sakit menerapkan berbagai
                    mekanisme pengamanan untuk melindungi data dari
                    akses tidak sah, kehilangan, perubahan maupun
                    penyalahgunaan data.
                </p>

            </div>


            <div class="privacy-item">

                <h3>
                    <i class="fas fa-user-check"></i>
                    Hak Pasien
                </h3>

                <p>
                    Pasien berhak memperoleh informasi mengenai
                    penggunaan data pribadinya serta meminta koreksi
                    apabila ditemukan ketidaksesuaian data.
                </p>

            </div>


            <div class="privacy-item">

                <h3>
                    <i class="fas fa-sync-alt"></i>
                    Perubahan Kebijakan
                </h3>

                <p>
                    RSUP Surakarta dapat melakukan perubahan terhadap
                    kebijakan privasi sesuai perkembangan regulasi dan
                    kebutuhan pelayanan rumah sakit.
                </p>

            </div>

        </div>

    </div>

</section>


<section class="privacy-contact">

    <div class="container-custom">

        <div class="privacy-contact-box">

            <h2>
                Pertanyaan Mengenai Privasi Data
            </h2>

            <p>
                Jika Anda memiliki pertanyaan terkait penggunaan atau
                perlindungan data pribadi pasien, silakan menghubungi
                RSUP Surakarta melalui kanal resmi yang tersedia.
            </p>

            <a href="#"
               class="btn-privacy">

                Hubungi Kami

            </a>

        </div>

    </div>

</section>

@endsection
