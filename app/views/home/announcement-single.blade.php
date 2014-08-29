@extends('layouts.main')

@section('content')
<section class="news-annoucements">
    <div class="container">
        <div class="row">
            <div class="col-md-12 margin-top-sm">
                <a href="{{ URL::to('announcements') }}" class="btn btn-link">
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
                <h3>{{ $announcement->title }}</h3>
                <p>{{ $announcement->content }}</p>
                <p><em>{{ $announcement->date }}</em></p>
            </div>
        </div>
    </div>
</section>
@stop