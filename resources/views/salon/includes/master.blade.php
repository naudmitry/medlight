<!DOCTYPE html>
<html class="wide wow-animation" lang="ru">
    <head>
        @yield('header_meta')

        <meta name="yandex-verification" content="396183a083841e81" />
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300i,400,400i,700%7CMontserrat:400,500,600,700,800%7CPlayfair+Display:400,700,700i%7CFjalla+One">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/fonts.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">

        @yield('header_stylesheet')
    </head>
    <body>
        <div class="preloader">
            <div class="preloader-body">
                <div class="cssload-loader">
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                    <div class="cssload-side"></div>
                </div>
            </div>
        </div>
        <div class="page">
            @include('salon.includes.navigation')
            @yield('content')
            @include('salon.includes.footer')
        </div>

        <div class="snackbars" id="form-output-global"></div>

        <script src="{{ asset('js/core.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>

        @yield('footer_script')
    </body>
</html>