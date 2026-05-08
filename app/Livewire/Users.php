<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $userId;
    public $name;
    public $email;
    public $password;

    public $isEdit = false;
    public $selectedRoles = [];

    protected function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'password' => $this->isEdit
                ? 'nullable|min:6'
                : 'required|min:6',
        ];
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetForm()
    {
        $this->reset([
            'userId',
            'name',
            'email',
            'password',
            'isEdit'
        ]);

        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->syncRoles($this->selectedRoles);

        activity()
            ->causedBy(auth()->user())
            ->performedOn($user)
            ->log('Menambahkan user baru dengan nama ' . $user->name . ' dan roles: ' . implode(', ', $this->selectedRoles));

        session()->flash('success', 'User berhasil ditambahkan');

        $this->resetForm();

        $this->dispatch('close-modal');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;

        $this->selectedRoles =
            $user->roles
            ->pluck('name')
            ->toArray();

        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate();

        $user = User::findOrFail($this->userId);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        $user->syncRoles($this->selectedRoles);

        if ($this->password) {
            $data['password'] = Hash::make($this->password);
        }

        $user->update($data);
        activity()
            ->causedBy(auth()->user())
            ->performedOn($user)
            ->log('Mengupdate user dengan nama ' . $user->name . ' dan roles: ' . implode(', ', $this->selectedRoles));

        session()->flash('success', 'User berhasil diupdate');

        $this->resetForm();

        $this->dispatch('close-modal');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        activity()
            ->causedBy(auth()->user())
            ->performedOn($user)
            ->log('Menghapus user');

        session()->flash('success', 'User berhasil dihapus');
    }

    public function render()
    {
        $users = User::with('roles')
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        $roles = Role::all();

        return view('livewire.users', [
            'users' => $users,
            'roles' => $roles
        ]);
    }
}
