<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function bed()
    {

       $response = Http::withoutVerifying()
            ->withHeaders([
                'X-API-KEY' => config('services.bridging.key')
            ])
            ->get(config('services.bridging.url') . '/rooms');

            if (!$response->successful()) {
                abort(500, 'API Error');
            }

            $raw = collect($response->json('data'))
            ->filter(function ($item) {
                return (int) $item['statusdata'] === 1;
            });
        //dd($raw);

        $ruangan = $raw->groupBy('nm_bangsal')->map(function ($items) {

        $total = $items->count();

        $kosong = $items->where('status', 'KOSONG')->count();

        $isi = $items->whereNotIn('status', ['KOSONG'])->count();

        return [
            'nama'   => $items->first()['nm_bangsal'],
            'kelas'  => $items->first()['kelas'],
            'total'  => $total,
            'kosong' => $kosong,
            'isi'    => $isi,
        ];
        })->values();


        $totalBed = $raw->count();
        $totalKosong = $raw->where('status', 'KOSONG')->count();
        $totalIsi = $raw->whereNotIn('status', ['KOSONG'])->count();
        $totalRuang = $raw->groupBy('nm_bangsal')->count();

        $bor = $totalBed > 0 ? round(($totalIsi / $totalBed) * 100) : 0;
        //dd($totalIsi,$totalBed,$bor);

        return view('pages.informasi.informasi_ketersediaantt',compact(['ruangan','totalBed','totalKosong','totalIsi','totalRuang','bor']));
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
