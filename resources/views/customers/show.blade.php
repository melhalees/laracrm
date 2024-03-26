@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Customer Details</div>
    <div class="card-body">
        <dl>
            <dt>Name</dt>
            <dd>{{ $customer->name }}</dd>
            <dt>Email</dt>
            <dd>{{ $customer->email }}</dd>
            <dt>Phone</dt>
            <dd>{{ $customer->phone }}</dd>
        </dl>
    </div>
</div>
@endsection
