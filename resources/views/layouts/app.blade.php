<!DOCTYPE html>
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