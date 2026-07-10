<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {

        $response = Http::withoutVerifying()
                ->withHeaders([
                    'X-API-KEY' => config('services.bridging.key')
                ])
                ->get(config('services.bridging.url') . '/doctor-schedules');

            if (!$response->successful()) {
                abort(500, 'API Error');
            }

        $jadwalDokter = $response->json('data');
        //dd($dokters);
        $urutanHari = [
            'SENIN'  => 1,
            'SELASA' => 2,
            'RABU'   => 3,
            'KAMIS'  => 4,
            'JUMAT'  => 5,
            'SABTU'  => 6,
            'MINGGU' => 7,
        ];

        $search = $request->query('cari');
        //dd($search);

        $spesialis = $request->query('spesialis');

        $dokters = [
            [
                'nip' => '202192',
                'nama' => 'dr. Andhika Hernawan Novianda, Sp. U',
                'spesialis' => 'Spesialis Urologi',
                'foto' => 'img/dokter/dr-Andhika-Sp.webp'
            ],
            [
                'nip' => '198609102014112001',
                'nama' => 'dr. Anita Wijiasari',
                'spesialis' => 'Umum',
                'foto' => 'img/dokter/dr-Anita.webp'
            ],
            [
                'nip' => '198412232020122001',
                'nama' => 'dr. Antary Desvi Dania, Sp. PD',
                'spesialis' => 'Spesialis Penyakit Dalam',
                'foto' => 'img/dokter/dr-Antary-D-Dania-Sp.webp'
            ],
            [
                'nip' => '202191',
                'nama' => 'dr. Arif Apriyanto, Sp.N',
                'spesialis' => 'Spesialis Neorologi/Saraf',
                'foto' => 'img/dokter/dr-Arif-APri-SpN.webp'
            ],
            [
                'nip' => '202023',
                'nama' => 'dr. Arif Budi Satria,Sp. B, M.Kes',
                'spesialis' => 'Spesialis Bedah',
                'foto' => 'img/dokter/dr-Arif-Budi-Sp.webp'
            ],
            [
                'nip' => '202501',
                'nama' => 'dr. Daniswara Wisnu Wardhana, Sp. M',
                'spesialis' => 'Spesialis Mata',
                'foto' => 'img/dokter/52_dr-Daniswara-Sp.webp'
            ],


            [
                'nip' => '198404032022032001',
                'nama' => 'dr. Elly Rahmawati, Sp. M',
                'spesialis' => 'Spesialis Mata',
                'foto' => 'img/dokter/dr-Elly-Sp.webp'
            ],
            [
                'nip' => '20150',
                'nama' => 'dr. Faika Oesmania Sp.OG',
                'spesialis' => 'Spesialis Obgyn',
                'foto' => 'img/dokter/dr-Faika-SpOg.webp'
            ],
            [
                'nip' => '198707042015032001',
                'nama' => 'dr. Fatimah Mayasyari, Sp. A',
                'spesialis' => 'Spesialis Anak',
                'foto' => 'img/dokter/dr-Fatimah-Maya-Sp.webp'
            ],
            [
                'nip' => '198601092022031001',
                'nama' => 'dr. Hamid Pramusyahid, Sp. A',
                'spesialis' => 'Spesialis Anak',
                'foto' => 'img/dokter/dr-Hamid-P,-Sp.webp'
            ],

            [
                'nip' => '202302',
                'nama' => 'dr. Handika Zulimartin, Sp.OG',
                'spesialis' => 'Spesialis Obstetri & Ginekologi',
                'foto' => 'img/dokter/dr-Handika-Zulimartin-Sp.webp'
            ],
            [
                'nip' => '197308302008011007',
                'nama' => 'dr. Harsono Sp. PK',
                'spesialis' => 'Spesialis Patologi Klinik',
                'foto' => 'img/dokter/dr-Harsono-Sp.webp'
            ],
            [
                'nip' => '202341',
                'nama' => 'dr. Hendra Wardana, Sp. A',
                'spesialis' => 'Spesialis Anak',
                'foto' => 'img/dokter/dr-Hendra-Sp.webp'
            ],
            [
                'nip' => '198703272020121001',
                'nama' => 'dr. Hermawan Surya D, Sp.THT-KL',
                'spesialis' => 'Spesialis Ilmu Kesehatan THT KL',
                'foto' => 'img/dokter/dr-Hermawan-Surya,-Sp.webp'
            ],
            [
                'nip' => '196712301998031001',
                'nama' => 'dr. Hitaputra Agung Wardhana. Sp. B., Finacs',
                'spesialis' => 'Spesialis Bedah',
                'foto' => 'img/dokter/dr-Hitaputra-Sp.webp'
            ],
            [
                'nip' => '198005212015032002',
                'nama' => 'dr. Indah Puji Handayani,Sp. KJ',
                'spesialis' => 'Spesialis Psikiatri - Kedokteran Jiwa',
                'foto' => 'img/dokter/dr-Indah-P-H-Sp.webp'
            ],
            [
                'nip' => '100786',
                'nama' => 'dr. Intan Permata Sari , Sp. N',
                'spesialis' => 'Spesialis Neorologi/Saraf',
                'foto' => 'img/dokter/dr-Intan-SP.webp'
            ],
            [
                'nip' => '202523',
                'nama' => 'dr. Ivana Tansil, Sp. DVE',
                'spesialis' => 'Spesialis Ilmu Kesehatan Kulit Dan Kelamin',
                'foto' => 'img/dokter/-dr-Ivana-Tansil,-Sp.webp'
            ],
            [
                'nip' => '202401',
                'nama' => 'dr. Komang Kusumawati, Sp.KFR, M.Pd',
                'spesialis' => 'Spesialis Kedokteran Fisik Dan Rehabilitasi',
                'foto' => 'img/dokter/dr-Komang-Sp.webp'
            ],
            [
                'nip' => '198003232008122001',
                'nama' => 'dr. Makiyatul Munawaroh, Sp. PD, FINASIM',
                'spesialis' => 'Spesialis Penyakit Dalam',
                'foto' => 'img/dokter/dr-Makiyatul-M-Sp.webp'
            ],
            [
                'nip' => '202407',
                'nama' => 'dr. Marcellino Mettafortuna Sephebrlian, Sp. PD, AIFO-K',
                'spesialis' => 'Spesialis Penyakit Dalam',
                'foto' => 'img/dokter/dr-Marcel-Sp.webp'
            ],

            [
                'nip' => '202409',
                'nama' => 'dr. Mega Anara Manurung, Sp. U',
                'spesialis' => 'Spesialis Urologi',
                'foto' => 'img/dokter/dr-Mega-Anara-Sp.webp'
            ],
            [
                'nip' => '202238',
                'nama' => 'dr. Mohammad Zakky Fananie, Sp. JP,.FIHA',
                'spesialis' => 'Spesialis Jantung dan Pembuluh Darah',
                'foto' => 'img/dokter/dr-Mohammad-Zakky-F,-Sp-JP.webp'
            ],
            [
                'nip' => '197606062014121002',
                'nama' => 'dr. Niwan Tristanto Martika, Sp. P .,FISR',
                'spesialis' => 'Spesialis Paru - Pulmonologi',
                'foto' => 'img/dokter/dr-Niwan-T-Sp.webp'
            ],
            [
                'nip' => '197511252006042001',
                'nama' => 'dr. Novita Eva Sawitri, Sp.P (K) Onk.T,. M.Kes,. FAPSR',
                'spesialis' => 'Spesialis Paru - Pulmonologi',
                'foto' => 'img/dokter/dr-Novita-Eva,-Sp.webp'
            ],
            [
                'nip' => '197903032009122003',
                'nama' => 'dr. Riana Sari, Sp. P , FISR',
                'spesialis' => 'Spesialis Paru - Pulmonologi',
                'foto' => 'img/dokter/dr-Riana-Sari,-Sp.webp'
            ],


            [
                'nip' => '197609052006041010',
                'nama' => 'dr. Robeth Eria, Sp.OG',
                'spesialis' => 'Spesialis Obstetri & Ginekologi',
                'foto' => 'img/dokter/dr-Robert-Sp.webp'
            ],

            [
                'nip' => '196812161999032003',
                'nama' => 'dr. Sri Sumiyati, Sp. Rad',
                'spesialis' => 'Spesialis Radiologi',
                'foto' => 'img/dokter/dr-Sri-Sumiyati-Sp.webp'
            ],
            [
                'nip' => '202130',
                'nama' => 'dr. Sriyanto, M.SI.Med, Sp. B',
                'spesialis' => 'Spesialis Bedah',
                'foto' => 'img/dokter/dr-Sriyanto-Sp.webp'
            ],

            [
                'nip' => '202520',
                'nama' => 'dr. Yoga Yudhistira, Sp. JP, FIHA',
                'spesialis' => 'Spesialis Jantung dan Pembuluh Darah',
                'foto' => 'img/dokter/dr-Yoga-Sp.webp'
            ],
            [
                'nip' => '197703292008011012',
                'nama' => 'drg. Ismiarto Triwisono',
                'spesialis' => 'Dokter Gigi',
                'foto' => 'img/dokter/drg-ismiarto.webp'
            ],


        ];

        foreach ($dokters as &$dokter) {

            $dokter['jadwal'] = collect($jadwalDokter)
                ->where('kd_dokter', $dokter['nip'])
                ->sort(function ($a, $b) use ($urutanHari) {

                    $hariA = $urutanHari[strtoupper(trim($a['hari_kerja']))] ?? 99;
                    $hariB = $urutanHari[strtoupper(trim($b['hari_kerja']))] ?? 99;

                    // hari sama -> urutkan jam mulai
                    if ($hariA === $hariB) {

                        return strtotime($a['jam_mulai'])
                            <=> strtotime($b['jam_mulai']);
                    }

                    return $hariA <=> $hariB;
                })
                ->values()
                ->toArray();
        }


        // FILTER PENCARIAN
            if ($search) {

                $dokters = collect($dokters)->filter(function ($dokter) use ($search) {

                    return str_contains(
                        strtolower($dokter['nama']),
                        strtolower($search)
                    )

                    ||

                    str_contains(
                        strtolower($dokter['spesialis']),
                        strtolower($search)
                    );

                })->values()->toArray();
            }
           if ($spesialis) {

                $dokters = collect($dokters)->filter(function ($dokter) use ($spesialis) {

                    return strtolower($dokter['spesialis']) ==
                        strtolower($spesialis);

                })->values()->toArray();
            }

                $spesialisList = collect($dokters)
                ->pluck('spesialis')
                ->unique()
                ->values();


                    return view('pages.dokter',compact('dokters','search','spesialisList'));
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
