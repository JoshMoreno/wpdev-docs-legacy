<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/css/main.css">
        <!--use just the brands and solid styles-->
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js"></script>
        {{--<script src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js"></script>--}}
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"></script>
    </head>
    <body>
        @include('_partials.header')
        @yield('body')
        @include('_partials.footer')
    </body>
</html>
