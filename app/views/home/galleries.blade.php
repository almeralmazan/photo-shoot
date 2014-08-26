@extends('layouts.main')

@section('content')
<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Our Gallery</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline text-center">
                    @foreach ($galleries as $gallery)
                    <li>
                        <div class="thumbnails">
                            <img src="http://placehold.it/250x250" alt="">
                            <div class="caption">
                                <h4>{{ $gallery->name }}</h4>
                                <a href="{{ URL::to('gallery-single', [$gallery->id]) }}" class="btn btn-sm btn-link">View All</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@stop
