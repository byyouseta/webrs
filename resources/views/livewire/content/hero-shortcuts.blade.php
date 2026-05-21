<div>
    <div class="d-flex flex-column flex-md-row gap-2 mb-3">
        <div style="flex:1; max-width:500px">
            <input class="form-control" placeholder="Cari shortcut..." wire:model.live.debounce.500ms="search">
        </div>

        @if (!$showForm)
            <button class="btn btn-success" wire:click="create">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14m8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" />
                </svg> Tambah Shortcut
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

    @if ($showForm)
        <div class="card mb-4">
            <div class="card-body">
                <form wire:submit.prevent="save">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label ">
                                Judul Indonesia
                            </label>
                            <input class="form-control @error('title_id') is-invalid @enderror" wire:model="title_id">
                            @error('title_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label ">
                                Judul English
                            </label>
                            <input class="form-control @error('title_en') is-invalid @enderror" wire:model="title_en">
                            @error('title_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label ">
                                Icon
                            </label>
                            <input class="form-control @error('icon') is-invalid @enderror" wire:model="icon"
                                placeholder="tipe icon">
                            @error('icon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <small class="text-muted">
                                Contoh:
                                calendar,
                                stethoscope,
                                heart
                            </small>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label ">
                                URL
                            </label>
                            <input class="form-control @error('url') is-invalid @enderror" wire:model="url">
                            @error('url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">
                                Urutan
                            </label>
                            <input type="number" class="form-control @error('sort') is-invalid @enderror"
                                wire:model="sort">
                            @error('sort')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <label class="form-label d-block">
                                Status
                            </label>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" wire:model="is_active">
                                Aktif
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success mt-4">
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
                    <th>Icon</th>
                    <th>Judul</th>
                    <th>URL</th>
                    <th>Urutan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shortcuts as $item)
                    <tr>
                        <td> {{ $item->icon }} </td>
                        <td> {{ $item->title_id }} </td>
                        <td> {{ $item->url }} </td>
                        <td> {{ $item->sort }} </td>
                        <td> {{ $item->is_active ? 'Aktif' : 'Nonaktif' }} </td>
                        <td>
                            <button class="btn btn-warning btn-sm" wire:click="edit({{ $item->id }})">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm" wire:click="delete({{ $item->id }})">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $shortcuts->links() }}

</div>
