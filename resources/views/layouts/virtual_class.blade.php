<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link rel="icon" href="{{ asset('assets/chat_assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/plugins/intltelinput/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/plugins/intltelinput/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/plugins/mcustomscroll/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/plugins/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/plugins/fancybox/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/chat_assets/css/app.css') }}">
    <script src="{{ asset('assets/chat_assets/js/jquery-3.6.0.min.js') }}"></script>
</head>

<body>
    @include('layouts.alert_top')
    @yield('page_content')

    <script src="{{ asset('assets/chat_assets/plugins/intltelinput/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('assets/chat_assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/chat_assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/chat_assets/plugins/mcustomscroll/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('assets/chat_assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/chat_assets/plugins/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/chat_assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/chat_assets/plugins/fancybox/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/chat_assets/js/script.js') }}"></script>
</body>

</html>
