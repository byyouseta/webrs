<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <input type="text" class="form-control" placeholder="Cari permission..." wire:model.live="search">
        </div>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#userModal" wire:click="resetForm">
            Tambah Permission
        </button>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Permission</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#userModal"
                                wire:click="edit({{ $permission->id }})">
                                Edit
                            </button>

                            <button class="btn btn-danger btn-sm" wire:click="delete({{ $permission->id }})"
                                wire:confirm="Yakin hapus permission ini?">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $permissions->links() }}
    </div>

    {{-- MODAL --}}
    <div wire:ignore.self class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header">
                    <h5 class="modal-title">
                        {{ $isEdit ? 'Edit Permission' : 'Tambah Permission' }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>

                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            wire:model="name">

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Batal
                    </button>
                    @if ($isEdit)
                        <button type="button" class="btn btn-success" wire:click="update">
                            Update
                        </button>
                    @else<button type="button" class="btn btn-success" wire:click="store">
                            Simpan
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        Livewire.on('close-modal', () => {

            const modal = bootstrap.Modal.getInstance(
                document.getElementById('userModal')
            );

            modal.hide();
        });
    </script>
@endscript
