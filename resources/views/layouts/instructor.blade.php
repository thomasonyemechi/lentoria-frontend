<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>
    <script src="{{asset('assets/alpine.js/alpine.js')}}" defer></script>
    <link rel="icon" href="{{ asset('assets/images/logo2.png') }}"/>
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet"/>
    <link href="{{asset('assets/libs/videojs/videojs.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/libs/animate.min.css')}}"/>
    <link href="{{asset('assets/libs/videojs/fantasy.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/libs/dragula/dist/dragula.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/libs/auxiliary-rater/lib/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/tippy.js/dist/tippy.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css') }}">
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/prismjs/prism.css') }}">
    <link href="{{ asset('assets/libs/bootstrap_file_input/css/fileinput.min.css') }}" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/libs/bootstrap_file_input/explorer/theme.min.css') }}" media="all" rel="stylesheet"
          type="text/css"/>
    <script src="{{asset('assets/libs/ckeditor/ckeditor.js')}}"></script>
    <style>
        @font-face {
            font-family: Laravolt;
            src: url({{ asset('fonts/laravolt.woff')}});
        }
    </style>
    <style>
        .animated-background {
            animation-duration: 1.25s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-name: placeHolderShimmer;
            animation-timing-function: linear;
            background: #F6F6F6;
            background: linear-gradient(to right, #F6F6F6 8%, #F0F0F0 18%, #F6F6F6 33%);
            background-size: 800px 104px;
            height: 96px;
            position: relative;
        }

        .text {
            margin-left: 20px
        }

        .text-line {
            height: 20px;
            width: 100px;
            @ . animated-background;
        }

        .vstack {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-item-align: stretch;
            align-self: stretch;
        }

        .gap-2 {
            gap: 0.5rem !important;
        }

        .no-scroll::-webkit-scrollbar {
            display: none;
        }

        .no-scroll {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
    </style>
    <script src="{{ asset('assets/js/general.js') }}"></script>

</head>

<body class="no-scroll">

<div class="littleAlert"></div>
@include('layouts.alert_top')
@includeUnless(request()->routeIs('checkout_success'),
    'layouts.nav',
    ['status' => 'complete'])

@yield('page_content')

@include('layouts.footer')

{{-- Javascripts Here .... --}}
<script>
    window.HELP_IMPROVE_VIDEOJS = false;
</script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{asset('assets/libs/videojs/video.min.js')}}"></script>
<script src="{{ asset('assets/libs/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('assets/libs/inputmask/dist/jquery.inputmask.min.js') }}"></script>
<script src="{{asset('assets/libs/typed.js/lib/typed.min.js')}}"></script>
<script src="{{ asset('assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('assets/libs/dragula/dist/dragula.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap_file_input/js/plugins/buffer.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap_file_input/js/plugins/filetype.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap_file_input/js/fileinput.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap_file_input/bs5/theme.min.js') }}"></script>
<script src="{{ asset('assets/libs/bs-stepper/dist/js/bs-stepper.min.js') }}"></script>
<script src="{{ asset('assets/libs/jQuery.print/jQuery.print.js') }}"></script>
<script src="{{ asset('assets/libs/auxiliary-rater/index.js') }}"></script>
<script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
<script src="{{ asset('assets/cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.min.js') }}"></script>
<script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
</body>

</html>
