<div>

    <div class="d-flex flex-column flex-md-row gap-2 mb-3">
        <div style="flex:1; max-width:500px;">
            <input type="text" class="form-control" placeholder="Cari bahasa..." wire:model.live.debounce.500ms="search">
        </div>
        <div>
            @if (!$showForm)
                <button class="btn btn-success" wire:click="create">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14m8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" />
                    </svg> Tambah
                </button>
            @else
                <button class="btn btn-danger" wire:click="cancel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-square-x">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M19 2h-14a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-14a3 3 0 0 0 -3 -3zm-9.387 6.21l.094 .083l2.293 2.292l2.293 -2.292a1 1 0 0 1 1.497 1.32l-.083 .094l-2.292 2.293l2.292 2.293a1 1 0 0 1 -1.32 1.497l-.094 -.083l-2.293 -2.292l-2.293 2.292a1 1 0 0 1 -1.497 -1.32l.083 -.094l2.292 -2.293l-2.292 -2.293a1 1 0 0 1 1.32 -1.497z" />
                    </svg> Tutup Form
                </button>
            @endif
        </div>
    </div>

    @if ($showForm)
        <div class="card mb-3">
            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">
                                Code
                            </label>
                            <input class="form-control" wire:model="code">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">
                                Nama
                            </label>
                            <input class="form-control" wire:model="name">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">
                                Flag
                            </label>
                            <input type="file" class="form-control" wire:model="flag">
                            @if ($flag)
                                <div class="text-muted small mt-2">Preview:</div>
                                <img src="{{ $flag->temporaryUrl() }}" width="80" class="mt-2">
                            @elseif($currentFlag)
                                <div class="text-muted small mt-2">Current:</div>
                                <img src="{{ Storage::url($currentFlag) }}" width="80" class="mt-2">
                            @endif
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model="is_default">
                            <label>
                                Default
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model="is_active">
                            <label>
                                Aktif
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-success mt-3">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Flag</th>
                    <th>Code</th>
                    <th>Nama</th>
                    <th>Default</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($languages as $item)
                    <tr>
                        <td>
                            @if ($item->flag)
                                <img src="{{ Storage::url($item->flag) }}" width="40">
                            @endif
                        </td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            {{ $item->is_default ? 'Ya' : '-' }}
                        </td>
                        <td>
                            {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm" wire:click="edit({{ $item->id }})">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $languages->links() }}

</div>
