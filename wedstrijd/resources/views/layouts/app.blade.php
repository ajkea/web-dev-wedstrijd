<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- <meta http-equiv="refresh" content="3" > -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Scripts font awesome -->
    <script defer src="{{ asset('js/fontawesome.js') }}"></script>
    <script defer src="{{ asset('js/light.js') }}"></script>
    <script defer src="{{ asset('js/regular.js') }}"></script>
    <script defer src="{{ asset('js/solid.js') }}"></script>
    <script defer src="{{ asset('js/brands.js') }}"></script>

</head>
<body>
    <div id="app">
    @include('layouts.header')
    <div class="container">
        @yield('content')
        </div>
    </div>
    @include('layouts.footer')
    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
