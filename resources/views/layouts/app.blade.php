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


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles


    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }

        .bg-landing {
            background: rgb(88,0,84);
            background: linear-gradient(111deg, rgba(88,0,84,1) 23%, rgba(66,17,66,1) 100%);
        }
    </style>
</head>
<body class="antialiased">
    <div>
        <div class="fixed-top">
            @include('components.header')
            @include('components.navigation')
        </div>

        <main class="py-4" style="margin-top:120px;">
            <div class="container-lg">
                <div class="row " x-data="{points:[]}">
                    <div class="pt-2 @auth @if(in_array(Route::currentRouteName(), ['home', 'balance'])) col-xl-12 @else col-xl-8 @endif @else @if(in_array(Route::currentRouteName(), ['login', 'register'])) col-xl-12 @else col-xl-8 @endif @endauth px-2 ">
                        @yield('content')
                    </div>
                    <div class="col-xl-4 px-2 pt-2">
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
