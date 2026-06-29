<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.layanan.layanan_umum');
    }


    public function eksekutif()
    {

        return view('pages.layanan.layanan_eksekutif');
    }


     public function mcu()
    {

        return view('pages.layanan.layanan_mcu');
    }

     public function homecare()
    {

        return view('pages.layanan.layanan_homecare');
    }



    public function diklat()
    {

        return view('pages.diklat.diklat');
    }

    public function diklit()
    {

        return view('pages.diklat.diklit');
    }

    public function tarif_diklat()
    {

        return view('pages.diklat.tarif');
    }

    public function fasilitas()
    {

        return view('pages.layanan.fasilitas');
    }


      public function standart()
    {

        return view('pages.layanan.standart');
    }

      public function maklumat()
    {

        return view('pages.layanan.maklumat');
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
