@extends('layouts.main')

@section('content')
<section class="services-offered">
    <div class="container">
        <div class="row">
            @foreach ($packages as $package)
            <div class="col-md-8">
                <h4>{{ $package->name }}</h4>
                <p>&#x20b1; {{ $package->price }}</p>
                <p>{{ $package->details }}</p>
                <a href="{{ URL::to('reserve', [$package->id]) }}" class="btn btn-primary">Reserve</a>
            </div>
            <div class="col-md-4 img-container">
                <img src="http://placehold.it/250x250" alt="" class="center-block">
            </div>
            @endforeach
        </div>
    </div>
</section>
@stop
