@extends('layouts.master')

@section('content')
    <div class="row mb-6 g-6">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Doctors
                </div>
                <div class="card-body">
                    <p class="mb-0">
                        <livewire:content.doctors />
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
