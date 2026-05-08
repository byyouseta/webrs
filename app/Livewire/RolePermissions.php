<?php

namespace App\Livewire;

use Livewire\Component;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissions extends Component
{
    public $roleId;

    public $roleName;

    public $selectedPermissions = [];

    protected $listeners = [
        'openPermissionModal'
    ];

    public function openPermissionModal($roleId)
    {
        $role = Role::findOrFail($roleId);

        $this->roleId = $role->id;

        $this->roleName = $role->name;

        $this->selectedPermissions =
            $role->permissions
            ->pluck('name')
            ->toArray();

        $this->dispatch('showPermissionModal');
    }

    public function save()
    {
        $role = Role::findOrFail($this->roleId);

        $role->syncPermissions(
            $this->selectedPermissions
        );

        activity()
            ->causedBy(auth()->user())
            ->performedOn($role)
            ->log('Mengubah permission role ' . $role->name . ' dengan permissions: ' . implode(', ', $this->selectedPermissions));

        $this->dispatch(
            'showAlert',
            type: 'success',
            message: 'Permission berhasil disimpan'
        );

        $this->dispatch('hidePermissionModal');
        $this->dispatch('rolePermissionUpdated');
    }

    public function render()
    {
        $permissions = Permission::all()
            ->groupBy(function ($item) {

                return explode('-', $item->name)[0];
            });

        return view('livewire.role-permissions', [
            'permissions' => $permissions
        ]);
    }
}
