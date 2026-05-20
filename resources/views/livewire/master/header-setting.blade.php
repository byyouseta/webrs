<div>
    <div class="card">
        <div class="card-header">
            <h5>
                Pengaturan Header
            </h5>
        </div>

        <div class="card-body">
            <form wire:submit.prevent="save">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">
                            Nama Rumah Sakit
                        </label>
                        <input type="text" class="form-control @error('hospital_name') is-invalid @enderror"
                            wire:model="hospital_name">
                        @error('hospital_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            Contact Center
                        </label>
                        <input type="text" class="form-control @error('contact_center') is-invalid @enderror"
                            wire:model="contact_center">
                        @error('contact_center')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            Lokasi
                        </label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror"
                            wire:model="location">
                        @error('location')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            Google Maps URL
                        </label>
                        <input type="text" class="form-control @error('maps_url') is-invalid @enderror"
                            wire:model="maps_url">
                        @error('maps_url')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            SPGDT
                        </label>
                        <input type="text" class="form-control @error('spgdt_number') is-invalid @enderror"
                            wire:model="spgdt_number">
                        @error('spgdt_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            Logo
                        </label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror"
                            wire:model="logo">
                        @error('logo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        @if ($logo)
                            <div class="text-muted small mt-2">Preview:</div>
                            <img class="img-thumbnail mt-2" width="150" src="{{ $logo->temporaryUrl() }}">
                        @elseif($currentLogo)
                            <div class="text-muted small mt-2">Current:</div>
                            <img class="img-thumbnail mt-2" width="150" src="{{ Storage::url($currentLogo) }}">
                        @endif
                    </div>
                </div>
                <button class="btn btn-success mt-4">
                    Simpan
                </button>
            </form>
            @session('success')
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endsession
        </div>
    </div>
</div>
