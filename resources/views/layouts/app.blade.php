<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Capital Life</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div>
        <div class="fixed-top">
            @include('components.header')
            @include('components.navigation')
        </div>
        <main class="py-4" style="margin-top:120px;">
            <div class="container">
                <div class="row " x-data="{points:1}">
                    <div class="@auth @if(in_array(Route::currentRouteName(), ['home', 'balance'])) col-xl-12 @else col-xl-8 @endif @else @if(in_array(Route::currentRouteName(), ['login', 'register'])) col-xl-12 @else col-xl-8 @endif @endauth px-2 ">
                        @yield('content')
                    </div>
                    <div class="col-xl-4 px-2">
                        @yield('sidebar')
                    </div>
                </div>
            </div>
        </main>
        @include('components.footer')
    </div>
    @livewireScripts
</body>
</html>
