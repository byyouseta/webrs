@extends('layouts.app-web')

@section('title', 'Permohonan Informasi Publik | PPID RSUP Surakarta')

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}

<section class="ppid-request-hero">

    <div class="container-custom">

        <span class="ppid-request-badge">
            PPID RSUP SURAKARTA
        </span>

        <h1>
            Permohonan Informasi Publik
        </h1>

        <p>
            Sampaikan permohonan informasi publik kepada
            PPID RSUP Surakarta melalui layanan informasi
            yang mudah, cepat, transparan dan akuntabel.
        </p>

    </div>

</section>


{{-- =========================================================
     ALUR PERMOHONAN
========================================================= --}}

<section class="ppid-flow-section">

    <div class="container-custom">

        <div class="ppid-section-heading">

            <span>ALUR LAYANAN</span>

            <h2>
                Alur Permohonan Informasi Publik
            </h2>

            <p>
                Berikut merupakan tahapan proses permohonan
                informasi publik di lingkungan RSUP Surakarta.
            </p>

        </div>




        {{-- PENJELASAN ALUR --}}
        <div class="ppid-flow-steps">

            {{-- STEP 1 --}}
            <div class="ppid-flow-step">

                <div class="ppid-flow-number">
                    1
                </div>

                <div>
                    <h3>
                        Pemohon
                    </h3>

                    <p>
                        Pemohon mengajukan informasi
                        secara langsung atau tertulis
                        kepada petugas meja informasi.
                    </p>
                </div>

            </div>


            {{-- STEP 2 --}}
            <div class="ppid-flow-step">

                <div class="ppid-flow-number">
                    2
                </div>

                <div>
                    <h3>
                        Petugas Meja Informasi
                    </h3>

                    <p>
                        Petugas meja informasi menerima
                        dan menyampaikan permohonan
                        informasi kepada PPID.
                    </p>
                </div>

            </div>


            {{-- STEP 3 --}}
            <div class="ppid-flow-step">

                <div class="ppid-flow-number">
                    3
                </div>

                <div>
                    <h3>
                        PPID
                    </h3>

                    <p>
                        PPID menyampaikan permohonan
                        informasi kepada pejabat informasi
                        untuk diproses.
                    </p>

                </div>

            </div>


            {{-- STEP 4 --}}
            <div class="ppid-flow-step">

                <div class="ppid-flow-number">
                    4
                </div>

                <div>

                    <h3>
                        Pejabat Informasi
                    </h3>

                    <p>
                        Pejabat informasi menyampaikan
                        tanggapan atau jawaban kepada PPID.
                    </p>

                </div>

            </div>


            {{-- STEP 5 --}}
            <div class="ppid-flow-step">

                <div class="ppid-flow-number">
                    5
                </div>

                <div>

                    <h3>
                        PPID
                    </h3>

                    <p>
                        PPID menyampaikan tanggapan atau
                        jawaban kepada pemohon melalui
                        petugas meja informasi.
                    </p>

                </div>

            </div>


            {{-- STEP 6 --}}
            <div class="ppid-flow-step">

                <div class="ppid-flow-number">
                    6
                </div>

                <div>

                    <h3>
                        Petugas Meja Informasi
                    </h3>

                    <p>
                        Petugas meja informasi menyampaikan
                        tanggapan atau jawaban kepada pemohon.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FORM
========================================================= --}}

<section class="ppid-form-section">

    <div class="container-custom">

        <div class="ppid-section-heading">

            <span>FORMULIR</span>

            <h2>
                Form Permohonan Informasi
            </h2>

            <p>
                Silakan lengkapi data berikut untuk mengajukan
                permohonan informasi publik.
            </p>

        </div>


        {{-- SUCCESS --}}
        @if(session('success'))

            <div class="ppid-success">

                <div class="ppid-success-icon">
                    <i class="fas fa-check"></i>
                </div>

                <div>

                    <strong>
                        Permohonan Berhasil Dikirim
                    </strong>

                    <p>
                        {{ session('success') }}
                    </p>

                    <small>
                        Simpan nomor registrasi tersebut untuk
                        keperluan pemantauan permohonan.
                    </small>

                </div>

            </div>

        @endif


        {{-- ERROR --}}
        @if($errors->any())

            <div class="ppid-error">

                <strong>
                    Permohonan belum dapat dikirim.
                </strong>

                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="{{ route('ppid_form_store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="ppid-request-form"
        >

            @csrf


            {{-- =================================================
                 DATA PEMOHON
            ================================================== --}}

            <div class="ppid-form-card">

                <div class="ppid-form-card-header">

                    <div class="ppid-form-icon">
                        <i class="fas fa-user"></i>
                    </div>

                    <div>

                        <h3>
                            Data Pemohon
                        </h3>

                        <p>
                            Lengkapi identitas pemohon informasi.
                        </p>

                    </div>

                </div>


                <div class="row">

                    {{-- NAMA --}}
                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                Nama Lengkap
                                <span>*</span>
                            </label>

                            <input
                                type="text"
                                name="applicant_name"
                                value="{{ old('applicant_name') }}"
                                class="form-control"
                                placeholder="Masukkan nama lengkap"
                                required
                            >

                        </div>

                    </div>


                    {{-- NIK --}}
                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                NIK
                            </label>

                            <input
                                type="text"
                                name="nik"
                                value="{{ old('nik') }}"
                                class="form-control"
                                placeholder="Nomor Induk Kependudukan"
                            >

                        </div>

                    </div>


                    {{-- ORGANISASI --}}
                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                Instansi / Organisasi
                            </label>

                            <input
                                type="text"
                                name="organization"
                                value="{{ old('organization') }}"
                                class="form-control"
                                placeholder="Nama instansi / organisasi"
                            >

                        </div>

                    </div>


                    {{-- EMAIL --}}
                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                Email
                                <span>*</span>
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control"
                                placeholder="contoh@email.com"
                                required
                            >

                        </div>

                    </div>


                    {{-- TELEPON --}}
                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                Nomor Telepon / WhatsApp
                                <span>*</span>
                            </label>

                            <input
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="form-control"
                                placeholder="08xxxxxxxxxx"
                                required
                            >

                        </div>

                    </div>


                    {{-- ALAMAT --}}
                    <div class="col-md-12">

                        <div class="form-group">

                            <label>
                                Alamat
                                <span>*</span>
                            </label>

                            <textarea
                                name="address"
                                rows="3"
                                class="form-control"
                                placeholder="Alamat lengkap pemohon"
                                required
                            >{{ old('address') }}</textarea>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 DETAIL INFORMASI
            ================================================== --}}

            <div class="ppid-form-card">

                <div class="ppid-form-card-header">

                    <div class="ppid-form-icon blue">
                        <i class="fas fa-file-alt"></i>
                    </div>

                    <div>

                        <h3>
                            Informasi yang Dimohon
                        </h3>

                        <p>
                            Jelaskan informasi publik yang ingin
                            Anda peroleh.
                        </p>

                    </div>

                </div>


                {{-- INFORMASI --}}
                <div class="form-group">

                    <label>
                        Informasi yang Dimohon
                        <span>*</span>
                    </label>

                    <textarea
                        name="requested_information"
                        rows="5"
                        class="form-control"
                        placeholder="Jelaskan secara rinci informasi publik yang Anda butuhkan..."
                        required
                    >{{ old('requested_information') }}</textarea>

                    <small>
                        Jelaskan informasi secara spesifik agar
                        permohonan dapat diproses dengan tepat.
                    </small>

                </div>


                {{-- TUJUAN --}}
                <div class="form-group">

                    <label>
                        Tujuan Penggunaan Informasi
                        <span>*</span>
                    </label>

                    <textarea
                        name="purpose"
                        rows="4"
                        class="form-control"
                        placeholder="Jelaskan tujuan penggunaan informasi..."
                        required
                    >{{ old('purpose') }}</textarea>

                </div>


                <div class="row">

                    {{-- CARA PENYAMPAIAN --}}
                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                Cara Memperoleh Informasi
                                <span>*</span>
                            </label>

                            <select
                                name="delivery_method"
                                class="form-control"
                                required
                            >

                                <option value="">
                                    -- Pilih --
                                </option>

                                <option
                                    value="email"
                                    {{ old('delivery_method') == 'email' ? 'selected' : '' }}
                                >
                                    Melalui Email
                                </option>

                                <option
                                    value="langsung"
                                    {{ old('delivery_method') == 'langsung' ? 'selected' : '' }}
                                >
                                    Diambil Langsung
                                </option>

                                <option
                                    value="pos"
                                    {{ old('delivery_method') == 'pos' ? 'selected' : '' }}
                                >
                                    Melalui Pos
                                </option>

                            </select>

                        </div>

                    </div>


                    {{-- FORMAT --}}
                    <div class="col-md-6">

                        <div class="form-group">

                            <label>
                                Format Informasi
                                <span>*</span>
                            </label>

                            <select
                                name="information_format"
                                class="form-control"
                                required
                            >

                                <option value="">
                                    -- Pilih --
                                </option>

                                <option
                                    value="softcopy"
                                    {{ old('information_format') == 'softcopy' ? 'selected' : '' }}
                                >
                                    Softcopy / Elektronik
                                </option>

                                <option
                                    value="hardcopy"
                                    {{ old('information_format') == 'hardcopy' ? 'selected' : '' }}
                                >
                                    Hardcopy / Cetak
                                </option>

                            </select>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 IDENTITAS
            ================================================== --}}

            <div class="ppid-form-card">

                <div class="ppid-form-card-header">

                    <div class="ppid-form-icon red">
                        <i class="fas fa-id-card"></i>
                    </div>

                    <div>

                        <h3>
                            Dokumen Identitas
                        </h3>

                        <p>
                            Lampirkan dokumen identitas pemohon.
                        </p>

                    </div>

                </div>


                <div class="ppid-upload">

                    <label class="ppid-upload-box">

                        <i class="fas fa-cloud-upload-alt"></i>

                        <strong>
                            Upload Dokumen Identitas
                        </strong>

                        <span>
                            JPG, PNG atau PDF — maksimal 2 MB
                        </span>

                        <input
                            type="file"
                            name="identity_file"
                            accept=".jpg,.jpeg,.png,.pdf"
                            required
                        >

                    </label>

                </div>

            </div>


            {{-- =================================================
                 PERSETUJUAN
            ================================================== --}}

            <div class="ppid-agreement">

                <label>

                    <input
                        type="checkbox"
                        required
                    >

                    <span>
                        Saya menyatakan bahwa data dan informasi
                        yang saya berikan dalam formulir ini adalah
                        benar dan dapat dipertanggungjawabkan.
                    </span>

                </label>

            </div>


            {{-- SUBMIT --}}
            <div class="ppid-form-submit">

                <button
                    type="submit"
                    class="btn-ppid-submit"
                >

                    <i class="fas fa-paper-plane"></i>

                    Kirim Permohonan

                </button>

            </div>

        </form>

    </div>

</section>


{{-- =========================================================
     CSS
========================================================= --}}

<style>

.ppid-request-hero {

    padding: 75px 0 65px;

    background:
        linear-gradient(
            135deg,
            #f3f8fc 0%,
            #ffffff 55%,
            #eef7f5 100%
        );

    border-bottom: 1px solid #edf1f5;
}

.ppid-request-badge {

    display: inline-flex;

    padding: 7px 14px;

    margin-bottom: 15px;

    border-radius: 30px;

    background: #e9f5f1;

    color: #17795d;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.2px;
}

.ppid-request-hero h1 {

    margin: 0 0 14px;

    color: #172033;

    font-size: clamp(32px, 4vw, 46px);

    font-weight: 750;
}

.ppid-request-hero p {

    max-width: 720px;

    margin: 0;

    color: #667085;

    font-size: 16px;

    line-height: 1.8;
}


/* =========================================================
   SECTION
========================================================= */

.ppid-flow-section,
.ppid-form-section {

    padding: 70px 0;

}

.ppid-flow-section {

    background: #ffffff;
}

.ppid-form-section {

    background: #f8fafc;
}

.ppid-section-heading {

    max-width: 720px;

    margin-bottom: 35px;
}

.ppid-section-heading span {

    color: #17795d;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;
}

.ppid-section-heading h2 {

    margin: 7px 0 10px;

    color: #172033;

    font-size: 30px;

    font-weight: 700;
}

.ppid-section-heading p {

    margin: 0;

    color: #667085;

    font-size: 14px;

    line-height: 1.7;
}


/* =========================================================
   GAMBAR ALUR
========================================================= */

.ppid-flow-image-card {

    padding: 15px;

    background: #ffffff;

    border: 1px solid #e5eaf0;

    border-radius: 18px;

    box-shadow:
        0 10px 35px rgba(24, 45, 67, .06);

    margin-bottom: 40px;

    text-align: center;
}

.ppid-flow-image-card img {

    display: block;

    width: 100%;

    max-height: 650px;

    object-fit: contain;

    border-radius: 10px;
}


/* =========================================================
   FLOW STEPS
========================================================= */

.ppid-flow-steps {

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 20px;
}

.ppid-flow-step {

    display: flex;

    align-items: flex-start;

    gap: 15px;

    padding: 22px;

    background: #ffffff;

    border: 1px solid #e5eaf0;

    border-radius: 14px;

    transition: all .25s ease;
}

.ppid-flow-step:hover {

    transform: translateY(-3px);

    box-shadow:
        0 12px 30px rgba(24, 45, 67, .08);
}

.ppid-flow-number {

    width: 36px;

    height: 36px;

    min-width: 36px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #17795d;

    color: #ffffff;

    font-size: 14px;

    font-weight: 700;
}

.ppid-flow-step h3 {

    margin: 0 0 6px;

    color: #1d2939;

    font-size: 16px;

    font-weight: 700;
}

.ppid-flow-step p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;
}


/* =========================================================
   FORM CARD
========================================================= */

.ppid-form-card {

    margin-bottom: 25px;

    padding: 30px;

    background: #ffffff;

    border: 1px solid #e5eaf0;

    border-radius: 18px;

    box-shadow:
        0 8px 30px rgba(24, 45, 67, .05);
}

.ppid-form-card-header {

    display: flex;

    align-items: center;

    gap: 15px;

    margin-bottom: 28px;

    padding-bottom: 20px;

    border-bottom: 1px solid #edf0f3;
}

.ppid-form-icon {

    width: 48px;

    height: 48px;

    min-width: 48px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    background: #e9f5f1;

    color: #17795d;

    font-size: 19px;
}

.ppid-form-icon.blue {

    background: #eef5fc;

    color: #1769aa;
}

.ppid-form-icon.red {

    background: #fff1f1;

    color: #d62828;
}

.ppid-form-card-header h3 {

    margin: 0 0 4px;

    color: #1d2939;

    font-size: 19px;

    font-weight: 700;
}

.ppid-form-card-header p {

    margin: 0;

    color: #667085;

    font-size: 13px;
}


/* =========================================================
   FORM
========================================================= */

.ppid-request-form .form-group {

    margin-bottom: 20px;
}

.ppid-request-form label {

    display: block;

    margin-bottom: 7px;

    color: #344054;

    font-size: 13px;

    font-weight: 600;
}

.ppid-request-form label span {

    color: #d62828;
}

.ppid-request-form .form-control {

    min-height: 44px;

    border: 1px solid #d0d5dd;

    border-radius: 8px;

    color: #344054;

    font-size: 14px;

    box-shadow: none;

    transition: all .2s ease;
}

.ppid-request-form textarea.form-control {

    min-height: auto;

    resize: vertical;
}

.ppid-request-form .form-control:focus {

    border-color: #17795d;

    box-shadow:
        0 0 0 3px rgba(23, 121, 93, .10);
}

.ppid-request-form small {

    display: block;

    margin-top: 7px;

    color: #98a2b3;

    font-size: 11px;
}


/* =========================================================
   UPLOAD
========================================================= */

.ppid-upload-box {

    position: relative;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    min-height: 180px;

    padding: 30px;

    border: 2px dashed #cfd8d5;

    border-radius: 14px;

    background: #fbfdfc;

    text-align: center;

    cursor: pointer;

    transition: all .25s ease;
}

.ppid-upload-box:hover {

    border-color: #17795d;

    background: #f4faf8;
}

.ppid-upload-box i {

    margin-bottom: 12px;

    color: #17795d;

    font-size: 34px;
}

.ppid-upload-box strong {

    color: #344054;

    font-size: 14px;
}

.ppid-upload-box span {

    margin-top: 5px;

    color: #98a2b3;

    font-size: 12px;
}

.ppid-upload-box input {

    position: absolute;

    inset: 0;

    width: 100%;

    height: 100%;

    opacity: 0;

    cursor: pointer;
}


/* =========================================================
   AGREEMENT
========================================================= */

.ppid-agreement {

    margin: 25px 0;

    padding: 18px 20px;

    border-radius: 12px;

    background: #eef7f5;

    border: 1px solid #dceee8;
}

.ppid-agreement label {

    display: flex;

    align-items: flex-start;

    gap: 10px;

    margin: 0;

    cursor: pointer;
}

.ppid-agreement input {

    margin-top: 3px;

    accent-color: #17795d;
}

.ppid-agreement span {

    color: #475467;

    font-size: 13px;

    line-height: 1.6;
}


/* =========================================================
   SUBMIT
========================================================= */

.ppid-form-submit {

    display: flex;

    justify-content: flex-end;
}

.btn-ppid-submit {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    min-width: 210px;

    padding: 13px 22px;

    border: none;

    border-radius: 9px;

    background: #17795d;

    color: #ffffff;

    font-size: 14px;

    font-weight: 600;

    cursor: pointer;

    transition: all .25s ease;
}

.btn-ppid-submit:hover {

    background: #12634d;

    color: #ffffff;

    transform: translateY(-2px);

    box-shadow:
        0 8px 20px rgba(23, 121, 93, .20);
}


/* =========================================================
   SUCCESS
========================================================= */

.ppid-success {

    display: flex;

    align-items: flex-start;

    gap: 15px;

    margin-bottom: 25px;

    padding: 20px;

    border-radius: 14px;

    background: #ecfdf3;

    border: 1px solid #abefc6;
}

.ppid-success-icon {

    width: 42px;

    height: 42px;

    min-width: 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #12b76a;

    color: #ffffff;
}

.ppid-success strong {

    display: block;

    margin-bottom: 5px;

    color: #067647;

    font-size: 15px;
}

.ppid-success p {

    margin: 0 0 5px;

    color: #344054;

    font-size: 13px;
}

.ppid-success small {

    color: #667085;

    font-size: 12px;
}


/* =========================================================
   ERROR
========================================================= */

.ppid-error {

    margin-bottom: 25px;

    padding: 18px 20px;

    border-radius: 12px;

    background: #fff4f4;

    border: 1px solid #f5c2c7;

    color: #842029;

    font-size: 13px;
}

.ppid-error ul {

    margin: 8px 0 0;

    padding-left: 20px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 992px) {

    .ppid-flow-steps {

        grid-template-columns:
            repeat(2, 1fr);
    }

}

@media (max-width: 768px) {

    .ppid-request-hero {

        padding: 55px 0;
    }

    .ppid-flow-section,
    .ppid-form-section {

        padding: 55px 0;
    }

    .ppid-flow-steps {

        grid-template-columns: 1fr;
    }

    .ppid-form-card {

        padding: 22px;
    }

    .ppid-form-submit {

        justify-content: stretch;
    }

    .btn-ppid-submit {

        width: 100%;
    }

}

@media (max-width: 576px) {

    .ppid-section-heading h2 {

        font-size: 25px;
    }

    .ppid-flow-image-card {

        padding: 8px;

        border-radius: 12px;
    }

    .ppid-form-card {

        padding: 18px;
    }

    .ppid-form-card-header {

        align-items: flex-start;
    }

}

</style>

@endsection
