<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/style.css') }}
</head>
<body id="public">

    @if ( ! Request::is('login'))
        @include('layouts.partials.nav')
    @endif

    @yield('content')

    @if ( ! Request::is('login'))
        @include('layouts.partials.footer')
    @endif

{{ HTML::script('js/jquery-1.10.2.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/lightbox-2.6.min.js') }}
{{ HTML::script('js/jquery.img-preview.js') }}
{{ HTML::script('js/script.js') }}
</body>
</html>