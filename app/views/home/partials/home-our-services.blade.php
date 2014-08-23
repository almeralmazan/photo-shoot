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
            @foreach ($services as $service)
            <div class="col-sm-4 col-md-4">
                <div class="thumbnails center-block animated rollIn">
                    <img src="http://placehold.it/250x250" alt="">
                    <div class="caption">
                        <h3>{{ $service->name }}</h3>
                        <a href="{{ URL::to('services', [$service->id]) }}">
                            <span class="glyphicon glyphicon-zoom-in"></span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>