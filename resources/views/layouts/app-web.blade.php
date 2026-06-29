<!DOCTYPE html>
<html lang="id">
<head>


    <meta charset="UTF-8">
    <title>@yield('title', 'RSUP Surakarta')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/eksekutif.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/testimoni.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/section.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_umum.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_eksekutif.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_mcu.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_homecare.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_diklat.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_diklit.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_diklat_tarif.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_fasilitas.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_maklumat.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layanan_standart.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/tentang_sejarah.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/tentang_visimisi.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/tentang_struktur.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/tentang_dewas.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/tentang_direksi.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/tentang_penghargaan.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/tentang_lokasi.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/informasi_ketersediaantt.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/informasi_registrasi.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/informasi_tarif.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/informasi_skm.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/informasi_hkp.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/informasi_privacy.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/informasi_faq.css') }}?v={{ time() }}">



    <title>RSUP Surakarta</title>

    <meta name="description" content="Website resmi RSUP Surakarta">

    <meta property="og:type" content="website">
    <meta property="og:title" content="RSUP Surakarta">
    <meta property="og:description"
        content="Informasi layanan kesehatan dan pendaftaran online RSUP Surakarta">
    <meta property="og:image"
        content="{{ asset('img/logo-share.png') }}">
    <meta property="og:url"
        content="{{ url()->current() }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="RSUP Surakarta">
    <meta name="twitter:description" content="Informasi layanan kesehatan dan pendaftaran online RSUP Surakarta">
    <meta name="twitter:image" content="{{ asset('img/logo-share.png') }}">
</head>


<body>
<div class="modal fade"
     id="searchModal"
     tabindex="-1">

    <div class="modal-dialog modal-xl modal-dialog-centered">

        <div class="modal-content search-modal">

            <div class="modal-body">

                <div class="search-header">

                    <h3>Pencarian Website</h3>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>

                </div>

                <input
                    type="text"
                    id="globalSearch"
                    class="form-control search-input"
                    placeholder="Cari dokter, poli atau artikel kesehatan...">

                <div id="searchResult">

                    <div class="search-item">
                        Mulai ketik untuk mencari...
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@include('components.navbar')

@yield('content')

@include('components.footer')

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('library/smooth-scroll.min.js') }}"></script>
<script>
// NAVBAR SCROLL
window.addEventListener("scroll", function () {
    let navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});

// SCROLL ANIMATION
function reveal() {
    let reveals = document.querySelectorAll(".reveal");
    reveals.forEach(el => {
        let windowHeight = window.innerHeight;
        let elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - 100) {
                el.classList.add("active");
            }
        });
    }
    window.addEventListener("scroll", reveal);
</script>
<!-- <script>
    document.querySelectorAll('.lang-switch span').forEach(el => {
        el.addEventListener('click', function () {
            document.querySelectorAll('.lang-switch span').forEach(s => s.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>

<script>

    document.addEventListener('contextmenu', function(e){
        e.preventDefault();
    });


    document.addEventListener('keydown', function(e){

        // if(e.key === 'F12'){
        //     e.preventDefault();
        // }

        if(e.ctrlKey && e.shiftKey && e.key === 'I'){
            e.preventDefault();
        }

        if(e.ctrlKey && e.shiftKey && e.key === 'J'){
            e.preventDefault();
        }

        if(e.ctrlKey && e.key === 'u'){
            e.preventDefault();
        }

        if(e.ctrlKey && e.shiftKey && e.key === 'C'){
            e.preventDefault();
        }

    });


</script> -->

<script>
    document
    .querySelectorAll(
    '.dropdown-submenu .dropdown-toggle'
    )
    .forEach(function(el){

        el.addEventListener('click', function(e){

            e.preventDefault();
            e.stopPropagation();

            // MOBILE ONLY
            if(window.innerWidth < 992){

                const parent =
                this.parentElement;

                // CLOSE / OPEN
                if(parent.classList.contains('open')){

                    parent.classList.remove('open');

                }else{

                    parent.classList.add('open');

                }

            }

        });

    });

</script>
<script>

const data = [
{
    type:'Dokter',
    title:'dr. Andhika Hernawan Novianda, Sp. U',
    url:'/dokter'
},
{
    type:'Dokter',
    title:'dr. Arif Budi Satria,Sp. B, M.Kes',
    url:'/dokter'
},

{
    type:'Dokter',
    title:'dr. Arif Apriyanto, Sp.N',
    url:'/dokter'
},

{
    type:'Poli',
    title:'Poli Penyakit Dalam',
    url:'/layanan-umum'
},

{
    type:'Artikel',
    title:'Pencegahan Diabetes Melitus',
    url:'/artikel/diabetes'
}

];

document
.getElementById('globalSearch')
.addEventListener('keyup', function(){

    let keyword =
    this.value.toLowerCase();

    let html='';

    data
    .filter(item =>
        item.title
        .toLowerCase()
        .includes(keyword)
    )
    .forEach(item => {

        html += `
            <a href="${item.url}"
               class="search-item d-block text-dark text-decoration-none">

                <strong>${item.type}</strong><br>
                ${item.title}

            </a>
        `;

    });

    document
    .getElementById('searchResult')
    .innerHTML =
    html || '<div class="search-item">Tidak ditemukan</div>';

});

</script>
</body>

</html>
