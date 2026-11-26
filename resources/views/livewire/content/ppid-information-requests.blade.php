<div>
    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-bold mb-1">Permohonan Informasi PPID</h4>
                <p class="text-muted mb-0">
                    Manajemen permohonan informasi publik RSUP Surakarta
                </p>
            </div>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Statistik --}}
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <small class="text-muted">Total Permohonan</small>
                        <h3 class="fw-bold mb-0">{{ $total }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <small class="text-muted">Diajukan</small>
                        <h3 class="fw-bold text-warning mb-0">{{ $diajukan }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <small class="text-muted">Diproses</small>
                        <h3 class="fw-bold text-primary mb-0">{{ $diproses }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <small class="text-muted">Selesai</small>
                        <h3 class="fw-bold text-success mb-0">{{ $selesai }}</h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- Daftar Permohonan --}}
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">Daftar Permohonan</h5>
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-7 mb-2">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Cari nomor registrasi, nama, email, atau NIK..."
                            wire:model.live.debounce.400ms="search"
                        >
                    </div>

                    <div class="col-md-5 mb-2">
                        <select class="form-select" wire:model.live="status">
                            <option value="">Semua Status</option>
                            <option value="diajukan">Diajukan</option>
                            <option value="diproses">Diproses</option>
                            <option value="selesai">Selesai</option>
                            <option value="ditolak">Ditolak</option>
                        </select>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No.</th>
                                <th>Nomor Registrasi</th>
                                <th>Tanggal</th>
                                <th>Nama Pemohon</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($requests as $index => $item)
                                <tr>
                                    <td>{{ $requests->firstItem() + $index }}</td>

                                    <td>
                                        <strong>{{ $item->registration_number }}</strong>
                                    </td>

                                    <td>
                                        {{ $item->created_at?->format('d-m-Y H:i') }}
                                    </td>

                                    <td>{{ $item->applicant_name }}</td>

                                    <td>{{ $item->email }}</td>

                                    <td>
                                        @php
                                            $badges = [
                                                'diajukan' => 'warning',
                                                'diproses' => 'primary',
                                                'selesai' => 'success',
                                                'ditolak' => 'danger',
                                            ];
                                        @endphp

                                        <span class="badge bg-{{ $badges[$item->status] ?? 'secondary' }}">
                                            {{ ucfirst($item->status) }}
                                        </span>
                                    </td>

                                    <td class="text-center">
                                       <button type="button"
                                            class="btn btn-sm btn-outline-primary"
                                            wire:click="openDetail({{ $item->id }})">
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4 text-muted">
                                        Belum ada permohonan informasi.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $requests->links() }}
                </div>

            </div>
        </div>
    </div>

    {{-- Modal Detail --}}
    @if ($isDetailOpen && $selectedRequest)
        <div class="modal fade show d-block"
             tabindex="-1"
             style="background: rgba(0,0,0,.5);"
             wire:key="ppid-detail-{{ $selectedRequest->id }}">

            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title fw-bold">Detail Permohonan PPID</h5>
                            <small class="text-muted">
                                {{ $selectedRequest->registration_number }}
                            </small>
                        </div>

                        <button type="button" class="btn-close"
                                wire:click="closeDetail"></button>
                    </div>

                    <div class="modal-body">

                        <h6 class="fw-bold text-primary mb-3">Data Pemohon</h6>

                        <table class="table table-sm">
                            <tr>
                                <th width="35%">Nama</th>
                                <td>{{ $selectedRequest->applicant_name }}</td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>{{ $selectedRequest->nik ?: '-' }}</td>
                            </tr>
                            <tr>
                                <th>Organisasi</th>
                                <td>{{ $selectedRequest->organization ?: '-' }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $selectedRequest->email }}</td>
                            </tr>
                            <tr>
                                <th>Telepon</th>
                                <td>{{ $selectedRequest->phone }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $selectedRequest->address }}</td>
                            </tr>
                        </table>

                        <h6 class="fw-bold text-primary mt-4 mb-3">
                            Informasi yang Dimohon
                        </h6>

                        <div class="mb-3">
                            <label class="fw-semibold">Informasi</label>
                            <p>{{ $selectedRequest->requested_information }}</p>
                        </div>

                        <div class="mb-3">
                            <label class="fw-semibold">Tujuan Penggunaan</label>
                            <p>{{ $selectedRequest->purpose }}</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="fw-semibold">Cara Memperoleh</label>
                                <p>{{ ucfirst($selectedRequest->delivery_method) }}</p>
                            </div>

                            <div class="col-md-6">
                                <label class="fw-semibold">Format Informasi</label>
                                <p>{{ ucfirst($selectedRequest->information_format) }}</p>
                            </div>
                        </div>

                        <hr>

                        <h6 class="fw-bold text-primary mb-3">Dokumen Identitas</h6>

                        @if ($selectedRequest->identity_file)
                            <button
                                type="button"
                                class="btn btn-outline-primary btn-sm"
                                wire:click="downloadIdentity({{ $selectedRequest->id }})"
                            >
                                <i class="bi bi-download"></i>
                                Unduh Dokumen Identitas
                            </button>
                        @else
                            <p class="text-muted">Tidak ada lampiran.</p>
                        @endif

                        <hr>

                        <h6 class="fw-bold text-primary mb-3">Tindak Lanjut Admin</h6>

                        <div class="mb-3">
                            <label class="form-label">Status Permohonan</label>

                            <select class="form-select" wire:model="newStatus">
                                <option value="diajukan">Diajukan</option>
                                <option value="diproses">Diproses</option>
                                <option value="selesai">Selesai</option>
                                <option value="ditolak">Ditolak</option>
                            </select>

                            @error('newStatus')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Catatan Petugas</label>

                            <textarea
                                class="form-control"
                                rows="3"
                                wire:model="officerNote"
                                placeholder="Masukkan catatan tindak lanjut..."
                            ></textarea>

                            @error('officerNote')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        @if ($selectedRequest->processed_at)
                            <small class="text-muted d-block">
                                Diproses: {{ $selectedRequest->processed_at->format('d-m-Y H:i') }}
                            </small>
                        @endif

                        @if ($selectedRequest->completed_at)
                            <small class="text-muted d-block">
                                Selesai: {{ $selectedRequest->completed_at->format('d-m-Y H:i') }}
                            </small>
                        @endif

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                wire:click="closeDetail">
                            Tutup
                        </button>

                        <button type="button" class="btn btn-primary"
                                wire:click="updateStatus"
                                wire:loading.attr="disabled">
                            <span wire:loading.remove wire:target="updateStatus">
                                Simpan Perubahan
                            </span>
                            <span wire:loading wire:target="updateStatus">
                                Menyimpan...
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    @endif
</div>
