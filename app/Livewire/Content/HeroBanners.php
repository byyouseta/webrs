<?php

namespace App\Livewire\Content;

use App\Models\HeroBanner;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class HeroBanners extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $bannerId;

    public $image;
    public $currentImage;

    public $title_id;
    public $title_en;

    public $subtitle_id;
    public $subtitle_en;

    public $sort = 0;

    public $is_active = true;

    public $search = '';

    public $showForm = false;

    protected function rules()
    {
        return [
            'image' =>
            $this->bannerId
                ? 'nullable|image|max:2048'
                : 'required|image|max:2048',

            'title_id' => 'required',
            'title_en' => 'required'
        ];
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        if (
            HeroBanner::count() >= 5
        ) {

            Session::flash(
                'error',
                'Maksimal 5 banner'
            );

            return;
        }

        $this->resetForm();

        $this->showForm = true;
    }

    public function edit($id)
    {
        $banner =
            HeroBanner::findOrFail(
                $id
            );

        $this->bannerId = $banner->id;
        $this->currentImage = $banner->image;
        $this->title_id = $banner->title_id;
        $this->title_en = $banner->title_en;
        $this->subtitle_id = $banner->subtitle_id;
        $this->subtitle_en = $banner->subtitle_en;
        $this->sort = $banner->sort;
        $this->is_active = $banner->is_active;
        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();
        $imagePath =
            $this->currentImage;

        if ($this->image) {

            if (
                $this->currentImage &&
                Storage::disk('public')
                ->exists(
                    $this->currentImage
                )
            ) {

                Storage::disk('public')
                    ->delete(
                        $this->currentImage
                    );
            }

            $imagePath =
                $this->image
                ->store(
                    'hero-banners',
                    'public'
                );
        }

        HeroBanner::updateOrCreate(
            [
                'id' => $this->bannerId
            ],
            [
                'image' => $imagePath,
                'title_id' => $this->title_id,
                'title_en' => $this->title_en,
                'subtitle_id' => $this->subtitle_id,
                'subtitle_en' => $this->subtitle_en,
                'sort' => $this->sort,
                'is_active' => $this->is_active
            ]

        );

        Session::flash(
            'success',
            'Banner berhasil disimpan'
        );

        $this->resetForm();

        $this->showForm = false;
    }

    public function delete($id)
    {
        $banner = HeroBanner::findOrFail($id);
        if (
            $banner->image && Storage::disk('public')
            ->exists($banner->image)
        ) {

            Storage::disk('public')
                ->delete(
                    $banner->image
                );
        }

        $banner->delete();
        Session::flash(
            'success',
            'Banner dihapus'
        );
    }

    public function cancel()
    {
        $this->resetForm();
        $this->showForm = false;
    }

    private function resetForm()
    {
        $this->reset([
            'bannerId',
            'image',
            'currentImage',

            'title_id',
            'title_en',

            'subtitle_id',
            'subtitle_en',

            'sort',
            'is_active'
        ]);

        $this->sort = 0;
        $this->is_active = true;
        $this->resetValidation();
    }

    public function render()
    {
        $banners = HeroBanner::query()
            ->when(
                $this->search,
                function ($q) {
                    $q->where('title_id', 'like', '%' . $this->search . '%')
                        ->orWhere(
                            'title_en',
                            'like',
                            '%' . $this->search . '%'
                        );
                }
            )
            ->orderBy('sort')
            ->paginate(10);

        return view(
            'livewire.content.hero-banners',
            compact(
                'banners'
            )
        );
    }

    // public function render()
    // {
    //     return view('livewire.content.hero-banners');
    // }
}
