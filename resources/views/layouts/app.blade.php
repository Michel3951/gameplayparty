<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('icon.png') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    @stack('head')
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
@include('partials.header')
<div id="app">
    <main class="py-4">
        @foreach (['warning', 'danger', 'success', 'info'] as $status)
            @if (Session::has($status))
                <div class="container">
                    <div class="alert alert-{{ $status }} mb-3">
                        {!! Session::get($status); !!}
                    </div>
                </div>
            @endif
        @endforeach
        @yield('content')
    </main>
    @include('partials.footer')
</div>
<script src="{{ asset('libs/jquery.js') }}"></script>
<script src="{{ asset('libs/popper.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
@stack('js')
</body>
</html>