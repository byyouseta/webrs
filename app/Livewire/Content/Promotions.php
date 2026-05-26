<?php

namespace App\Livewire\Content;

use App\Models\Promotion;
use App\Models\PromotionTranslation;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Promotions extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $promotionId;

    public $search = '';

    public $showForm = false;

    public $image;
    public $currentImage;

    public $service_id;

    public $start_date;
    public $end_date;

    public $sort = 0;

    public $is_active = true;

    public $title_id;
    public $description_id;

    public $title_en;
    public $description_en;

    protected function rules()
    {
        return [

            'title_id' => 'required',
            'title_en' => 'required',

            'image' =>
            $this->promotionId

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
        $promo = Promotion::with('translations')->findOrFail($id);

        $this->promotionId = $promo->id;
        $this->service_id = $promo->service_id;
        $this->currentImage = $promo->image;
        $this->start_date = optional($promo->start_date)->format('Y-m-d');
        $this->end_date = optional($promo->end_date)->format('Y-m-d');
        $this->sort = $promo->sort;
        $this->is_active = $promo->is_active;

        foreach (['id', 'en'] as $locale) {
            $translation = $promo->translations
                ->where(
                    'locale',
                    $locale
                )
                ->first();

            if ($translation) {
                $this->{'title_' . $locale} = $translation->title;
                $this->{'description_' . $locale} = $translation->description;
            }
        }

        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();

        $imagePath = $this->currentImage;

        if ($this->image) {
            if (
                $this->currentImage &&
                Storage::disk('public')
                ->exists(
                    $this->currentImage
                )
            ) {
                Storage::disk(
                    'public'
                )
                    ->delete(
                        $this->currentImage
                    );
            }

            $imagePath = $this->image->store('promotions', 'public');
        }

        $promo = Promotion::updateOrCreate(
            [
                'id' => $this->promotionId
            ],
            [
                'service_id' => $this->service_id,
                'image' => $imagePath,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'sort' => $this->sort,
                'is_active' => $this->is_active
            ]
        );

        foreach (['id', 'en'] as $locale) {
            PromotionTranslation::updateOrCreate(
                [
                    'promotion_id' =>
                    $promo->id,
                    'locale' =>
                    $locale
                ],
                [
                    'title' =>
                    $this->{'title_' . $locale},
                    'description' =>
                    $this->{'description_' . $locale}
                ]
            );
        }

        session()->flash(
            'success',
            'Promo berhasil disimpan'
        );

        $this->cancel();
    }

    public function delete($id)
    {
        $promo = Promotion::findOrFail($id);

        if (
            $promo->image && Storage::disk('public')->exists($promo->image)
        ) {
            Storage::disk('public')->delete($promo->image);
        }

        $promo->delete();

        session()->flash(
            'success',
            'Promo dihapus'
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
        $this->sort = 0;
        $this->is_active = true;
    }

    public function render()
    {
        $promotions =
            Promotion::with([
                'translations',
                'service.translation'
            ])
            ->when(
                $this->search,
                function ($q) {
                    $q->whereHas(
                        'translations',
                        function ($x) {
                            $x->where('title', 'like', '%' . $this->search . '%');
                        }
                    );
                }
            )

            ->paginate(10);

        $services = Service::with('translation')
            ->where('is_active', true)
            ->get();

        return view(
            'livewire.content.promotions',
            compact(
                'promotions',
                'services'
            )
        );
    }

    // public function render()
    // {
    //     return view('livewire.content.promotions');
    // }
}
