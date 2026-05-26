<div>

    <div class="d-flex flex-column flex-md-row gap-2 mb-3">
        <div style="flex:1;max-width:500px">
            <input class="form-control" placeholder="Cari layanan..." wire:model.live.debounce.500ms="search">
        </div>

        @if (!$showForm)
            <button class="btn btn-success" wire:click="create">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14m8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" />
                </svg> Tambah Layanan
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
                                Gambar
                            </label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                wire:model="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mt-2">
                            @elseif($currentImage)
                                <img src="{{ Storage::url($currentImage) }}" class="img-thumbnail mt-2">
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">
                                Urutan
                            </label>
                            <input type="number" class="form-control @error('sort') is-invalid @enderror"
                                wire:model="sort">
                            @error('sort')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" wire:model="is_featured" class="form-check-input">
                                Featured
                            </div>
                            <div class="form-check">
                                <input type="checkbox" wire:model="is_executive" class="form-check-input">
                                Executive
                            </div>
                            <div class="form-check">
                                <input type="checkbox" wire:model="is_active" class="form-check-input">
                                Active
                            </div>
                        </div>
                    </div>

                    <hr>

                    <h5>Indonesia</h5>

                    <input class="form-control mb-2 @error('title_id') is-invalid @enderror" placeholder="Judul"
                        wire:model="title_id">
                    @error('title_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <textarea class="form-control mb-2 @error('excerpt_id') is-invalid @enderror" wire:model="excerpt_id"
                        placeholder="Ringkasan"></textarea>
                    @error('excerpt_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div wire:ignore x-data="{
                        initEditor() {
                            ClassicEditor
                                .create($refs.myEditor)
                                .then(editor => {
                                    // Set data awal jika ada
                                    editor.setData(@this.get('content_id') || '');
                    
                                    editor.model.document.on('change:data', () => {
                                        @this.set('content_id', editor.getData());
                                    });
                                })
                                .catch(error => console.error(error));
                        }
                    }" x-init="initEditor()">
                        <textarea x-ref="myEditor" id="content_id" placeholder="Konten">{!! $content_id !!}</textarea>
                    </div>
                    @error('content_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <hr>

                    <h5>English</h5>

                    <input class="form-control mb-2 @error('title_en') is-invalid @enderror" placeholder="Title"
                        wire:model="title_en">
                    @error('title_en')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <textarea class="form-control mb-2 @error('excerpt_en') is-invalid @enderror" wire:model="excerpt_en"
                        placeholder="Excerpt"></textarea>
                    @error('excerpt_en')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div wire:ignore x-data="{
                        initEditor() {
                            ClassicEditor
                                .create($refs.myEditor)
                                .then(editor => {
                                    // Set data awal jika ada
                                    editor.setData(@this.get('content_en') || '');
                    
                                    editor.model.document.on('change:data', () => {
                                        @this.set('content_en', editor.getData());
                                    });
                                })
                                .catch(error => console.error(error));
                        }
                    }" x-init="initEditor()">
                        <textarea x-ref="myEditor" id="content_en" placeholder="Content">{!! $content_en !!}</textarea>
                    </div>
                    @error('content_en')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
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
                    <th>Image</th>
                    <th>Title</th>
                    <th>Featured</th>
                    <th>Executive</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>
                            @if ($service->image)
                                <img width="100" src="{{ Storage::url($service->image) }}">
                            @endif
                        </td>
                        <td>
                            {{ $service->translations->where('locale', 'id')->first()?->title }}
                        </td>
                        <td>
                            {{ $service->is_featured ? 'Ya' : 'Tidak' }}
                        </td>
                        <td>
                            {{ $service->is_executive ? 'Ya' : 'Tidak' }}
                        </td>
                        <td>
                            {{ $service->is_active ? 'Aktif' : 'Nonaktif' }}
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm" wire:click="edit({{ $service->id }})">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm" wire:click="delete({{ $service->id }})">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $services->links() }}

    </div>
</div>
@script
    <script>
        paste_remove_styles: true;
    </script>
@endscript
