<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.header-links')

    @yield('head')
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    {{-- <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div> --}}
    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('inc.header')

        @yield('content')

        @include('inc.footer')
    </div>
    @include('inc.footer-links')

    @yield('script')
</body>

</html>
