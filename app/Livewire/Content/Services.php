<?php

namespace App\Livewire\Content;

use App\Models\Service;
use App\Models\ServiceTranslation;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $serviceId;

    public $search = '';

    public $showForm = false;

    public $image;
    public $currentImage;

    public $is_featured = false;
    public $is_executive = false;
    public $is_active = true;

    public $sort = 0;

    public $title_id;
    public $excerpt_id;
    public $content_id;

    public $title_en;
    public $excerpt_en;
    public $content_en;

    protected function rules()
    {
        return [

            'title_id' => 'required',
            'title_en' => 'required',
            'image' =>
            $this->serviceId

                ? 'nullable|image|max:2048'
                : 'required|image|max:2048'

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
        $service =
            Service::with(
                'translations'
            )->findOrFail($id);

        $this->serviceId = $service->id;
        $this->currentImage = $service->image;
        $this->is_featured = $service->is_featured;
        $this->is_executive = $service->is_executive;
        $this->is_active = $service->is_active;
        $this->sort = $service->sort;
        $idTranslation = $service->translations
            ->where(
                'locale',
                'id'
            )
            ->first();

        $enTranslation = $service->translations
            ->where(
                'locale',
                'en'
            )
            ->first();

        if ($idTranslation) {
            $this->title_id = $idTranslation->title;
            $this->excerpt_id = $idTranslation->excerpt;
            $this->content_id = $idTranslation->content;
        }

        if ($enTranslation) {
            $this->title_en = $enTranslation->title;
            $this->excerpt_en = $enTranslation->excerpt;
            $this->content_en =  $enTranslation->content;
        }

        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();

        $imagePath = $this->currentImage;

        if ($this->image) {
            if (
                $this->currentImage && Storage::disk('public')->exists($this->currentImage)
            ) {
                Storage::disk('public')->delete($this->currentImage);
            }

            $imagePath = $this->image
                ->store(
                    'services',
                    'public'
                );
        }

        $service =
            Service::updateOrCreate(

                [
                    'id' =>
                    $this->serviceId
                ],

                [
                    'slug' => Str::slug($this->title_id),
                    'image' => $imagePath,
                    'is_featured' => $this->is_featured,
                    'is_executive' => $this->is_executive,
                    'sort' => $this->sort,
                    'is_active' => $this->is_active
                ]
            );

        foreach (['id', 'en'] as $locale) {
            ServiceTranslation::updateOrCreate(
                [
                    'service_id' =>                    $service->id,
                    'locale' =>                    $locale
                ],

                [
                    'title' =>                    $this->{'title_' . $locale},
                    'excerpt' =>                    $this->{'excerpt_' . $locale},
                    'content' =>                    $this->{'content_' . $locale}
                ]
            );
        }

        session()->flash(
            'success',
            'Layanan berhasil disimpan'
        );

        $this->cancel();
    }

    public function delete($id)
    {
        $service =
            Service::findOrFail($id);

        if (
            $service->image && Storage::disk('public')->exists($service->image)
        ) {
            Storage::disk(
                'public'
            )->delete(
                $service->image
            );
        }

        $service->delete();

        session()->flash(
            'success',
            'Layanan dihapus'
        );
    }

    public function cancel()
    {
        $this->resetForm();
        $this->showForm = false;
    }

    private function resetForm()
    {
        $this->reset();
        $this->is_active = true;
        $this->sort = 0;
    }

    public function render()
    {
        $services = Service::with('translations')
            ->when(
                $this->search,
                function ($q) {
                    $q->whereHas(
                        'translations',
                        function ($x) {
                            $x->where(
                                'title',
                                'like',
                                '%' . $this->search . '%'
                            );
                        }
                    );
                }
            )
            ->paginate(10);

        return view(
            'livewire.content.services',
            compact(
                'services'
            )
        );
    }
}
