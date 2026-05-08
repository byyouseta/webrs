<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <input type="text" class="form-control" placeholder="Cari user..." wire:model.live="search">
        </div>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#userModal" wire:click="resetForm">
            Tambah User
        </button>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th width="60">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $key => $user)
                    <tr>
                        <td>{{ $users->firstItem() + $key }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="d-flex flex-wrap gap-1">
                                @foreach ($user->roles as $role)
                                    <span class="badge bg-success">
                                        {{ $role->name }}
                                    </span>
                                @endforeach
                            </div>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#userModal" wire:click="edit({{ $user->id }})">
                                    Edit
                                </button>
                                <button class="btn btn-danger btn-sm" wire:click="delete({{ $user->id }})"
                                    wire:confirm="Yakin hapus user ini?">
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            Tidak ada data
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $users->links() }}
    </div>

    {{-- MODAL --}}
    <div wire:ignore.self class="modal fade" id="userModal" tabindex="-1">
        <form action="" wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            {{ $isEdit ? 'Edit User' : 'Tambah User' }}
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
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                wire:model="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Password
                                @if ($isEdit)
                                    <small class="text-muted">
                                        (Kosongkan jika tidak diubah)
                                    </small>
                                @endif
                            </label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                wire:model="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Role
                            </label>
                            <div class="row">
                                @foreach ($roles as $role)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="{{ $role->name }}"
                                                wire:model="selectedRoles" id="role{{ $role->id }}">
                                            <label class="form-check-label" for="role{{ $role->id }}">
                                                {{ $role->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Batal
                        </button>
                        @if ($isEdit)
                            <button type="submit" class="btn btn-success">
                                Update
                            </button>
                        @else<button type="submit" class="btn btn-success">
                                Simpan
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </form>

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
