<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/lightbox.css') }}
    {{ HTML::style('css/style.css') }}
</head>
<body>

@include('layouts.partials.admin-nav')

@yield('content')


{{ HTML::script('js/jquery-1.10.2.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/script.js') }}
</body>
</html>