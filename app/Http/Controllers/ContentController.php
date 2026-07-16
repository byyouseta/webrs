<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function information()
    {
        return view('backend.content.index');
    }

    public function heroBanners()
    {
        return view('backend.content.hero-banners');
    }

    public function heroShortcuts()
    {
        return view('backend.content.hero-shortcuts');
    }

    public function pages()
    {
        return view('backend.content.pages');
    }

    public function services()
    {
        return view('backend.content.services');
    }
    public function promotions()
    {
        return view('backend.content.promotions');
    }

    public function testimonials()
    {
        return view('backend.content.testimonials');
    }

     public function ppids()
    {
        return view('backend.content.ppids');
    }
    public function doctors()
    {
        return view('backend.content.doctors');
    }
}
