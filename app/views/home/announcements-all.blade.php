@extends('layouts.main')

@section('content')
<section class="news-annoucements">
    <div class="container">
        <div class="row">
            <div class="col-md-12 margin-top-sm">
                <a href="{{ URL::to('/') }}" class="btn btn-link">
                    <img class="back" src="{{ URL::to('images/back.png') }}" alt="">
                    back to home page
                </a>
            </div>
            <div class="col-md-12">
                <h1 class="text-center">
                    News and Annoucements
                </h1>
            </div>
            <div class="col-md-12 margin-top-sm news-inner">

                @foreach ($announcements as $news)
                <h3>{{ $news->title }}</h3>
                <p>{{ Str::limit($news->content, 100, '...') }}</p>
                <p><em>july 25, 2014</em></p>
                <a href="{{ URL::to('announcement-single', [$news->id]) }}" class="btn btn-link btn-default">Read more</a>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>
@stop