<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Landing Page - Capital Life</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div>
            <div>
                @include('components.header')
                @include('components.navigation')
            </div>
            <div class="bg-secondary py-4">
                <div class="row px-4">
                    <div class="col-8 px-2 ">
                        <div class="bg-danger px-4">
                            Column
                        </div>
                    </div>
                    <div class="col-4 px-2">
                        <div class=" bg-dark px-4">
                            Column
                        </div>
                    </div>
                </div>
            </div>
            @include('components.footer')
        </div>
    </body>
</html>
