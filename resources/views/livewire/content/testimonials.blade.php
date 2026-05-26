<div>
    <div class="d-flex flex-column flex-md-row gap-2 mb-3">
        <div style="flex:1;max-width:500px">
            <input type="text" class="form-control" placeholder="Cari testimoni..."
                wire:model.live.debounce.500ms="search">
        </div>
        @if (!$showForm)
            <button class="btn btn-success" wire:click="create">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14m8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" />
                </svg> Tambah Testimoni
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
                        <div class="col-md-4">
                            <label class="form-label">
                                Foto Pasien
                            </label>
                            <input type="file" class="form-control" wire:model="photo">
                            @if ($photo)
                                <img src="{{ $photo->temporaryUrl() }}" class="img-thumbnail mt-2">
                            @elseif($currentPhoto)
                                <img src="{{ Storage::url($currentPhoto) }}" class="img-thumbnail mt-2">
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">
                                Nama Tampilan
                            </label>
                            <input class="form-control" wire:model="display_name">
                            <input type="checkbox" class="form-check-input mt-2" wire:model="is_anonymous">
                            <label class="form-check-label mt-2">
                                Sembunyikan identitas pasien
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">
                                Urutan
                            </label>
                            <input type="number" class="form-control" wire:model="sort">
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <label class="form-label">
                                Kategori Layanan
                            </label>
                            <select class="form-control" wire:model="service_id">
                                <option value=""> Pilih layanan </option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">
                                        {{ $service->translation?->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">
                                Jenis Pasien
                            </label>
                            <input class="form-control" wire:model="patient_type">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label">
                            Kutipan Testimoni
                        </label>
                        <textarea rows="4" class="form-control" wire:model="quote"></textarea>
                    </div>
                    <div class="mt-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" wire:model="consent_published">
                            <label>
                                Persetujuan publikasi tersedia
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" wire:model="is_active">
                            <label>
                                Aktif
                            </label>
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
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Kutipan</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $item)
                    <tr>
                        <td>
                            @if ($item->photo)
                                <img src="{{ Storage::url($item->photo) }}" class="rounded border"
                                    style="width:80px;height:60px;object-fit:cover;">
                            @endif
                        </td>
                        <td>
                            {{ $item->display_patient_name }}
                        </td>
                        <td>
                            {{ Str::limit($item->quote, 50) }}
                        </td>
                        <td>
                            {{ $item->service?->translation?->title ?? '-' }}
                        </td>
                        <td>
                            {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                        </td>
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

    {{ $testimonials->links() }}

</div>
