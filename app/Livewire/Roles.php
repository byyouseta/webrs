<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use Spatie\Permission\Models\Role;

class Roles extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $roleId;
    public $name;

    public $isEdit = false;

    public $alertMessage = '';

    public $alertType = 'success';

    protected $listeners = [
        'rolePermissionUpdated' => '$refresh',
        'showAlert' => 'showAlert'
    ];

    public function showAlert($type, $message)
    {
        $this->alertType = $type;

        $this->alertMessage = $message;
    }

    public function resetForm()
    {
        $this->reset([
            'roleId',
            'name',
            'isEdit'
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:roles,name'
        ]);

        Role::create([
            'name' => $this->name
        ]);

        session()->flash('success', 'Role berhasil dibuat');

        $this->dispatch('close-modal');

        $this->resetForm();
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);

        $this->roleId = $role->id;
        $this->name = $role->name;

        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|unique:roles,name,' . $this->roleId
        ]);

        Role::findOrFail($this->roleId)
            ->update([
                'name' => $this->name
            ]);

        session()->flash('success', 'Role berhasil diupdate');

        $this->dispatch('close-modal');

        $this->resetForm();
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);

        if ($role->name == 'superadmin') {

            session()->flash(
                'error',
                'Superadmin tidak boleh dihapus'
            );

            return;
        }

        $role->delete();

        session()->flash('success', 'Role berhasil dihapus');
    }

    public function render()
    {
        $roles = Role::with('permissions')
            ->where('name', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('livewire.roles', [
            'roles' => $roles
        ]);
    }
}
