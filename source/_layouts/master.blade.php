<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/main.css">
    <!--use just the brands and solid styles-->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"></script>
    @hasSection('page_title')
        <title>@yield('page_title') | WPDev</title>
    @else
        <title>WPDev</title>
    @endif
</head>
<body class="d-flex flex-column {{$body_class ?? ''}}">
    @include('_partials.header')
    @yield('body')
    @include('_partials.footer')

    <div class="off-canvas-menu">
        <nav class="mobile-nav p-3 p-sm-4">
            @include('_partials.docsNav')
        </nav>
    </div>

    <div class="fixed-mobile-nav d-lg-none">
        <div class="fixed-mobile-nav__circle-overlay"></div>
        @include('_partials.menuIcon')
    </div>
    <script src="/assets/js/main.js"></script>
</body>
</html>
