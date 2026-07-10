<?php

namespace App\Livewire\Content;

use App\Models\PpidDocument;
use App\Models\PpidDocumentTranslation;
use App\Models\PpidCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Ppids extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $ppidId;
    public $search = '';
    public $showForm = false;

    public $file;
    public $currentFile;

    public $category_id;

    public $sort = 0;

    public $title_id;
    public $description_id;

    public $title_en;
    public $description_en;

    public $currentThumbnail;
    public $tanggal;

    public $thumbnail;

    protected function rules()
    {
        return [
            'title_id' => 'required',
            'title_en' => 'required',

            'file' =>
                $this->ppidId
                    ? 'nullable|mimes:pdf,doc,docx|max:6144'
                    : 'required|mimes:pdf,doc,docx|max:6144'
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
        $ppid = PpidDocument::with('translations')->findOrFail($id);

        $this->ppidId = $ppid->id;
        //$this->category_id = $ppid->category_id;
        $this->category_id = (string) $ppid->category_id;

        $this->currentFile = $ppid->file;

        $this->currentThumbnail = $ppid->thumbnail;

        $this->sort = $ppid->sort;

        $this->tanggal = $ppid->tanggal
            ? $ppid->tanggal->format('Y-m-d')
            : null;

        foreach (['id', 'en'] as $locale) {
            $translation = $ppid->translations
                ->where('locale', $locale)
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

        $filePath = $this->currentFile;

        if ($this->file) {
            if (
                $this->currentFile &&
                Storage::disk('public')->exists($this->currentFile)
            ) {
                Storage::disk('public')->delete($this->currentFile);
            }

            $filePath = $this->file->store('ppid', 'public');
        }

        $ppid = PpidDocument::updateOrCreate(
            ['id' => $this->ppidId],
            [
                'category_id' => $this->category_id,
                'tanggal' => $this->tanggal,
                'file' => $filePath,

            ]
        );

        foreach (['id', 'en'] as $locale) {
            PpidDocumentTranslation::updateOrCreate(
                [
                    'ppid_document_id' => $ppid->id,
                    'locale' => $locale
                ],
                [
                    'title' => $this->{'title_' . $locale},
                    'description' => $this->{'description_' . $locale}
                ]
            );
        }

        session()->flash('success', 'Dokumen PPID berhasil disimpan');

        $this->cancel();
    }

    public function delete($id)
    {
        $ppid = PpidDocument::findOrFail($id);

        if (
            $ppid->file &&
            Storage::disk('public')->exists($ppid->file)
        ) {
            Storage::disk('public')->delete($ppid->file);
        }

        $ppid->delete();

        session()->flash('success', 'Dokumen dihapus');
    }

    public function cancel()
    {
        $this->resetForm();
        $this->showForm = false;
    }

    private function resetForm()
    {
        $this->ppidId = null;
        $this->file = null;
        $this->currentFile = null;
        $this->category_id = null;

        $this->sort = 0;
        $this->is_active = true;

        $this->title_id = null;
        $this->description_id = null;

        $this->title_en = null;
        $this->description_en = null;
    }

    public function render()
    {
        $ppids = PpidDocument::with(['translations', 'category'])
            ->when($this->search, function ($q) {
                $q->whereHas('translations', function ($x) {
                    $x->where('title', 'like', '%' . $this->search . '%');
                });
            })
            ->paginate(10);

        //dd($ppids);

        $categories = PpidCategory::get();

        return view('livewire.content.ppids', [
            'ppids' => $ppids,
            'categories' => $categories,
            'showForm' => $this->showForm,
        ]);

        //return view('livewire.content.ppids', compact('ppids', 'categories'));
    }
}
