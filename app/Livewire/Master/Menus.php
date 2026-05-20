<?php

namespace App\Livewire\Master;

use App\Models\Menu;
use App\Models\MenuTranslation;
use Livewire\Component;
use Livewire\WithPagination;

class Menus extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $menuId;

    public $parent_id;

    public $url;

    public $sort = 0;

    public $is_active = true;

    public $title_id;
    public $title_en;

    public $search = '';

    public $showForm = false;

    protected function rules()
    {
        return [
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
        $this->resetForm();
        $this->showForm = true;
    }

    public function edit($id)
    {
        $menu = Menu::with(
            'translations'
        )->findOrFail($id);

        $this->menuId = $menu->id;
        $this->parent_id = $menu->parent_id;
        $this->url = $menu->url;
        $this->sort = $menu->sort;
        $this->is_active =
            $menu->is_active;

        $idTranslation =
            $menu->translations
            ->where(
                'locale',
                'id'
            )
            ->first();

        $enTranslation =
            $menu->translations
            ->where(
                'locale',
                'en'
            )
            ->first();

        $this->title_id =
            $idTranslation?->title;
        $this->title_en =
            $enTranslation?->title;
        $this->showForm = true;
    }

    public function save()
    {
        $this->validate();

        $menu = Menu::updateOrCreate(

            [
                'id' => $this->menuId
            ],
            [
                'parent_id' => $this->parent_id,
                'url' => $this->url,
                'sort' => $this->sort,
                'is_active' => $this->is_active
            ]
        );

        MenuTranslation::updateOrCreate(
            [
                'menu_id' => $menu->id,
                'locale' => 'id'
            ],
            [
                'title' => $this->title_id
            ]
        );

        MenuTranslation::updateOrCreate(
            [
                'menu_id' => $menu->id,
                'locale' => 'en'
            ],
            [
                'title' => $this->title_en
            ]
        );

        session()->flash(
            'success',
            'Menu berhasil disimpan'
        );

        $this->resetForm();

        $this->showForm = false;
    }

    public function resetForm()
    {
        $this->reset([
            'menuId',
            'parent_id',
            'url',
            'sort',
            'is_active',
            'title_id',
            'title_en'
        ]);

        $this->sort = 0;
        $this->is_active = true;
        $this->resetValidation();
    }

    public function cancel()
    {
        $this->resetForm();
        $this->showForm = false;
    }

    public function render()
    {
        $menus = Menu::with(
            'translations',
            'parent.translations'
        )
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
            ->orderBy(
                'sort'
            )
            ->paginate(10);

        $parentMenus =
            Menu::whereNull(
                'parent_id'
            )->get();

        return view(
            'livewire.master.menus',
            compact(
                'menus',
                'parentMenus'
            )
        );
    }

    // public function render()
    // {
    //     return view('livewire.master.menus');
    // }
}
