<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bilcom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('front.styles')
    @yield('styles')
</head>
@include('front.footer')
@include('front.scripts')
@include('front.popups.thank')
@include('front.popups.connect')
@include('front.popups.map')

<body>
    <div class="wrapper">
        @yield('content')
        @yield('footer')
    </div>
    @yield('thank')
    @yield('map')
    @yield('connect')
</body>
@yield('scripts')
</html>


