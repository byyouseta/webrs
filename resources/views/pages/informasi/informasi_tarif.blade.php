@extends('layouts.app-web')

@section('title', 'Tarif Layanan | RSUP Surakarta')

@section('content')

<!-- HERO -->
<section class="tarif-hero">

    <div class="container-custom">

        <span class="tarif-badge">
            INFORMASI TARIF
        </span>

        <h1>
            Tarif Layanan RSUP Surakarta
        </h1>

        <p>
            Informasi tarif layanan kesehatan RSUP Surakarta
            untuk memberikan transparansi biaya kepada masyarakat.
        </p>

    </div>

</section>


<!-- TARIF -->
<section class="tarif-section">

    <div class="container-custom">

        <div class="tarif-card">

            <div class="tarif-header">

                <div>

                    <h2>
                        Daftar Tarif Pelayanan
                    </h2>

                    <p>
                        Gunakan kolom pencarian untuk menemukan tarif layanan.
                    </p>

                </div>

                <input
                    type="text"
                    id="searchTarif"
                    placeholder="Cari layanan..."
                    class="tarif-search"
                >

            </div>

            <div class="table-responsive">

                <table class="table-tarif" id="tarifTable">

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Jenis Layanan</th>
                            <th>Tarif</th>
                            <th>Keterangan</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Paket MCU Narkoba 3 Parameter, Rohani, Jasmani</td>
                            <td>Rp 355.000</td>
                            <td>Per Pemeriksaan</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Paket MCU Narkoba 3 Parameter dan Jasmani</td>
                            <td>Rp 164.000</td>
                            <td>Per Pemeriksaan</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Paket MCU Narkoba 6 Parameter, Rohani, Jasmani</td>
                            <td>Rp 428.000</td>
                            <td>Per Pemeriksaan</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Paket MCU Narkoba 6 Parameter dan Jasmani</td>
                            <td>Rp 236.000</td>
                            <td>Per Pemeriksaan</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Paket MCU Rohani dan Jasmani</td>
                            <td>Rp 250.000</td>
                            <td>Per Pemeriksaan</td>
                        </tr>

                         <tr>
                            <td>6</td>
                            <td>Paket Vaksin Meningitis</td>
                            <td>Rp 305.000</td>
                            <td>Per Pemeriksaan</td>
                        </tr>

                         <tr>
                            <td>7</td>
                            <td>Paket Vaksin Meningitis daan Influenza 3 Strain</td>
                            <td>Rp 475.000</td>
                            <td>Per Pemeriksaan</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</section>


<!-- INFORMASI -->
<section class="tarif-info">

    <div class="container-custom">

        <div class="info-box">

            <i class="fas fa-info-circle"></i>

            <div>

                <h4>
                    Informasi Tarif
                </h4>

                <p>
                    Tarif yang ditampilkan merupakan tarif umum.
                    Tarif pelayanan dapat berubah sewaktu-waktu sesuai
                    ketentuan yang berlaku di RSUP Surakarta.
                </p>

            </div>

        </div>

    </div>

</section>
<script>

document.addEventListener('DOMContentLoaded', function(){

    const input = document.getElementById('searchTarif');

    input.addEventListener('keyup', function(){

        let value = this.value.toLowerCase();

        let rows = document.querySelectorAll('#tarifTable tbody tr');

        rows.forEach(function(row){

            let text = row.textContent.toLowerCase();

            if(text.indexOf(value) > -1){

                row.style.display = '';

            }else{

                row.style.display = 'none';

            }

        });

    });

});

</script>
@endsection


@push('scripts')

<script>

document
.getElementById('searchTarif')
.addEventListener('keyup', function(){

    let value = this.value.toLowerCase();

    let rows = document.querySelectorAll('#tarifTable tbody tr');

    rows.forEach(row => {

        let text = row.innerText.toLowerCase();

        row.style.display =
            text.includes(value)
            ? ''
            : 'none';

    });

});

</script>

@endpush
