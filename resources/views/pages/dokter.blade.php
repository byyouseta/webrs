@extends('layouts.app-web')
@section('title', 'Dokter | RSUP Surakarta')
@section('content')

<section class="section dokter-page">
    <div class="container-custom">

        <!-- FILTER -->
        <form action="{{ route('dokter_list') }}" method="GET">

            <div class="dokter-top-filter">

                <!-- SEARCH -->
                <div class="dokter-search">
                    <input
                        type="text"
                        name="cari"
                        placeholder="Cari nama dokter..."
                        value="{{ request('cari') }}"
                    >
                </div>

                <!-- FILTER SPESIALIS -->
                <div class="spesialis-filter">

                    <!-- semua -->
                    <a
                        href="{{ route('dokter_list', [
                            'cari' => request('cari')
                        ]) }}"
                        class="filter-btn {{ request('spesialis') == null ? 'active' : '' }}"
                    >
                        Semua
                    </a>

                    @foreach($spesialisList as $spesialis)

                    <a
                        href="{{ route('dokter_list', [
                            'spesialis' => $spesialis,
                            'cari' => request('cari')
                        ]) }}"
                        class="filter-btn {{ request('spesialis') == $spesialis ? 'active' : '' }}"
                    >
                        {{ $spesialis }}
                    </a>

                    @endforeach

                </div>

            </div>

        </form>

        <!-- LIST -->
        <div class="dokter-grid">

            @foreach($dokters as $dokter)
            <div class="dokter-card">

                <img src="{{ asset('storage/' . $dokter->foto) }}" alt="dokter">

                <div class="dokter-body">

                    <h5>{{ $dokter['nama'] }}</h5>

                    <span>{{ $dokter['spesialis'] }}</span>

                    <a
                        href="https://epasien.rsupsurakarta.id/"
                        target="_blank"
                        class="btn-primary"
                    >
                        {{ __('doctor.booking') }}
                    </a>

                </div>


                <div class="doctor-schedule">

                    @if(count($dokter['jadwal']) > 0)

                        @foreach($dokter['jadwal'] as $jadwal)

                            <div class="schedule-item">

                                <span class="schedule-day">
                                    {{ $jadwal['hari_kerja'] }}
                                </span>

                                <span class="schedule-time">

                                    {{ substr($jadwal['jam_mulai'],0,5) }}
                                    -
                                    {{ substr($jadwal['jam_selesai'],0,5) }}

                                </span>

                            </div>

                                @endforeach

                            @else

                                <div class="schedule-empty">

                                    Jadwal belum tersedia

                                </div>

                            @endif

                        </div>

            </div>
            @endforeach

        </div>

    </div>
</section>



<div class="chatbot-wrapper">

    <!-- TOGGLE -->
    <button class="chatbot-btn" onclick="toggleChat()">
        <i class="bi bi-chat-dots"></i>
    </button>

    <!-- POPUP -->
    <div class="chatbot-box" id="chatBox">
        <div class="chat-header">
            <span>Customer Service</span>
            <button onclick="toggleChat()">✕</button>
        </div>

        <div class="chat-body">
            <p>Halo 👋 Ada yang bisa kami bantu?</p>

            <a href="https://wa.me/6287735888811" target="_blank" class="chat-option">
                WhatsApp
            </a>
            <!-- <a href="#" class="chat-option">
                Chat Bot AI
            </a> -->
        </div>
    </div>

</div>

@endsection
