<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <input type="text" class="form-control" placeholder="Cari Role..." wire:model.live="search">
        </div>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#roleModal" wire:click="resetForm">
            Tambah Role
        </button>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if ($alertMessage)
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
            class="alert alert-{{ $alertType }}">
            {{ $alertMessage }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Total Permission</th>
                    <th width="250">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>
                            {{ $role->name }}
                        </td>
                        <td>
                            {{ $role->permissions->count() }}
                        </td>
                        <td class="d-flex gap-2">
                            <button class="btn btn-warning btn-sm" wire:click="edit({{ $role->id }})"
                                data-bs-toggle="modal" data-bs-target="#roleModal">
                                Edit
                            </button>
                            <button class="btn btn-primary btn-sm"
                                wire:click="$dispatch('openPermissionModal', { roleId: {{ $role->id }} })">
                                Permission
                            </button>
                            <button class="btn btn-danger btn-sm" wire:click="delete({{ $role->id }})"
                                wire:confirm="Yakin hapus Role ini?">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            {{ $roles->links() }}
        </div>

        <div wire:ignore.self class="modal fade" id="roleModal" tabindex="-1">
            <div class="modal-dialog">
                <form wire:submit="{{ $isEdit ? 'update' : 'store' }}">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                {{ $isEdit ? 'Edit' : 'Tambah' }} Role
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">
                                    Nama Role
                                </label>
                                <input type="text" class="form-control" wire:model="name">
                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-success">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        Livewire.on('close-modal', () => {

            const modal = bootstrap.Modal.getInstance(
                document.getElementById('roleModal')
            );

            modal.hide();
        });
    </script>
@endscript
