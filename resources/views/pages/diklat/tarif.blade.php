@extends('layouts.app-web')
@section('title', 'Tarif Penelitian | RSUP Surakarta')
@section('content')

<!-- TARIF PENELITIAN -->
<section class="research-tariff-section">

    <div class="container-custom">

        <div class="section-title-center">

            <span>TARIF PENELITIAN</span>

            <h2>
                Tarif Layanan Penelitian
            </h2>

        </div>

        <!-- SEARCH -->
        <div class="tariff-search">

            <input
                type="text"
                id="tariffSearch"
                placeholder="Cari jenis layanan penelitian...">

        </div>

        <div class="table-responsive">

            <table class="table tariff-table" id="tariffTable">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Jenis Layanan</th>
                        <th>Satuan</th>
                        <th>Tarif</th>
                    </tr>

                </thead>

                <tbody>

                    <!-- PENELITIAN -->

                    <tr class="table-category">
                        <td colspan="4">
                            A. PENELITIAN
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>DIII</td>
                        <td>Per Judul Penelitian</td>
                        <td>Rp 240.000</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>D IV / Strata 1</td>
                        <td>Per Judul Penelitian</td>
                        <td>Rp 290.000</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>S2 / Praktik PPDS</td>
                        <td>Per Judul Penelitian</td>
                        <td>Rp 750.000</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>S3</td>
                        <td>Per Judul Penelitian</td>
                        <td>Rp 1.100.000</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Institusi</td>
                        <td>Per Judul Penelitian</td>
                        <td>Rp 1.100.000</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>Pengajar / Dosen</td>
                        <td>Per Judul Penelitian</td>
                        <td>Rp 1.000.000</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>Print Out Data Sekunder</td>
                        <td>Per Lembar</td>
                        <td>Rp 5.000</td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Wawancara Mendalam / Survei (S1)</td>
                        <td>&lt; 10 Responden</td>
                        <td>Rp 200.000</td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td>Wawancara Mendalam / Survei (S2/S3)</td>
                        <td>&lt; 10 Responden</td>
                        <td>Rp 500.000</td>
                    </tr>

                    <!-- SURVEI -->

                    <tr class="table-category">
                        <td colspan="4">
                            B. SURVEI PENDAHULUAN
                        </td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td>DIII / DIV</td>
                        <td>Per Kegiatan</td>
                        <td>Rp 75.000</td>
                    </tr>

                    <tr>
                        <td>11</td>
                        <td>S1</td>
                        <td>Per Kegiatan</td>
                        <td>Rp 100.000</td>
                    </tr>

                    <tr>
                        <td>12</td>
                        <td>S2</td>
                        <td>Per Kegiatan</td>
                        <td>Rp 150.000</td>
                    </tr>

                    <tr>
                        <td>13</td>
                        <td>S3</td>
                        <td>Per Kegiatan</td>
                        <td>Rp 250.000</td>
                    </tr>

                    <tr>
                        <td>14</td>
                        <td>Institusi / Mandiri</td>
                        <td>Per Kegiatan</td>
                        <td>Rp 250.000</td>
                    </tr>

                    <tr>
                        <td>15</td>
                        <td>Pengajar / Dosen</td>
                        <td>Per Kegiatan</td>
                        <td>Rp 250.000</td>
                    </tr>

                    <tr>
                        <td>16</td>
                        <td>Uji Validitas</td>
                        <td>Per Sampel</td>
                        <td>Rp 5.000</td>
                    </tr>

                    <tr>
                        <td>17</td>
                        <td>Bahan Penelitian (Sampel)</td>
                        <td>Per Sampel Spesimen</td>
                        <td>Rp 75.000</td>
                    </tr>

                    <tr>
                        <td>18</td>
                        <td>Ethical Clearance</td>
                        <td>Free</td>
                        <td>Gratis</td>
                    </tr>

                </tbody>

            </table>

        </div>

        <!-- INFO -->
        <div class="alert alert-info mt-4">

            <strong>Catatan:</strong>

            Tarif layanan penelitian dapat berubah sewaktu-waktu
            sesuai kebijakan yang berlaku di RSUP Surakarta.

        </div>

    </div>

</section>


<!-- PEMBAYARAN -->
<!-- <section class="payment-section">

    <div class="container-custom">

        <div class="payment-card">

            <h2>
                Informasi Pembayaran
            </h2>

            <div class="payment-grid">

                <div>

                    <h5>Bank</h5>
                    <p>Bank BNI</p>

                </div>

               <div>

                    <h5>Nomor Virtual Account</h5>

                    <div class="rekening-copy">

                        <span id="rekeningNumber">
                            1234567890
                        </span>

                        <button
                            type="button"
                            onclick="copyRekening()"
                            class="copy-btn">

                            <i class="fas fa-copy"></i>
                            Copy

                        </button>

                    </div>

                </div>

                <div>

                    <h5>Atas Nama</h5>
                    <p>Diklat RSUP Surakarta</p>

                </div>

            </div>

        </div>

    </div>

</section> -->


<!-- KONFIRMASI -->
<section class="confirmation-section">

    <div class="container-custom">

        <div class="confirmation-card">

            <h2>
                Pengiriman Bukti Pembayaran
            </h2>

            <p>
                Setelah melakukan pembayaran, peserta wajib mengirimkan
                bukti transfer melalui salah satu media berikut:
            </p>

            <ul>

                <li>
                    WhatsApp : 0896-4946-7197
                </li>

                <li>
                    Email : diklat@rsupsurakarta.id
                </li>

                <li>
                    Website DIKLAT RSUP Surakarta
                </li>

            </ul>

        </div>

    </div>

</section>

<script>

document.getElementById('tariffSearch')
.addEventListener('keyup', function(){

    let value =
    this.value.toLowerCase();

    let rows =
    document.querySelectorAll(
        '#tariffTable tbody tr'
    );

    rows.forEach(row => {

        if(
            row.classList.contains(
                'table-category'
            )
        ){
            return;
        }

        row.style.display =
        row.innerText
            .toLowerCase()
            .includes(value)
            ? ''
            : 'none';

    });

});

</script>

<script>

function copyRekening(){

    const rekening =
    document.getElementById(
        'rekeningNumber'
    ).innerText;

    navigator.clipboard.writeText(
        rekening
    );

    alert(
        'Nomor rekening berhasil disalin'
    );
}

</script>

@endsection
