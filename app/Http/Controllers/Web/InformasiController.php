<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function bed()
    {

        $ruangan = [

                [
                    'nama'   => 'SEMBADRA',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],

                [
                    'nama'   => 'SADEWA INFEKSI',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],

                [
                    'nama'   => 'SADEWA 2',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],

                [
                    'nama'   => 'NAKULA ISOLASI',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],

                [
                    'nama'   => 'NAKULA 2',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],

                [
                    'nama'   => 'ICU',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],

                [
                    'nama'   => 'HCU',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],
                [
                    'nama'   => 'NICU',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],
                [
                    'nama'   => 'PICU',
                    'kelas'  => '-',
                    'total'  => 'N/A',
                    'isi'    => 'N/A',
                    'kosong' => 'N/A'
                ],

        ];

        return view('pages.informasi.informasi_ketersediaantt',compact(['ruangan']));
    }

     public function registrasi()
    {
        return view('pages.informasi.informasi_registrasi');
    }


     public function tarif()
    {
        return view('pages.informasi.informasi_tarif');
    }

     public function skm()
    {
        return view('pages.informasi.informasi_skm');
    }

     public function hkp()
    {
        return view('pages.informasi.informasi_hkp');
    }

     public function privacy()
    {
        return view('pages.informasi.informasi_privacy');
    }

      public function faq()
    {
        return view('pages.informasi.informasi_faq');
    }


    public function index()
    {
        return view('pages.informasi');
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
