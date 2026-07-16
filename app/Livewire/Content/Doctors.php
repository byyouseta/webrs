<?php

namespace App\Livewire\Content;

use App\Models\Doctor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Doctors extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $doctorId = null;

    public $search = '';

    public $showForm = false;

    public $nip = '';

    public $nama = '';

    public $spesialis = '';

    public $foto = null;

    public $currentFoto = null;

    public $is_active = true;

    protected function rules()
    {
        return [
            'nip' => [
                'required',
                'string',
                'max:50',
                Rule::unique('doctors', 'nip')
                    ->ignore($this->doctorId),
            ],

            'nama' => [
                'required',
                'string',
                'max:255',
            ],

            'spesialis' => [
                'required',
                'string',
                'max:255',
            ],

            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'is_active' => [
                'boolean',
            ],
        ];
    }

    protected function messages()
    {
        return [
            'nip.required' => 'NIP dokter wajib diisi.',
            'nip.unique' => 'NIP dokter sudah digunakan.',
            'nama.required' => 'Nama dokter wajib diisi.',
            'spesialis.required' => 'Spesialis dokter wajib diisi.',
            'foto.image' => 'File foto harus berupa gambar.',
            'foto.mimes' => 'Foto harus berformat JPG, JPEG, PNG, atau WEBP.',
            'foto.max' => 'Ukuran foto maksimal 2 MB.',
        ];
    }

    public function create()
    {
        $this->resetForm();

        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();

        $fotoPath = $this->currentFoto;

        if ($this->foto) {
            if (
                $this->currentFoto &&
                Storage::disk('public')->exists($this->currentFoto)
            ) {
                Storage::disk('public')->delete($this->currentFoto);
            }

            $fotoPath = $this->foto->store(
                'doctors',
                'public'
            );
        }

        Doctor::updateOrCreate(
            [
                'id' => $this->doctorId,
            ],
            [
                'nip' => $this->nip,
                'nama' => $this->nama,
                'spesialis' => $this->spesialis,
                'foto' => $fotoPath,
                'is_active' => $this->is_active,
            ]
        );

        $message = $this->doctorId
            ? 'Data dokter berhasil diperbarui.'
            : 'Data dokter berhasil ditambahkan.';

        $this->resetForm();

        session()->flash('success', $message);
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);

        $this->doctorId = $doctor->id;
        $this->nip = $doctor->nip;
        $this->nama = $doctor->nama;
        $this->spesialis = $doctor->spesialis;
        $this->currentFoto = $doctor->foto;
        $this->foto = null;
        $this->is_active = (bool) $doctor->is_active;

        $this->showForm = true;

        $this->resetValidation();
    }

    public function delete($id)
    {
        $doctor = Doctor::findOrFail($id);

        if (
            $doctor->foto &&
            Storage::disk('public')->exists($doctor->foto)
        ) {
            Storage::disk('public')->delete($doctor->foto);
        }

        $doctor->delete();

        if ($this->doctorId == $id) {
            $this->resetForm();
        }

        session()->flash(
            'success',
            'Data dokter berhasil dihapus.'
        );
    }

    public function toggleStatus($id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->update([
            'is_active' => !$doctor->is_active,
        ]);

        session()->flash(
            'success',
            'Status praktik dokter berhasil diubah.'
        );
    }

    public function cancel()
    {
        $this->resetForm();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    private function resetForm()
    {
        $this->reset([
            'doctorId',
            'nip',
            'nama',
            'spesialis',
            'foto',
            'currentFoto',
        ]);

        $this->is_active = true;
        $this->showForm = false;

        $this->resetValidation();
    }

    public function render()
    {
        $doctors = Doctor::query()
            ->when($this->search, function ($query) {
                $query->where(function ($subQuery) {
                    $subQuery
                        ->where(
                            'nip',
                            'like',
                            '%' . $this->search . '%'
                        )
                        ->orWhere(
                            'nama',
                            'like',
                            '%' . $this->search . '%'
                        )
                        ->orWhere(
                            'spesialis',
                            'like',
                            '%' . $this->search . '%'
                        );
                });
            })
            ->orderBy('nama')
            ->paginate(10);

        return view(
            'livewire.content.doctors',
            compact('doctors')
        );
    }
}
