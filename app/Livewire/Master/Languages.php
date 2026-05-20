<?php

namespace App\Livewire\Master;

use App\Models\Language;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Languages extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $languageId;

    public $code;
    public $name;
    public $flag;
    public $currentFlag;

    public $is_default = false;
    public $is_active = true;

    public $search = '';

    public $showForm = false;

    protected function rules()
    {
        return [

            'code' => 'required|max:10|unique:languages,code,' . $this->languageId,

            'name' => 'required',

            'flag' => 'nullable|image|max:2048'

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
        $language = Language::findOrFail($id);

        $this->languageId = $language->id;

        $this->code = $language->code;

        $this->name = $language->name;

        $this->currentFlag = $language->flag;

        $this->is_default = $language->is_default;

        $this->is_active = $language->is_active;

        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();

        $flagPath = $this->currentFlag;

        if ($this->flag) {

            if (
                $this->currentFlag &&
                Storage::disk('public')->exists(
                    $this->currentFlag
                )
            ) {

                Storage::disk('public')->delete(
                    $this->currentFlag
                );
            }

            $flagPath = $this->flag
                ->store(
                    'flags',
                    'public'
                );
        }

        // jika default dipilih, reset default lain
        if ($this->is_default) {

            Language::query()
                ->update([
                    'is_default' => false
                ]);
        }

        Language::updateOrCreate(

            ['id' => $this->languageId],

            [

                'code' => $this->code,

                'name' => $this->name,

                'flag' => $flagPath,

                'is_default' => $this->is_default,

                'is_active' => $this->is_active

            ]

        );

        Session::flash(
            'success',
            'Bahasa berhasil disimpan'
        );

        $this->resetForm();

        $this->showForm = false;
    }

    public function resetForm()
    {
        $this->reset([
            'languageId',
            'code',
            'name',
            'flag',
            'currentFlag',
            'is_default',
            'is_active'
        ]);

        $this->resetValidation();
    }

    public function cancel()
    {
        $this->resetForm();

        $this->showForm = false;
    }

    public function render()
    {
        $languages = Language::query()
            ->when(
                $this->search,
                fn($q) => $q->where(
                    'name',
                    'like',
                    '%' . $this->search . '%'
                )
            )
            ->latest()
            ->paginate(10);
        return view(
            'livewire.master.languages',
            compact(
                'languages'
            )
        );
    }
}
