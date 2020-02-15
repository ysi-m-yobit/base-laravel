<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="uk-section">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="uk-section-muted">
                <div class="uk-section-muted">
                    Laravel
                </div>
                @yield('index')
                <div id="app">
                    <notification-component></notification-component>
                </div>
                <script src="{{ mix('js/manifest.js') }}"></script>
                <script src="{{ mix('js/vendor.js') }}"></script>
                <script src="{{ mix('js/app.js') }}"></script>
            </div>
        </div>
    </body>
</html>
