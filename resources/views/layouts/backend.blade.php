<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>SuperCalendar - @yield('pagetitle')</title>

        <meta name="description" content="">
        <meta name="author" content="Thunderdome 97">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{ mix('/css/app.css') }}">
        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body>
        <div id="page-container" class="enable-cookies sidebar-o sidebar-inverse page-header-fixed page-header-inverse">
            @include('layouts.partials.header')
            @include('layouts.partials.sidebar')
            @yield('content')

            @include('layouts.partials.footer')
        </div>
        <!-- END Page Container -->

        <!-- App Core JS -->
        <script src="{{ mix('js/app.js') }}"></script>


        <script>

        </script>


        @yield('js_after')


    </body>
</html>
