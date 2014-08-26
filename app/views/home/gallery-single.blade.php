@extends('layouts.main')

@section('content')
<section class="gallery-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 margin-top-sm">
                <a href="{{ URL::to('galleries') }}" class="btn btn-link">
                    <img src="{{ URL::to('images/back.png') }}" alt="">
                    back to gallery
                </a>
            </div>
            <div class="col-md-12">
                <h1 class="text-center">Our Gallery</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline text-center">
                    @foreach ($galleryImages as $gallery)
                    <li>
                        <div class="thumbnails">
                            <a href="{{ URL::to('images/uploads/galleries/gallery_images', [$gallery->image]) }}" data-lightbox="gallery" data-title="{{ $gallery->image }}">
                                <img src="{{ URL::to('images/uploads/galleries/gallery_images', [$gallery->image]) }}" alt="">
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@stop