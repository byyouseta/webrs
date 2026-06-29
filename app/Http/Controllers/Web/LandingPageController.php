<?php

namespace App\Http\Controllers\Web;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Promotion;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $services = Service::all();

        $testimonials = Testimonial::latest()
                        ->take(10)
                        ->get();

       $promotions = Promotion::with('translation')
        ->latest()
        ->take(10)
        ->get();

        $articles = Article::with('translation')
        ->latest()
        ->take(10)
        ->get();


       //dd($articles );

        return view('pages.home',compact(['testimonials','promotions','articles']));
    }

    /**
     * Show the form for creating a new resource.
     */
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
