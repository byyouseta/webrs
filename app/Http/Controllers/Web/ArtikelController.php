<?php

namespace App\Http\Controllers\Web;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function detailArtikel($slug)
    {
        $locale = app()->getLocale();

        // Pastikan hanya id / en
        if (!in_array($locale, ['id', 'en'])) {
            $locale = 'id';
        }

        $article = Article::with([
            'translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            }
        ])
        ->where('is_published', 1)
        ->whereHas('translations', function ($query) use ($slug, $locale) {
            $query->where('slug', $slug)
                ->where('locale', $locale);
        })
        ->firstOrFail();

        $translation = $article->translations->first();

        return view('pages.informasi.artikel_detail', compact(
            'article',
            'translation'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function Artikel(request $request){
        $locale = app()->getLocale();
        $type='artikel';

        // Pastikan hanya id / en
        if (!in_array($locale, ['id', 'en'])) {
            $locale = 'id';
        }

        $article = Article::with([
            'translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            }
        ])
        ->where('is_published', 1)
        ->whereHas('translations', function ($query) use ($type, $locale) {
            $query->where('type', $type)
                ->where('locale', $locale);
        })
        ->get();

        //dd($article);
         return view('pages.informasi.artikel', compact(
            'article',
            'locale'
        ));



    }

    public function Berita(request $request){
        $locale = app()->getLocale();
        $type='berita';

        // Pastikan hanya id / en
        if (!in_array($locale, ['id', 'en'])) {
            $locale = 'id';
        }

        $berita = Article::with([
            'translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            }
        ])
        ->where('is_published', 1)
        ->whereHas('translations', function ($query) use ($type, $locale) {
            $query->where('type', $type)
                ->where('locale', $locale);
        })
        ->get();

        //dd($berita);
        return view('pages.informasi.berita', compact(
            'berita',
            'locale'
        ));


    }


     public function Pengumuman(request $request){
        $locale = app()->getLocale();
        $type='berita';

        // Pastikan hanya id / en
        if (!in_array($locale, ['id', 'en'])) {
            $locale = 'id';
        }

        $pengumuman = Article::with([
            'translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            }
        ])
        ->where('is_published', 1)
        ->whereHas('translations', function ($query) use ($type, $locale) {
            $query->where('type', $type)
                ->where('locale', $locale);
        })
        ->get();

        //dd($pengumuman);
        return view('pages.informasi.pengumuman', compact(
            'pengumuman',
            'locale'
        ));

    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
