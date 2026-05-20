<div>
    <div class="row align-items-center mb-3 g-2">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Cari judul atau konten..."
                wire:model.live.debounce.500ms="search">
        </div>
        <div class="col-md-6 text-md-end">
            @if (!$showForm)
                <button class="btn btn-success w-100 w-md-auto" wire:click="create">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14m8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" />
                    </svg> Tambah Artikel
                </button>
            @else
                <button class="btn btn-danger w-100 w-md-auto" wire:click="cancel">
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

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="save">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Tipe</label>
                            <select wire:model="type" class="form-control">
                                <option value="berita">
                                    Berita
                                </option>
                                <option value="artikel">
                                    Artikel
                                </option>
                                <option value="pengumuman">
                                    Pengumuman
                                </option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">
                                Thumbnail
                            </label>

                            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                                wire:model="thumbnail" accept="image/*">
                            @error('thumbnail')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div wire:loading wire:target="thumbnail" class="mt-2 text-muted">
                                Uploading...
                            </div>

                            {{-- Preview gambar baru (belum disimpan) --}}
                            @if ($thumbnail)
                                <div class="mt-3">
                                    <small class="text-muted d-block mb-2">
                                        Preview upload baru
                                    </small>

                                    <img src="{{ $thumbnail->temporaryUrl() }}" class="img-thumbnail"
                                        style="max-height:200px">
                                </div>

                                {{-- Preview gambar lama saat edit --}}
                            @elseif($currentThumbnail)
                                <div class="mt-3">
                                    <small class="text-muted d-block mb-2">
                                        Thumbnail saat ini
                                    </small>
                                    <img src="{{ asset('storage/' . $currentThumbnail) }}" class="img-thumbnail"
                                        style="max-height:200px">
                                </div>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label>Publish</label>
                            <input type="checkbox" wire:model="is_published">
                        </div>
                    </div>

                    <hr>

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <button type="button" wire:click="$set('activeTab','id')"
                                class="nav-link {{ $activeTab == 'id' ? 'active' : '' }}"
                                {{ $errors->has('title_id') || $errors->has('content_id') ? 'text-danger' : '' }}">
                                Indonesia
                                @if ($errors->has('title_id') || $errors->has('content_id'))
                                    <span class="badge bg-danger ms-1">
                                        !
                                    </span>
                                @endif
                            </button>
                        </li>

                        <li class="nav-item">
                            <button type="button" wire:click="$set('activeTab','en')"
                                class="nav-link {{ $activeTab == 'en' ? 'active' : '' }} {{ $errors->has('title_en') || $errors->has('content_en') ? 'text-danger' : '' }}"">
                                English
                                @if ($errors->has('title_en') || $errors->has('content_en'))
                                    <span class="badge bg-danger ms-1">
                                        !
                                    </span>
                                @endif
                            </button>
                        </li>
                    </ul>


                    <div class="tab-content mt-3">
                        <div class="{{ $activeTab == 'id' ? '' : 'd-none' }}">
                            <input wire:model="title_id"
                                class="form-control mb-2 @error('title_id') is-invalid @enderror"
                                placeholder="Judul Indonesia">
                            @error('title_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <textarea wire:model="excerpt_id" class="form-control mb-2 @error('excerpt_id') is-invalid @enderror"
                                placeholder="Kutipan"></textarea>
                            @error('excerpt_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <textarea wire:model.live.debounce.300ms="content_id" class="form-control @error('content_id') is-invalid @enderror"
                                rows="8" placeholder="Isi Artikel" maxlength="5000"></textarea>
                            @error('content_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">

                                {{ strlen($content_id ?? '') }}/5000 karakter

                                (sisa {{ 5000 - strlen($content_id ?? '') }})

                            </small>
                        </div>
                        <div class="{{ $activeTab == 'en' ? '' : 'd-none' }}">
                            <input wire:model="title_en"
                                class="form-control mb-2 @error('title_en') is-invalid @enderror"
                                placeholder="English title">
                            @error('title_en')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <textarea wire:model="excerpt_en" class="form-control mb-2 @error('excerpt_en') is-invalid @enderror"
                                placeholder="Excerpt"></textarea>
                            @error('excerpt_en')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <textarea wire:model.live.debounce.300ms="content_en" class="form-control @error('content_en') is-invalid @enderror"
                                rows="8" placeholder="Content" maxlength="5000"></textarea>
                            @error('content_en')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">

                                {{ strlen($content_en ?? '') }}/5000 karakter

                                (sisa {{ 5000 - strlen($content_en ?? '') }})

                            </small>
                        </div>
                    </div>
                    <button class="btn btn-success mt-3">
                        Simpan
                    </button>
                </div>
            </div>
        </form>

        <hr>

    @endif
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Ringkasan</th>
                    <th>Tipe</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $item)
                    <tr>
                        <td>
                            {{ $item->translations->first()?->title }}
                        </td>
                        <td>
                            {{ $item->translations->first()?->excerpt }}
                        </td>
                        <td>
                            {{ ucfirst($item->type) }}
                        </td>

                        <td>
                            {{ $item->is_published ? 'Published' : 'Draft' }}
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm" wire:click="edit({{ $item->id }})">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $item->id }})">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        {{ $articles->links() }}
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Hapus Artikel
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="mb-3" style="font-size:50px">
                            ⚠️
                        </div>
                        <h5>
                            Apakah yakin?
                        </h5>
                        <p class="text-muted">
                            Data yang dihapus tidak dapat dikembalikan.
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button class="btn btn-danger" wire:click="delete">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener(
        'showDeleteModal',
        () => {

            let modal =
                new bootstrap.Modal(
                    document.getElementById(
                        'deleteModal'
                    )
                );

            modal.show();

        }
    );

    window.addEventListener(
        'hideDeleteModal',
        () => {

            bootstrap.Modal
                .getInstance(
                    document.getElementById(
                        'deleteModal'
                    )
                )
                ?.hide();

        }
    );
</script>
