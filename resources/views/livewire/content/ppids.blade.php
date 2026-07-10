<div>
    <div class="d-flex flex-column flex-md-row gap-2 mb-3">
        <div style="flex:1;max-width:500px">
            <input class="form-control" placeholder="Cari dokumen..." wire:model.live.debounce.500ms="search">
        </div>

        @if (!$showForm)
            <button class="btn btn-success" wire:click="create">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="currentColor"
                    class="icon icon-tabler icons-tabler-filled icon-tabler-file-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 2l6 6v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-16a2 2 0 0 1 2 -2h8z"/>
                    <path d="M14 2v6h6"/>
                    <path d="M12 11v6"/>
                    <path d="M9 14h6"/>
                </svg>
                Tambah Dokumen
            </button>
        @else
            <button class="btn btn-danger" wire:click="cancel">
                Tutup Form
            </button>
        @endif
    </div>

    {{-- FORM --}}
    @if ($showForm)
        <div class="card mb-4">
            <div class="card-body">
                <form wire:submit.prevent="save">

                    <div class="row g-3">

                        {{-- FILE --}}
                        <div class="col-md-4">
                            <label class="form-label">File</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" wire:model="file">
                            @error('file')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- THUMBNAIL --}}
                        <div class="col-md-4">
                            <label class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" wire:model="thumbnail">
                        </div>

                        {{-- CATEGORY --}}
                        <div class="col-md-4">
                            <label class="form-label">Kategori</label>
                            <select wire:model="category_id" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    {{-- TANGGAL --}}
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" wire:model="tanggal">
                        </div>
                    </div>

                    <hr>

                    {{-- INDONESIA --}}
                    <h5>Indonesia</h5>
                    <input class="form-control mb-2" wire:model="title_id" placeholder="Judul">
                    <textarea class="form-control mb-2" wire:model="description_id" placeholder="Deskripsi"></textarea>

                    <hr>

                    {{-- ENGLISH --}}
                    <h5>English</h5>
                    <input class="form-control mb-2" wire:model="title_en" placeholder="Title">
                    <textarea class="form-control mb-2" wire:model="description_en" placeholder="Description"></textarea>

                    <button class="btn btn-success mt-3">
                        Simpan
                    </button>

                </form>
            </div>
        </div>
    @endif

    {{-- TABLE --}}
    <table class="table">
        <thead>
            <tr>
                <th>File</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ppids as $doc)
                <tr>
                    <td>
                        @if ($doc->file)
                            <a href="{{ Storage::url($doc->file) }}" target="_blank">
                                Download
                            </a>
                        @endif
                    </td>

                    <td>
                        {{ $doc->translation('id')->first()?->title }}
                    </td>

                    <td>
                        {{ $doc->category?->name }}
                    </td>

                    <td>
                        {{$doc->tanggal->format('d-m-Y') }}
                    </td>

                    <td>
                        <button class="btn btn-warning btn-sm" wire:click="edit({{ $doc->id }})">
                            Edit
                        </button>
                        <button class="btn btn-danger btn-sm" wire:click="delete({{ $doc->id }})">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $ppids->links() }}
</div>
