@extends('layouts.admin')

@section('content')

<div class="services">
    <h1>Our Services</h1>

    @foreach ($services as $service)
    <ul>
        <li>
            <a href="{{ URL::to('admin/service', [$service->id]) }}">{{ $service->name }}</a>
        </li>
    </ul>
    @endforeach
</div>

@stop