@extends('layouts.main')

@section('content')
<section class="gallery-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 margin-top-sm">
                <a href="gallery.html" class="btn btn-link">
                    <img src="img/back.png" alt="">
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
                    <li>
                        <div class="thumbnails">
                            <a href="http://placehold.it/250x250" data-lightbox="gallery" data-title="My caption">
                                <img src="http://placehold.it/250x250" alt="">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnails">
                            <a href="http://placehold.it/250x250" data-lightbox="gallery" data-title="My caption">
                                <img src="http://placehold.it/250x250" alt="">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnails">
                            <a href="http://placehold.it/250x250" data-lightbox="gallery" data-title="My caption">
                                <img src="http://placehold.it/250x250" alt="">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnails">
                            <a href="http://placehold.it/250x250" data-lightbox="gallery" data-title="My caption">
                                <img src="http://placehold.it/250x250" alt="">
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="thumbnails">
                            <a href="http://placehold.it/250x250" data-lightbox="gallery" data-title="My caption">
                                <img src="http://placehold.it/250x250" alt="">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@stop