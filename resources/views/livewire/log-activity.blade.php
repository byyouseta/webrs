<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <input type="text" class="form-control" placeholder="Cari log activity..." wire:model.live="search">
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Log Activity</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                    <tr>
                        <td>
                            {{ $log->causer?->name }}
                        </td>
                        <td>
                            {{ $log->description }}
                        </td>
                        <td>
                            {{ $log->created_at }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $logs->links() }}
    </div>

</div>
