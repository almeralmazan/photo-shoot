<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style("css/bootstrap-3.2-original.min.css") }}

    <!-- MetisMenu CSS -->
    {{ HTML::style("css/plugins/metisMenu/metisMenu.min.css") }}

    <!-- Custom CSS -->
    {{ HTML::style("css/sb-admin-2.css") }}

    <!-- My Custom CSS-->
    {{ HTML::style("css/style.css") }}

    <!-- Custom Fonts -->
    {{ HTML::style("font-awesome-4.1.0/css/font-awesome.min.css") }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @if ( ! Request::is('login') )
        @include('layouts.partials.admin-nav')
    @endif

    @yield('content')


<!-- jQuery Version 1.11.0 -->
{{ HTML::script("js/jquery-1.11.0.js") }}

<!-- Bootstrap Core JavaScript -->
{{ HTML::script("js/bootstrap.min.js") }}

<!-- Metis Menu Plugin JavaScript -->
{{ HTML::script("js/plugins/metisMenu/metisMenu.min.js") }}

<!-- Custom Theme JavaScript -->
{{ HTML::script("js/sb-admin-2.js") }}

<!-- Custom Scripts -->
{{ HTML::script("js/script.js") }}
</body>
</html>