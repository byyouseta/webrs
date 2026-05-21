<?php

namespace App\Livewire\Content;

use App\Models\HeroShortcut;
use Livewire\Component;
use Livewire\WithPagination;

class HeroShortcuts extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $shortcutId;

    public $title_id;
    public $title_en;

    public $icon;
    public $url;
    public $sort = 0;
    public $is_active = true;
    public $search = '';
    public $showForm = false;

    protected function rules()
    {
        return [
            'title_id' => 'required',
            'title_en' => 'required',
            'url' => 'required'
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
        $shortcut =
            HeroShortcut::findOrFail(
                $id
            );

        $this->shortcutId = $shortcut->id;
        $this->title_id = $shortcut->title_id;
        $this->title_en = $shortcut->title_en;
        $this->icon = $shortcut->icon;
        $this->url = $shortcut->url;
        $this->sort = $shortcut->sort;
        $this->is_active = $shortcut->is_active;
        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();

        HeroShortcut::updateOrCreate(
            [
                'id' => $this->shortcutId
            ],
            [
                'title_id' => $this->title_id,
                'title_en' => $this->title_en,
                'icon' => $this->icon,
                'url' => $this->url,
                'sort' => $this->sort,
                'is_active' => $this->is_active
            ]
        );

        session()->flash(
            'success',
            'Shortcut berhasil disimpan'
        );
        $this->cancel();
    }

    public function delete($id)
    {
        HeroShortcut::findOrFail(
            $id
        )->delete();

        session()->flash(
            'success',
            'Shortcut berhasil dihapus'
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
            'shortcutId',
            'title_id',
            'title_en',
            'icon',
            'url',
            'sort',
            'is_active'
        ]);
        $this->sort = 0;
        $this->is_active = true;
        $this->resetValidation();
    }

    public function render()
    {
        $shortcuts =
            HeroShortcut::query()

            ->when(
                $this->search,
                function ($q) {
                    $q->where(
                        'title_id',
                        'like',
                        '%' . $this->search . '%'
                    )
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
            'livewire.content.hero-shortcuts',
            compact(
                'shortcuts'
            )
        );
    }

    // public function render()
    // {
    //     return view('livewire.content.hero-shortcuts');
    // }
}
