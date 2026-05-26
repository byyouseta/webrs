<div>
    <div class="d-flex flex-column flex-md-row gap-2 mb-3">
        <div style="flex:1;max-width:500px">
            <input class="form-control" placeholder="Cari promo..." wire:model.live.debounce.500ms="search">
        </div>
        @if (!$showForm)
            <button class="btn btn-success" wire:click="create">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14m8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" />
                </svg> Tambah Promo
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
                                Poster
                            </label>
                            <input type="file" class="form-control" wire:model="image">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mt-2">
                            @elseif($currentImage)
                                <img src="{{ Storage::url($currentImage) }}" class="img-thumbnail mt-2">
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">
                                Layanan
                            </label>
                            <select wire:model="service_id" class="form-control">
                                <option value="">
                                    Umum
                                </option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">
                                        {{ $service->translation?->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">
                                Urutan
                            </label>
                            <input type="number" class="form-control" wire:model="sort">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label">
                                Mulai
                            </label>
                            <input type="date" class="form-control" wire:model="start_date">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">
                                Selesai
                            </label>
                            <input type="date" class="form-control" wire:model="end_date">
                        </div>
                    </div>

                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" wire:model="is_active"> Aktif
                    </div>

                    <hr>

                    <h5>Indonesia</h5>

                    <input class="form-control mb-2" wire:model="title_id" placeholder="Judul">

                    <textarea class="form-control mb-2" wire:model="description_id" placeholder="Deskripsi"></textarea>

                    <hr>

                    <h5>English</h5>

                    <input class="form-control mb-2" wire:model="title_en" placeholder="Title">
                    <textarea class="form-control mb-2" wire:model="description_en" placeholder="Description"></textarea>
                    <button class="btn btn-success mt-4">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    @endif

    <div class="table">
        <table class="table">
            <thead>
                <tr>
                    <th>Poster</th>
                    <th>Judul</th>
                    <th>Layanan</th>
                    <th>Periode</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promotions as $promo)
                    <tr>
                        <td>
                            @if ($promo->image)
                                <img width="100" src="{{ Storage::url($promo->image) }}">
                            @endif
                        </td>
                        <td> {{ $promo->translation('id')->first()?->title }} </td>
                        <td> {{ $promo->service?->translation?->title ?? 'Umum' }} </td>
                        <td>
                            {{ optional($promo->start_date)->format('d/m/Y') }}
                            -
                            {{ optional($promo->end_date)->format('d/m/Y') }}
                        </td>
                        <td> {{ $promo->is_active ? 'Aktif' : 'Nonaktif' }} </td>
                        <td>
                            <button class="btn btn-warning btn-sm" wire:click="edit({{ $promo->id }})">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm" wire:click="delete({{ $promo->id }})">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $promotions->links() }}

</div>
