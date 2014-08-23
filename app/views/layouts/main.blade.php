<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <!-- Bootstrap -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/animate.css') }}
    {{ HTML::style('css/home-style.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="public">

    @if ( ! Request::is('login'))
        @include('layouts.partials.nav')
    @endif

    @yield('content')

    @if ( ! Request::is('login'))
        @include('layouts.partials.footer')
    @endif

{{ HTML::script('js/jquery-1.11.0.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/picker.js') }}
{{ HTML::script('js/picker.date.js') }}
{{ HTML::script('js/script.js') }}
</body>
</html>