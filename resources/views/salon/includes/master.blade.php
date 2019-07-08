<!DOCTYPE html>
<html class="wide wow-animation" lang="ru">
    <head>
        @yield('header_meta')

        <title>Medlight</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <!-- Stylesheets-->
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
            @yield('content')
        </div>
        <div class="snackbars" id="form-output-global"></div>

        <script src="{{ asset('js/core.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>

        @yield('footer_script')
    </body>
</html>