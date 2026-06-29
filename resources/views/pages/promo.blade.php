@extends('layouts.app-web')
@section('title', 'Promo Kesehatan | RSUP Surakarta')

@section('content')

<section class="section promo-page">
    <div class="container-custom">

        <!-- HEADER -->
        <div class="promo-page-header">

            <span class="badge-promo">
                Promo RSUP Surakarta
            </span>

            <h1>
                Promo & Penawaran Spesial
            </h1>

            <p>
                Dapatkan berbagai promo layanan kesehatan terbaik
                dengan fasilitas modern dan tenaga medis profesional.
            </p>

        </div>

        <!-- FILTER -->
        <div class="promo-filter">

            <button class="active" data-filter="all">
                Semua
            </button>

            <button data-filter="Medical Check Up">
                Medical Check Up
            </button>



        </div>

        <!-- PROMO GRID -->
        <div class="promo-grid" id="promoGrid">

            @foreach($promotions as $promotion)

                <div class="promo-item"
                    data-category="{{ $promotion->service->translation->title ?? '' }}">

                    <div class="promo-image">
                        <img src="{{ asset('storage/'.$promotion->image) }}"
                            alt="{{ $promotion->translation->title ?? '' }}">
                    </div>

                    <div class="promo-body">

                        <span class="promo-tag">
                            {{ $promotion->category ?? 'Promo' }}
                        </span>

                        <h4>
                            {{ $promotion->translation->title ?? '-' }}
                        </h4>

                        <p>
                            {{ $promotion->translation->excerpt ?? '' }}
                        </p>

                        <div class="promo-meta">

                            <span>
                                <i class="bi bi-calendar-event"></i>

                                {{ \Carbon\Carbon::parse($promotion->start_date)->translatedFormat('d F Y') }}
                                -

                                {{ \Carbon\Carbon::parse($promotion->end_date)->translatedFormat('d F Y') }}
                            </span>

                        </div>

                    </div>

                </div>

                @endforeach



        </div>

    </div>
</section>


<script>
const filterButtons = document.querySelectorAll('.promo-filter button');
const promoItems = document.querySelectorAll('.promo-item');

filterButtons.forEach(button => {

    button.addEventListener('click', () => {

        filterButtons.forEach(btn =>
            btn.classList.remove('active')
        );

        button.classList.add('active');

        const filter = button.dataset.filter;

        promoItems.forEach(item => {

            if(
                filter === 'all' ||
                item.dataset.category === filter
            ){
                item.style.display = 'block';
            }else{
                item.style.display = 'none';
            }

        });

    });

});
</script>

@endsection
