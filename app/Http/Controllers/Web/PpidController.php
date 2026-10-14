<?php

namespace App\Http\Controllers\Web;
use App\Models\PpidDocument;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PpidInformationRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PpidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $ppid = PpidDocument::with('translation')
        ->orderBy('tanggal', 'desc')
        ->get();

       // dd($ppid);

        return view('pages.ppid',compact(['ppid']));
    }

     public function ppid_profil(request $request)
    {

        return view('pages.ppid.profil_ppid');
    }


     public function ppid_visimisi(request $request)
    {

        return view('pages.ppid.visimisi_ppid');
    }

     public function ppid_struktur(request $request)
    {
        return view('pages.ppid.struktur_ppid');
    }

     public function ppid_tugas(request $request)
    {
        return view('pages.ppid.tugas_ppid');
    }

     public function ppid_maklumat(request $request)
    {
        return view('pages.ppid.maklumat_ppid');
    }


     public function ppid_form(request $request)
    {


        return view('pages.ppid.form_ppid');
    }

    public function ppid_form_submit(request $request)
    {
        $validated = $request->validate([
            'applicant_name' => [
                'required',
                'string',
                'max:255'
            ],

            'nik' => [
                'nullable',
                'string',
                'max:50'
            ],

            'organization' => [
                'nullable',
                'string',
                'max:255'
            ],

            'email' => [
                'required',
                'email',
                'max:255'
            ],

            'phone' => [
                'required',
                'string',
                'max:30'
            ],

            'address' => [
                'required',
                'string'
            ],

            'requested_information' => [
                'required',
                'string'
            ],

            'purpose' => [
                'required',
                'string'
            ],

            'delivery_method' => [
                'required',
                'in:email,langsung,pos'
            ],

            'information_format' => [
                'required',
                'in:softcopy,hardcopy'
            ],

            'identity_file' => [
                'required',
                'file',
                'mimes:jpg,jpeg,png,pdf',
                'max:2048'
            ],
        ], [
            'applicant_name.required' =>
                'Nama pemohon wajib diisi.',

            'email.required' =>
                'Email wajib diisi.',

            'email.email' =>
                'Format email tidak valid.',

            'phone.required' =>
                'Nomor telepon wajib diisi.',

            'address.required' =>
                'Alamat wajib diisi.',

            'requested_information.required' =>
                'Informasi yang dimohon wajib diisi.',

            'purpose.required' =>
                'Tujuan penggunaan informasi wajib diisi.',

            'delivery_method.required' =>
                'Silakan pilih cara memperoleh informasi.',

            'information_format.required' =>
                'Silakan pilih format informasi.',

            'identity_file.required' =>
                'Dokumen identitas wajib dilampirkan.',

            'identity_file.mimes' =>
                'Dokumen identitas harus berupa JPG, PNG, atau PDF.',

            'identity_file.max' =>
                'Ukuran dokumen maksimal 2 MB.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Nomor Registrasi
        |--------------------------------------------------------------------------
        */

        do {
            $registrationNumber =
                'PPID-' .
                date('Y') .
                '-' .
                strtoupper(Str::random(8));

        } while (
            PpidInformationRequest::where(
                'registration_number',
                $registrationNumber
            )->exists()
        );

        /*
        |--------------------------------------------------------------------------
        | Upload Identitas
        |--------------------------------------------------------------------------
        */

        $identityPath = null;

        if ($request->hasFile('identity_file')) {

            $identityPath = $request
                ->file('identity_file')
                ->store('ppid/permohonan/identitas', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan Database
        |--------------------------------------------------------------------------
        */

        $permohonan = PpidInformationRequest::create([

            'registration_number' => $registrationNumber,

            'applicant_name' => $validated['applicant_name'],

            'nik' => $validated['nik'] ?? null,

            'organization' =>
                $validated['organization'] ?? null,

            'email' => $validated['email'],

            'phone' => $validated['phone'],

            'address' => $validated['address'],

            'requested_information' =>
                $validated['requested_information'],

            'purpose' =>
                $validated['purpose'],

            'delivery_method' =>
                $validated['delivery_method'],

            'information_format' =>
                $validated['information_format'],

            'identity_file' => $identityPath,

            'status' => 'diajukan',
        ]);

        return redirect()
            ->route('ppid_form')
            ->with(
                'success',
                'Permohonan informasi berhasil dikirim. Nomor registrasi Anda: ' .
                $permohonan->registration_number
            );

    }

     public function ppid_sop(request $request)
    {

        return view('pages.ppid.sop_ppid');
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
