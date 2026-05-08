<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class Permissions extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $permissionId;
    public $name;

    public $isEdit = false;

    protected $rules = [
        'name' => 'required|unique:permissions,name'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetForm()
    {
        $this->reset([
            'permissionId',
            'name',
            'isEdit'
        ]);

        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        Permission::create([
            'name' => $this->name,
        ]);

        session()->flash('success', 'Permission berhasil dibuat');

        $this->resetForm();

        $this->dispatch('close-modal');
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);

        $this->permissionId = $permission->id;
        $this->name = $permission->name;

        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|unique:permissions,name,' . $this->permissionId
        ]);

        Permission::findOrFail($this->permissionId)
            ->update([
                'name' => $this->name
            ]);

        session()->flash('success', 'Permission berhasil diupdate');

        $this->resetForm();

        $this->dispatch('close-modal');
    }

    public function delete($id)
    {
        Permission::findOrFail($id)->delete();

        session()->flash('success', 'Permission berhasil dihapus');
    }

    public function render()
    {
        $permissions = Permission::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('livewire.permissions', [
            'permissions' => $permissions
        ]);
    }
}
