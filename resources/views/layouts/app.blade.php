<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
=======
<html lang="en">

{{-- ========== HEADER ========== --}}
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koleksi Buku - @yield('title')</title>

    {{-- ========== STYLE GLOBAL ========== --}}
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- ========== STYLE PAGE ========== --}}
    @yield('style_page')
</head>

<body>
<div class="container-scroller">

    {{-- ========== NAVBAR ========== --}}
    @include('layouts.navbar')

    <div class="container-fluid page-body-wrapper">

        {{-- ========== SIDEBAR ========== --}}
        @include('layouts.sidebar')

        <div class="main-panel">
            <div class="content-wrapper">

                {{-- ========== CONTENT ========== --}}
                @yield('content')

            </div>

            {{-- ========== FOOTER ========== --}}
            @include('layouts.footer')
        </div>
    </div>
</div>

{{-- ========== JAVASCRIPT GLOBAL ========== --}}
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/misc.js') }}"></script>

{{-- ========== JAVASCRIPT PAGE ========== --}}
@yield('js_page')

</body>
</html>
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
