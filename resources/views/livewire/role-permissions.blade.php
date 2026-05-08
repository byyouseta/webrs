<div>
    <div wire:ignore.self class="modal fade" id="permissionModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <form wire:submit="save">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Permission Role:
                            {{ $roleName }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            @foreach ($permissions as $group => $items)
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-header bg-light">
                                            <strong>
                                                {{ strtoupper($group) }}
                                            </strong>
                                        </div>
                                        <div class="card-body">
                                            @foreach ($items as $permission)
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        value="{{ $permission->name }}" wire:model="selectedPermissions"
                                                        id="permission{{ $permission->id }}">
                                                    <label class="form-check-label"
                                                        for="permission{{ $permission->id }}">
                                                        {{ $permission->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-success">
                            Simpan Permission
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:init', () => {
        let permissionModal =
            new bootstrap.Modal(
                document.getElementById('permissionModal')
            );
        Livewire.on('showPermissionModal', () => {
            permissionModal.show();
        });
        Livewire.on('hidePermissionModal', () => {
            permissionModal.hide();
        });
    });
</script>
