<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Doctor;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->query('cari');
        $spesialis = $request->query('spesialis');

        /*
        |--------------------------------------------------------------------------
        | Ambil jadwal dokter dari API
        |--------------------------------------------------------------------------
        */
        $response = Http::withoutVerifying()
            ->withHeaders([
                'X-API-KEY' => config('services.bridging.key'),
            ])
            ->get(
                config('services.bridging.url') . '/doctor-schedules'
            );

        if (!$response->successful()) {
            abort(500, 'API Error');
        }

        $jadwalDokter = collect(
            $response->json('data', [])
        );

        $urutanHari = [
            'SENIN'  => 1,
            'SELASA' => 2,
            'RABU'   => 3,
            'KAMIS'  => 4,
            'JUMAT'  => 5,
            'SABTU'  => 6,
            'MINGGU' => 7,
        ];

        /*
        |--------------------------------------------------------------------------
        | Daftar spesialis
        |--------------------------------------------------------------------------
        | Diambil sebelum filter supaya pilihan dropdown tidak hilang setelah
        | pengguna memilih salah satu spesialis.
        */
        $spesialisList = Doctor::active()
            ->whereNotNull('spesialis')
            ->where('spesialis', '!=', '')
            ->orderBy('spesialis')
            ->pluck('spesialis')
            ->unique()
            ->values();

        /*
        |--------------------------------------------------------------------------
        | Query dokter
        |--------------------------------------------------------------------------
        */
        $doctors = Doctor::active()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery
                        ->where(
                            'nama',
                            'like',
                            '%' . $search . '%'
                        )
                        ->orWhere(
                            'spesialis',
                            'like',
                            '%' . $search . '%'
                        )
                        ->orWhere(
                            'nip',
                            'like',
                            '%' . $search . '%'
                        );
                });
            })
            ->when($spesialis, function ($query) use ($spesialis) {
                $query->where('spesialis', $spesialis);
            })
            ->orderBy('nama')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Tambahkan jadwal ke setiap model Doctor
        |--------------------------------------------------------------------------
        */
        $doctors->each(function ($doctor) use (
            $jadwalDokter,
            $urutanHari
        ) {
            $jadwal = $jadwalDokter
                ->filter(function ($jadwal) use ($doctor) {
                    return (string) ($jadwal['kd_dokter'] ?? '')
                        === (string) $doctor->nip;
                })
                ->sort(function ($a, $b) use ($urutanHari) {
                    $hariA = $urutanHari[
                        strtoupper(
                            trim($a['hari_kerja'] ?? '')
                        )
                    ] ?? 99;

                    $hariB = $urutanHari[
                        strtoupper(
                            trim($b['hari_kerja'] ?? '')
                        )
                    ] ?? 99;

                    if ($hariA === $hariB) {
                        return strtotime($a['jam_mulai'] ?? '00:00:00')
                            <=>
                            strtotime($b['jam_mulai'] ?? '00:00:00');
                    }

                    return $hariA <=> $hariB;
                })
                ->values();

            /*
             * Menambahkan atribut jadwal sementara.
             * Tidak disimpan ke database.
             */
            $doctor->setAttribute('jadwal', $jadwal);
        });

        return view(
            'pages.dokter',
            [
                'dokters' => $doctors,
                'search' => $search,
                'spesialis' => $spesialis,
                'spesialisList' => $spesialisList,
            ]
        );
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
