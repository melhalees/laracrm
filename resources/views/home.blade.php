@extends('layouts.app')

@section('content')
<h1>Welcome to our basic CRM system 👀</h1>

<p>Here you can manage your customers.</p>
<p>Feel free to navigate through the menu and explore the features of our system.</p>
<p>Enjoy your stay! 😊</p>

<h2>Navigation</h2>
<ul>
    <li><a href="{{ route('customers.index') }}">Customers</a></li>
</ul>

@endsection
