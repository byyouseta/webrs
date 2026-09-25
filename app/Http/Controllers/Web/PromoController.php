<?php

namespace App\Http\Controllers\Web;
use App\Models\Promotion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {

       $promotions = Promotion::active()->with('translation')
        ->latest()
        ->take(10)
        ->get();

        return view('pages.promo',compact(['promotions']));
    }


    public function detailPromotion($encodedId)
    {
        $encodedId = strtr($encodedId, '-_', '+/');

        $padding = strlen($encodedId) % 4;

        if ($padding > 0) {
            $encodedId .= str_repeat('=', 4 - $padding);
        }

        $id = base64_decode($encodedId, true);

        if ($id === false || !ctype_digit($id)) {
            abort(404);
        }

        $promotion = Promotion::active()
            ->with([
                'translation',
                'service'
            ])
            ->where('id', $id)
            ->firstOrFail();


        return view('pages.promo_detail',compact('promotion'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
