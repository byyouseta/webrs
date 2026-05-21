<?php

namespace App\Livewire\Content;

use App\Models\Page;
use App\Models\PageTranslation;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Pages extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $pageId;

    public $type;

    public $image;
    public $currentImage;

    public $is_active = true;

    public $showForm = false;

    public $search = '';

    public $title_id;
    public $excerpt_id;
    public $content_id;

    public $title_en;
    public $excerpt_en;
    public $content_en;

    protected function rules()
    {
        return [
            'type' => 'required',
            'title_id' => 'required',
            'title_en' => 'required',
            'content_id' => 'required',
            'content_en' => 'required',
            'image' =>
            $this->pageId
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
        $page = Page::with('translations')->findOrFail($id);

        $this->pageId = $page->id;

        $this->type = $page->type;

        $this->currentImage = $page->image;

        $this->is_active = $page->is_active;

        $idTranslation = $page->translations
            ->where(
                'locale',
                'id'
            )->first();

        $enTranslation = $page->translations
            ->where(
                'locale',
                'en'
            )->first();

        if ($idTranslation) {
            $this->title_id = $idTranslation->title;
            $this->excerpt_id = $idTranslation->excerpt;
            $this->content_id = $idTranslation->content;
        }

        if ($enTranslation) {
            $this->title_en = $enTranslation->title;
            $this->excerpt_en = $enTranslation->excerpt;
            $this->content_en = $enTranslation->content;
        }

        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();

        $imagePath = $this->currentImage;

        if ($this->image) {

            if ($this->currentImage && Storage::disk('public')->exists($this->currentImage)) {
                Storage::disk('public')->delete($this->currentImage);
            }

            $imagePath = $this->image->store(
                'pages',
                'public'
            );
        }

        $page =
            Page::updateOrCreate(
                [
                    'id' => $this->pageId
                ],
                [
                    'type' => $this->type,
                    'slug' => Str::slug($this->title_id),
                    'image' => $imagePath,
                    'is_active' => $this->is_active
                ]
            );

        PageTranslation::updateOrCreate(
            [
                'page_id' => $page->id,
                'locale' => 'id'
            ],
            [
                'title' =>
                $this->title_id,

                'excerpt' =>
                $this->excerpt_id,

                'content' =>
                $this->content_id
            ]
        );

        PageTranslation::updateOrCreate(
            [
                'page_id' => $page->id,
                'locale' => 'en'
            ],

            [
                'title' =>
                $this->title_en,

                'excerpt' =>
                $this->excerpt_en,

                'content' =>
                $this->content_en
            ]
        );

        session()->flash(
            'success',
            'Page berhasil disimpan'
        );

        $this->cancel();
    }

    public function delete($id)
    {
        $page = Page::findOrFail($id);

        if ($page->image && Storage::disk('public')->exists($page->image)) {
            Storage::disk('public')->delete($page->image);
        }

        $page->delete();

        session()->flash(
            'success',
            'Page dihapus'
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
        $this->resetValidation();
    }

    public function render()
    {
        $pages = Page::with('translations')
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
            'livewire.content.pages',
            compact(
                'pages'
            )
        );
    }
}
