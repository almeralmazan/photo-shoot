@extends('layouts.main')

@section('content')
<section class="services-offered">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">{{ $title }}</h1>
            </div>
        </div>

        <div class="row">

            @foreach ($packages as $package)
            <div class="col-sm-4 col-md-4">
                <div class="thumbnails center-block">
                    <img src="{{ URL::to('images/uploads/services/packages', [$package->image]) }}" alt="" class="center-block">
                    <div class="caption">
                        <h4>{{ $package->name }}</h4>
                        <a href="{{ URL::to('reserve', [$package->id]) }}" class="btn btn-sm btn-link">Reserve</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@stop
