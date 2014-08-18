@extends('layouts.main')

@section('content')
<div class="container">
    <h2>{{ $announcement->title }}</h2>
    <pre style="border: 0; background: transparent; font-family: 'Helvetica'; line-height: 30px; font-size: 18px">{{ $announcement->content }}</pre>
</div>
@stop
