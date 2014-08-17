@extends('layouts.main')

@section('content')

<div class="services">
    <section class="slider">
        <div id="carousel-banner" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-banner" data-slide-to="1"></li>
                <li data-target="#carousel-banner" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="max-height: 500px;">
                <div class="item active">
                    <img src="{{ URL::to('images/1.jpg') }}" class="img-responsive" style="width: 100%; height: auto;">
                </div>
                <div class="item">
                    <img src="{{ URL::to('images/2.png') }}" class="img-responsive"  style="width: 100%; height: auto;">
                </div>
                <div class="item">
                    <img src="{{ URL::to('images/3.jpg') }}" class="img-responsive"  style="width: 100%; height: auto;">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">
                        Our Services
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnails center-block">
                        <img src="http://placehold.it/250x250" alt="">
                        <div class="caption">
                            <h3>Event Package</h3>
                            <a href="{{ URL::to('event') }}" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnails center-block">
                        <img src="http://placehold.it/250x250" alt="">
                        <div class="caption">
                            <h3>Photo Shoot</h3>
                            <a href="{{ URL::to('photo-shoot') }}" class="btn btn-danger">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnails center-block">
                        <img src="http://placehold.it/250x250" alt="">
                        <div class="caption">
                            <h3>Products</h3>
                            <a href="{{ URL::to('products') }}" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">
                        News and Annoucements
                    </h1>
                    <div id="carousel-news" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner center-block">
                            <div class="item active">
                                <h2 class="text-capitalize">news title one</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, fugiat repellendus ratione, sed maxime odio nihil assumenda accusamus, delectus eveniet accusantium. Officiis aliquid totam maxime illo animi porro consequuntur sed</p>
                                <a href="" class=""><em>read more..</em></a>
                            </div>
                            <div class="item">
                                <h2 class="text-capitalize">news title one</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, fugiat repellendus ratione, sed maxime odio nihil assumenda accusamus, delectus eveniet accusantium. Officiis aliquid totam maxime illo animi porro consequuntur sed</p>
                                <a href="" class=""><em>read more..</em></a>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-news" data-slide-to="1"></li>
                            <li data-target="#carousel-news" data-slide-to="2"></li>
                        </ol>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-news" role="button" data-slide="prev" style="background:transparent;">
                            <img src="{{ URL::to('images/prev.png') }}" alt="" width="60%">
                        </a>
                        <a class="right carousel-control" href="#carousel-news" role="button" data-slide="next" style="background:transparent;">
                            <img src="{{ URL::to('images/next.png') }}" alt="" width="60%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop