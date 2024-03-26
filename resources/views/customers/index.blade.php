@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Manage Customers</div>
    <div class="card-body">
        {{ $dataTable->table() }}
    </div>
</div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
