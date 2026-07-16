<div>
    <div class="d-flex flex-column flex-md-row gap-2 mb-3">
        <div style="flex:1; max-width:500px">
            <input
                type="text"
                class="form-control"
                placeholder="Cari dokter..."
                wire:model.live.debounce.500ms="search">
        </div>

        @if (!$showForm)
            <button
                type="button"
                class="btn btn-success"
                wire:click="create">

                <svg xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="icon icon-tabler icons-tabler-filled icon-tabler-user-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 2a5 5 0 1 1 0 10a5 5 0 0 1 0 -10z"/>
                    <path d="M9 14c4.418 0 8 2.239 8 5v1a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-1c0 -2.761 3.582 -5 8 -5z"/>
                    <path d="M19 8v6"/>
                    <path d="M16 11h6"/>
                </svg>

                Tambah Dokter
            </button>
        @else
            <button
                type="button"
                class="btn btn-danger"
                wire:click="cancel">
                Tutup Form
            </button>
        @endif
    </div>

    {{-- NOTIFIKASI --}}
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- FORM --}}
    @if ($showForm)
        <div class="card mb-4">
            <div class="card-body">

                <h5 class="mb-3">
                    {{ $doctorId ? 'Edit Dokter' : 'Tambah Dokter' }}
                </h5>

                <form wire:submit.prevent="save">

                    <div class="row g-3">

                        {{-- NIP --}}
                        <div class="col-md-4">
                            <label class="form-label">
                                NIP
                            </label>

                            <input
                                type="text"
                                class="form-control @error('nip') is-invalid @enderror"
                                wire:model="nip"
                                placeholder="Contoh: 202130">

                            @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- NAMA --}}
                        <div class="col-md-4">
                            <label class="form-label">
                                Nama Dokter
                            </label>

                            <input
                                type="text"
                                class="form-control @error('nama') is-invalid @enderror"
                                wire:model="nama"
                                placeholder="Contoh: dr. Sriyanto, M.SI.Med, Sp. B">

                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- SPESIALIS --}}
                        <div class="col-md-4">
                            <label class="form-label">
                                Spesialis
                            </label>

                            <input
                                type="text"
                                class="form-control @error('spesialis') is-invalid @enderror"
                                wire:model="spesialis"
                                placeholder="Contoh: Spesialis Bedah">

                            @error('spesialis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <div class="row g-3 mt-1">

                        {{-- FOTO --}}
                        <div class="col-md-6">
                            <label class="form-label">
                                Foto Dokter
                            </label>

                            <input
                                type="file"
                                class="form-control @error('foto') is-invalid @enderror"
                                wire:model="foto"
                                accept=".jpg,.jpeg,.png,.webp">

                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <small class="text-muted">
                                Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                            </small>

                            <div
                                wire:loading
                                wire:target="foto"
                                class="text-success mt-2">
                                Mengunggah foto...
                            </div>
                        </div>

                        {{-- STATUS --}}
                        <div class="col-md-6">
                            <label class="form-label d-block">
                                Status Praktik
                            </label>

                            <div class="form-check form-switch mt-2">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="is_active"
                                    wire:model="is_active">

                                <label
                                    class="form-check-label"
                                    for="is_active">

                                    Dokter aktif praktik
                                </label>
                            </div>
                        </div>

                    </div>

                    {{-- PREVIEW FOTO --}}
                    @if ($foto || $currentFoto)
                        <div class="row mt-3">
                            <div class="col-md-4">

                                <label class="form-label">
                                    Preview Foto
                                </label>

                                <div>
                                    @if ($foto)
                                        <img
                                            src="{{ $foto->temporaryUrl() }}"
                                            alt="Preview dokter"
                                            class="img-thumbnail"
                                            style="width:140px; height:160px; object-fit:cover;">
                                    @elseif ($currentFoto)
                                        <img
                                            src="{{ Storage::url($currentFoto) }}"
                                            alt="Foto dokter"
                                            class="img-thumbnail"
                                            style="width:140px; height:160px; object-fit:cover;">
                                    @endif
                                </div>

                            </div>
                        </div>
                    @endif

                    <button
                        type="submit"
                        class="btn btn-success mt-3"
                        wire:loading.attr="disabled"
                        wire:target="save,foto">

                        <span
                            wire:loading.remove
                            wire:target="save">
                            Simpan
                        </span>

                        <span
                            wire:loading
                            wire:target="save">
                            Menyimpan...
                        </span>
                    </button>

                </form>
            </div>
        </div>
    @endif

    {{-- TABLE --}}
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NIP</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Status Praktik</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($doctors as $doctor)
                    <tr wire:key="doctor-{{ $doctor->id }}">

                        <td>
                            {{ $doctors->firstItem() + $loop->index }}
                        </td>

                        <td>
                            @if ($doctor->foto)
                                <img
                                    src="{{ Storage::url($doctor->foto) }}"
                                    alt="{{ $doctor->nama }}"
                                    class="rounded"
                                    style="width:60px; height:70px; object-fit:cover;">
                            @else
                                <div
                                    class="bg-light border rounded d-flex align-items-center justify-content-center"
                                    style="width:60px; height:70px;">
                                    Tidak ada foto
                                </div>
                            @endif
                        </td>

                        <td>
                            {{ $doctor->nip }}
                        </td>

                        <td>
                            {{ $doctor->nama }}
                        </td>

                        <td>
                            {{ $doctor->spesialis }}
                        </td>

                        <td>
                            @if ($doctor->is_active)
                                <button
                                    type="button"
                                    class="btn btn-success btn-sm"
                                    wire:click="toggleStatus({{ $doctor->id }})">
                                    Aktif Praktik
                                </button>
                            @else
                                <button
                                    type="button"
                                    class="btn btn-secondary btn-sm"
                                    wire:click="toggleStatus({{ $doctor->id }})">
                                    Tidak Aktif
                                </button>
                            @endif
                        </td>

                        <td>
                            <div class="d-flex gap-1">

                                <button
                                    type="button"
                                    class="btn btn-warning btn-sm"
                                    wire:click="edit({{ $doctor->id }})">
                                    Edit
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-danger btn-sm"
                                    wire:click="delete({{ $doctor->id }})"
                                    wire:confirm="Yakin ingin menghapus dokter {{ $doctor->nama }}?">
                                    Delete
                                </button>

                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td
                            colspan="7"
                            class="text-center text-muted py-4">
                            Data dokter belum tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $doctors->links() }}
</div>
