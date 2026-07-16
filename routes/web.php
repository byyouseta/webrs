<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Web\DokterController;
use App\Http\Controllers\Web\TentangKamiController;
use App\Http\Controllers\Web\InformasiController;
use App\Http\Controllers\Web\PpidController;
use App\Http\Controllers\Web\PromoController;
use App\Http\Controllers\Web\LayananController;

use App\Http\Controllers\Web\LandingPageController;


//Route::view('/', 'welcome');
// Route::get('/', function () {
//     return view('pages.home');
// })->name('home_web');

Route::get('/', [LandingPageController::class, 'index'])->name('home_web');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' => false,
]);

//Content
Route::get('master/information', [App\Http\Controllers\ContentController::class, 'information'])->name('content.information');
Route::get('content/hero-banners', [App\Http\Controllers\ContentController::class, 'heroBanners'])->name('content.hero-banners');
Route::get('content/hero-shortcuts', [App\Http\Controllers\ContentController::class, 'heroShortcuts'])->name('content.hero-shortcuts');
Route::get('content/pages', [App\Http\Controllers\ContentController::class, 'pages'])->name('content.pages');
Route::get('content/services', [App\Http\Controllers\ContentController::class, 'services'])->name('content.services');
Route::get('content/promotions', [App\Http\Controllers\ContentController::class, 'promotions'])->name('content.promotions');
Route::get('content/testimonials', [App\Http\Controllers\ContentController::class, 'testimonials'])->name('content.testimonials');
Route::get('content/ppids', [App\Http\Controllers\ContentController::class, 'ppids'])->name('content.ppids');
Route::get('content/doctors', [App\Http\Controllers\ContentController::class, 'doctors'])->name('content.doctors');

Route::get('master/languages', [App\Http\Controllers\MasterController::class, 'languages'])->name('master.languages');
Route::get('master/header', [App\Http\Controllers\MasterController::class, 'header'])->name('master.header');
Route::get('master/menu', [App\Http\Controllers\MasterController::class, 'menu'])->name('master.menu');
//Master User
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/master/users', [App\Http\Controllers\UserController::class, 'index'])->name('master.users');
Route::get('/master/permissions', [App\Http\Controllers\UserController::class, 'permissions'])->name('master.permissions');
Route::get('/master/roles', [App\Http\Controllers\UserController::class, 'role'])->name('master.roles');
Route::get('/master/logs', [App\Http\Controllers\UserController::class, 'logs'])->name('master.logs');



Route::get('/lang/{locale}', function ($locale) {

    if (in_array($locale, ['id', 'en'])) {
        Session::put('locale', $locale);
    }

    return redirect()->back();
});

Route::get('/dokter',      [DokterController::class, 'index'])->name('dokter_list');
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentang_kami');
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi');
Route::get('/ppid', [PpidController::class, 'index'])->name('ppid');
Route::get('/promo', [PromoController::class, 'index'])->name('promo');
Route::get('/layanan/umum/', [LayananController::class, 'index'])->name('layanan_umum');
Route::get('/layanan/eksekutif/', [LayananController::class, 'eksekutif'])->name('layanan_eksekutif');
Route::get('/layanan/mcu/', [LayananController::class, 'mcu'])->name('layanan_mcu');
Route::get('/layanan/homecare/', [LayananController::class, 'homecare'])->name('layanan_homecare');
Route::get('/layanan/diklat/', [LayananController::class, 'diklat'])->name('layanan_diklat');
Route::get('/layanan/diklit/', [LayananController::class, 'diklit'])->name('layanan_diklit');
Route::get('/layanan/diklat/tarif/', [LayananController::class, 'tarif_diklat'])->name('layanan_tarif_diklat');
Route::get('/layanan/fasilitas/', [LayananController::class, 'fasilitas'])->name('layanan_fasilitas');
Route::get('/layanan/maklumat/', [LayananController::class, 'maklumat'])->name('layanan_maklumat');
Route::get('/layanan/standart/', [LayananController::class, 'standart'])->name('layanan_standart');

Route::get('/layanan/standart/', [LayananController::class, 'standart'])->name('layanan_standart');
Route::get('/layanan/maklumat/', [LayananController::class, 'maklumat'])->name('layanan_maklumat');

Route::get('/tentangkami/sejarah/', [TentangKamiController::class, 'sejarah'])->name('sejarah');
Route::get('/tentangkami/visimisi/', [TentangKamiController::class, 'visimisi'])->name('visimisi');
Route::get('/tentangkami/struktur/', [TentangKamiController::class, 'struktur'])->name('struktur_organisasi');
Route::get('/tentangkami/dewas/', [TentangKamiController::class, 'dewas'])->name('dewan_pengawas');
Route::get('/tentangkami/direksi/', [TentangKamiController::class, 'direksi'])->name('direksi');
Route::get('/tentangkami/penghargaan/', [TentangKamiController::class, 'penghargaan'])->name('penghargaan');
Route::get('/tentangkami/lokasi/', [TentangKamiController::class, 'lokasi'])->name('lokasi_kontak');


Route::get('/informasi/bed/', [InformasiController::class, 'bed'])->name('info_bed');
Route::get('/informasi/registrasi/', [InformasiController::class, 'registrasi'])->name('info_registrasi');
Route::get('/informasi/tarif/', [InformasiController::class, 'tarif'])->name('info_tarif');
Route::get('/informasi/skm/', [InformasiController::class, 'skm'])->name('info_skm');
Route::get('/informasi/hkp/', [InformasiController::class, 'hkp'])->name('info_hkp');
Route::get('/informasi/privacy/', [InformasiController::class, 'privacy'])->name('info_privacy');
Route::get('/informasi/faq/', [InformasiController::class, 'faq'])->name('info_faq');

