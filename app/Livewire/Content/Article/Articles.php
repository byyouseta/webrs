<?php

namespace App\Livewire\Content\Article;

use App\Models\Article;
use App\Models\ArticleTranslation;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Articles extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'bootstrap';

    public $articleId;
    public $type = 'berita';
    public $thumbnail;
    public $is_published = false;
    public $published_at;
    public $activeTab = 'id';
    public $currentThumbnail;

    // Indonesia
    public $title_id;
    public $excerpt_id;
    public $content_id;

    // English
    public $title_en;
    public $excerpt_en;
    public $content_en;

    public $showForm = false;
    public $deleteId = null;

    protected function rules()
    {
        return [
            'type' => 'required',
            'thumbnail' => 'nullable|image|max:2048',
            'title_id' => 'required',
            'content_id' => 'required',
            'title_en' => 'required',
            'content_en' => 'required',
        ];
    }

    public function create()
    {
        $this->resetForm();

        $this->showForm = true;
    }

    public function edit($id)
    {
        $article = Article::with('translations')
            ->findOrFail($id);

        $this->articleId = $article->id;

        $this->type = $article->type;

        $this->is_published = $article->is_published;

        // thumbnail lama
        $this->currentThumbnail = $article->thumbnail;

        $idTranslation = $article->translations
            ->where('locale', 'id')
            ->first();

        $enTranslation = $article->translations
            ->where('locale', 'en')
            ->first();

        if ($idTranslation) {

            $this->title_id = $idTranslation->title;
            $this->content_id = $idTranslation->content;
            $this->excerpt_id = $idTranslation->excerpt;
        }

        if ($enTranslation) {

            $this->title_en = $enTranslation->title;
            $this->content_en = $enTranslation->content;
            $this->excerpt_en = $enTranslation->excerpt;
        }

        $this->showForm = true;
    }

    public function cancel()
    {
        $this->resetForm();

        $this->showForm = false;
    }

    public function resetForm()
    {
        $this->reset([

            'articleId',
            'type',

            'title_id',
            'content_id',
            'excerpt_id',

            'title_en',
            'content_en',
            'excerpt_en',

            'thumbnail',
            'currentThumbnail',
            'is_published'

        ]);

        $this->is_published = false;

        $this->activeTab = 'id';

        $this->resetValidation();
    }

    public function save()
    {
        try {
            $this->validate();
        } catch (\Illuminate\Validation\ValidationException $e) {

            $errors = $e->validator->errors();
            // pindah otomatis ke tab yang error
            if (
                $errors->has('title_id') ||
                $errors->has('content_id')
            ) {

                $this->activeTab = 'id';
            }

            if (
                $errors->has('title_en') ||
                $errors->has('content_en')
            ) {

                $this->activeTab = 'en';
            }

            throw $e;
        }

        $thumbnailPath = $this->currentThumbnail;

        if ($this->thumbnail) {
            // hapus thumbnail lama jika ada
            if (
                $this->currentThumbnail &&
                Storage::disk('public')->exists(
                    $this->currentThumbnail
                )
            ) {
                Storage::disk('public')->delete(
                    $this->currentThumbnail
                );
            }

            // simpan file baru
            $thumbnailPath =
                $this->thumbnail->store(
                    'articles',
                    'public'
                );
        }

        $article = Article::updateOrCreate(
            ['id' => $this->articleId],
            [
                'type' => $this->type,
                'thumbnail' => $thumbnailPath,
                'is_published' => $this->is_published,
                'published_at' => $this->is_published ? now() : null,
                'created_by' => auth()->id(),
                'updated_by' => auth()->id()
            ]
        );

        // Indonesia

        ArticleTranslation::updateOrCreate(
            [
                'article_id' => $article->id,
                'locale' => 'id'
            ],
            [
                'title' => $this->title_id,
                'slug' => Str::slug(
                    $this->title_id
                ),
                'excerpt' => $this->excerpt_id,
                'content' => $this->content_id
            ]
        );

        // English

        ArticleTranslation::updateOrCreate(
            [
                'article_id' => $article->id,
                'locale' => 'en'
            ],
            [
                'title' => $this->title_en,
                'slug' => Str::slug(
                    $this->title_en
                ),
                'excerpt' => $this->excerpt_en,
                'content' => $this->content_en
            ]
        );

        $this->resetForm();

        $this->showForm = false;

        session()->flash(
            'success',
            'Artikel berhasil disimpan'
        );
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;

        $this->dispatch(
            'showDeleteModal'
        );
    }

    public function delete()
    {
        $article = Article::find(
            $this->deleteId
        );

        if ($article) {

            if (
                $article->thumbnail &&
                Storage::disk('public')->exists(
                    $article->thumbnail
                )
            ) {

                Storage::disk('public')->delete(
                    $article->thumbnail
                );
            }

            $article->delete();
        }

        $this->deleteId = null;

        $this->dispatch(
            'hideDeleteModal'
        );

        session()->flash(
            'success',
            'Artikel berhasil dihapus'
        );
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $articles = Article::with('translations')
            ->when(
                $this->search,
                function ($query) {
                    $query->whereHas(
                        'translations',
                        function ($q) {
                            $q->where(
                                'title',
                                'like',
                                '%' . $this->search . '%'
                            )
                                ->orWhere(
                                    'content',
                                    'like',
                                    '%' . $this->search . '%'
                                );
                        }
                    );
                }
            )
            ->latest()
            ->paginate(10);

        return view(
            'livewire.content.article.articles',
            compact('articles')
        );
    }
}
