<?php

namespace App\Livewire\Content;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PpidInformationRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PpidInformationRequests extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $isDetailOpen = false;
    public $search = '';
    public $status = '';

    public $selectedRequest = null;
    public $officerNote = '';
    public $newStatus = '';

    public $showDetail = false;

    protected $queryString = [
        'search' => ['except' => ''],
        'status' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatus()
    {
        $this->resetPage();
    }

    public function getRequestsProperty()
    {
        return PpidInformationRequest::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('registration_number', 'like', '%' . $this->search . '%')
                        ->orWhere('applicant_name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%')
                        ->orWhere('nik', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->status, function ($query) {
                $query->where('status', $this->status);
            })
            ->latest()
            ->paginate(10);
    }

    public function openDetail($id)
    {
        $this->selectedRequest = PpidInformationRequest::findOrFail($id);

        $this->officerNote = $this->selectedRequest->officer_note ?? '';

        $this->newStatus = $this->selectedRequest->status;

        $this->isDetailOpen = true;
    }

    public function closeDetail()
    {
        $this->isDetailOpen = false;
        $this->selectedRequest = null;
        $this->officerNote = '';
        $this->newStatus = '';
    }

    public function updateStatus()
    {
        if (!$this->selectedRequest) {
            return;
        }

        $this->validate([
            'newStatus' => 'required|in:diajukan,diproses,selesai,ditolak',
            'officerNote' => 'nullable|string|max:2000',
        ]);

        $request = PpidInformationRequest::findOrFail(
            $this->selectedRequest->id
        );

        $now = now();

        $data = [
            'status' => $this->newStatus,
            'officer_note' => $this->officerNote,
        ];

        if ($this->newStatus === 'diproses' && !$request->processed_at) {
            $data['processed_at'] = $now;
        }

        if ($this->newStatus === 'selesai' && !$request->completed_at) {
            $data['completed_at'] = $now;

            if (!$request->processed_at) {
                $data['processed_at'] = $now;
            }
        }

        $request->update($data);

        $this->selectedRequest = $request->fresh();

        session()->flash('success', 'Status permohonan berhasil diperbarui.');
    }

    public function downloadIdentity($id)
    {
        $request = PpidInformationRequest::findOrFail($id);

        abort_unless(
            $request->identity_file &&
            Storage::disk('public')->exists($request->identity_file),
            404
        );

        return Storage::disk('public')->download(
            $request->identity_file
        );
    }

    public function render()
    {
        return view('livewire.content.ppid-information-requests', [
            'requests' => $this->requests,
            'total' => PpidInformationRequest::count(),
            'diajukan' => PpidInformationRequest::where('status', 'diajukan')->count(),
            'diproses' => PpidInformationRequest::where('status', 'diproses')->count(),
            'selesai' => PpidInformationRequest::where('status', 'selesai')->count(),
        ]);
    }
}
