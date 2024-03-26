@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create New Customer</div>
    <div class="card-body">
        <form method="POST" action="{{ route('customers.store') }}">
            @csrf
            <div class="form-group m-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                @error('name')
                    <ul class="m-1 text-danger">
                        @foreach ($errors->get('name') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
            <div class="form-group m-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                    <ul class="m-1 text-danger">
                        @foreach ($errors->get('email') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
            <div class="form-group m-3">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
                @error('phone')
                    <ul class="m-1 text-danger">
                        @foreach ($errors->get('phone') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary m-3">Create</button>
        </form>
    </div>
</div>
@endsection
