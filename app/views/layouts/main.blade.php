<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/lightbox.css') }}
    {{ HTML::style('css/styles.css') }}
</head>
<body id="public">

    @include('layouts.partials.nav')

    @yield('content')

    @include('layouts.partials.footer')

{{ HTML::script('js/jquery-1.10.2.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/lightbox-2.6.min.js') }}
{{ HTML::script('js/jquery.img-preview.js') }}
{{ HTML::script('js/script.js') }}
</body>
</html>