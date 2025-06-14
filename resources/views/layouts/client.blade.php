<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @yield('title')

    <link rel="icon" type="image/png" href="{{ asset("assets/images/favicon/favicon-16x16.png") }}" />
    <link rel="stylesheet" href="{{ asset('css/lib/swiper-bundle.min.css') }}" />

    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/lib/bvselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/lib/venobox.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>
    <div class="loader">
        <div class="loader-icon">
            <img src="{{ asset('images/loader.gif') }}" alt="loader" />
        </div>
    </div>
    @include('layouts.body.client_header')
    @yield('content')


    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('js/lib/venobox.min.js') }}"></script>
    <script src="{{ asset('js/lib/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/lib/bvselect.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.syotimer.min.js') }}"></script>
    @yield('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('js/main.js') }}"></script>


    @livewire('wire-elements-modal')

</body>

</html>