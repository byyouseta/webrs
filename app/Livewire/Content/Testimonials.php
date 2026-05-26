<?php

namespace App\Livewire\Content;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Testimonials extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    public $testimonialId;
    public $search = '';
    public $showForm = false;
    public $display_name;
    public $photo;
    public $currentPhoto;
    public $quote;
    public $service_id;
    public $patient_type;
    public $consent_published = false;
    public $is_active = true;
    public $sort = 0;
    public $is_anonymous = false;

    protected function rules()
    {
        return [
            'display_name' => 'required',
            'quote' => 'required',
            'photo' => $this->testimonialId ? 'nullable|image|max:2048' : 'required|image|max:2048'
        ];
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->resetForm();
        $this->showForm = true;
    }

    public function edit($id)
    {
        $data = Testimonial::findOrFail($id);

        $this->testimonialId = $data->id;
        $this->display_name = $data->display_name;
        $this->quote = $data->quote;
        $this->service_id = $data->service_id;
        $this->patient_type = $data->patient_type;
        $this->consent_published = $data->consent_published;
        $this->is_active = $data->is_active;
        $this->is_anonymous = $data->is_anonymous;
        $this->sort = $data->sort;
        $this->currentPhoto = $data->photo;
        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();

        $photoPath = $this->currentPhoto;

        if ($this->photo) {
            if (
                $this->currentPhoto &&
                Storage::disk('public')
                ->exists(
                    $this->currentPhoto
                )
            ) {
                Storage::disk('public')
                    ->delete(
                        $this->currentPhoto
                    );
            }

            $photoPath = $this->photo->store('testimonials', 'public');
        }

        Testimonial::updateOrCreate(
            [
                'id' =>
                $this->testimonialId
            ],
            [
                'display_name' => $this->display_name,
                'photo' => $photoPath,
                'quote' => $this->quote,
                'service_id' => $this->service_id,
                'patient_type' => $this->patient_type,
                'consent_published' => $this->consent_published,
                'is_anonymous' => $this->is_anonymous,
                'is_active' => $this->is_active,
                'sort' => $this->sort
            ]
        );

        session()->flash('success', 'Testimoni berhasil disimpan');

        $this->cancel();
    }

    public function delete($id)
    {
        $data = Testimonial::findOrFail($id);

        if (
            $data->photo && Storage::disk('public')->exists($data->photo)
        ) {
            Storage::disk('public')
                ->delete(
                    $data->photo
                );
        }

        $data->delete();

        session()->flash('success', 'Testimoni dihapus');
    }

    public function cancel()
    {
        $this->resetForm();
        $this->showForm = false;
    }

    private function resetForm()
    {
        $this->reset();
        $this->sort = 0;
        $this->is_active = true;
    }

    public function render()
    {
        $testimonials = Testimonial::when(
            $this->search,
            function ($q) {
                $q->where('display_name', 'like', '%' . $this->search . '%')
                    ->orWhere('quote', 'like', '%' . $this->search . '%');
            }
        )
            ->paginate(10);

        $services = Service::with('translation')
            ->where('is_active', true)
            ->get();

        return view(
            'livewire.content.testimonials',
            compact(
                'testimonials',
                'services'
            )
        );
    }
}
