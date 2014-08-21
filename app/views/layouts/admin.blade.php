<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/style.css') }}
</head>
<body>

@include('layouts.partials.admin-nav')

@yield('content')



<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

<!-- Custom Scripts -->
<script src="js/script.js"></script>


</body>
</html>