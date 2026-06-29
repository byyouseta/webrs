@extends('layouts.app-web')

@section('title','Ketersediaan Tempat Tidur')

@section('content')

<section class="bed-dashboard">

    <div class="container-custom">
        <div class="dashboard-wrapper">
        <div class="dashboard-header">

            <div>

                <span class="dashboard-label">
                    INFORMASI RAWAT INAP
                </span>

                <h1>
                    Dashboard Ketersediaan Tempat Tidur
                </h1>

                <p>
                    Data ketersediaan tempat tidur RSUP Surakarta.
                    Diperbarui :
                    {{ now()->format('d M Y H:i') }} WIB
                </p>

            </div>

            <div class="dashboard-action">

                <button onclick="location.reload()">
                    <i class="fas fa-sync-alt"></i>
                    Refresh
                </button>

            </div>

        </div>

        <!-- STATISTIK -->

        <div class="stat-grid">

            <div class="stat-card">

                <i class="fas fa-hospital"></i>

                <div>

                    <span>Total Ruang</span>

                    <h3>9</h3>

                </div>

            </div>

            <div class="stat-card">

                <i class="fas fa-bed"></i>

                <div>

                    <span>Total Bed</span>

                    <h3>100</h3>

                </div>

            </div>

            <div class="stat-card warning">

                <i class="fas fa-user-injured"></i>

                <div>

                    <span>Bed Terisi</span>

                    <h3>N/A</h3>

                </div>

            </div>

            <div class="stat-card success">

                <i class="fas fa-check-circle"></i>

                <div>

                    <span>Bed Kosong</span>

                    <h3>N/A</h3>

                </div>

            </div>

        </div>


        <!-- BOR -->

        <div class="bor-card">

            <div class="bor-top">

                <h3>Okupansi Rawat Inap</h3>

                <span>N/A</span>

            </div>

            <div class="progress-custom">

                <div class="progress-value"
                     style="width:70%">
                </div>

            </div>

        </div>


        <!-- RUANG -->

        <div class="room-grid">

            @foreach($ruangan as $item)

            <div class="room-card">

                <div class="room-header">

                    <div>

                        <h4>
                            {{ $item['nama'] }}
                        </h4>

                        <small>
                            {{ $item['kelas'] }}
                        </small>

                    </div>

                    @if($item['kosong'] <= 2)

                    <span class="status limited">
                        Terbatas
                    </span>

                    @else

                    <span class="status available">
                        Tersedia
                    </span>

                    @endif

                </div>

                <div class="room-info">

                    <div>

                        <span>Total</span>
                        <strong>{{ $item['total'] }}</strong>

                    </div>

                    <div>

                        <span>Terisi</span>
                        <strong>{{ $item['isi'] }}</strong>

                    </div>

                    <div>

                        <span>Kosong</span>
                        <strong>{{ $item['kosong'] }}</strong>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

    </div>


</section>

@endsection
