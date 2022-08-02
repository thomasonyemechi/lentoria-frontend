<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <link href="{{ asset('assets/fonts/feather/feather.css')}}" rel="stylesheet')}}" />


    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css')}}">


    <script src="{{ asset('assets/js/general.js') }}"></script>

    
</head>

<body>

    @include('layouts.instructors_nav')

        @yield('page_content')

    @include('layouts.instructors_footer')

    {{-- Javascripts Here .... --}}
    
    <!-- clipboard -->
    <script src="{{ asset('cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js') }}"></script>


    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js')}}"></script>
</body>

</html>
