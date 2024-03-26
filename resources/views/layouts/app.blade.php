<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/sass/app.scss'])
        @stack('styles')

    </head>
    <body class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none fs-1">
                <i class="bi bi-people"></i>
              <span class="fs-4 ms-2">Laracrm</span>
            </a>

            <ul class="nav nav-pills">
              <li class="nav-item"><a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page">Home</a></li>
              <li class="nav-item"><a href="{{ url('customers') }}" class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">Customers</a></li>
            </ul>
          </header>
        @yield('content')

        <!-- toastr -->
        @include('snippets.toastr')

    </body>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @stack('scripts')
</html>
