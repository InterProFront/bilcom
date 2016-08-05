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
@include('front.popups.connect_tarif')
<script>
    window.ChatraSetup = {
        colors: {
            buttonText: '#f0f0f0',
            buttonBg: '#379d47'
        },
        startHidden: true
    };
    ChatraID = 'tEWfLSXYnvCFYTmz4';
    (function(d, w, c) {
        var n = d.getElementsByTagName('script')[0],
                s = d.createElement('script');
        w[c] = w[c] || function() {
                    (w[c].q = w[c].q || []).push(arguments);
                };
        s.async = true;
        s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
                + '//call.chatra.io/chatra.js';
        n.parentNode.insertBefore(s, n);
    })(document, window, 'Chatra');


</script>
<body>
    <div class="wrapper">
        @yield('content')
        @yield('footer')
    </div>
    @yield('thank')
    @yield('map')
    @yield('connect')
    @yield('connect_tarif')
</body>
@yield('scripts')
</html>


