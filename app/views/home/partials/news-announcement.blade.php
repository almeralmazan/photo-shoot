<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">
                    News and Annoucements
                </h1>
            </div>
        </div>
        <div class="row">

            @foreach ($announcements as $news)
            <div class="col-sm-4 col-md-4">
                <h3>{{ $news->title }}</h3>
                <p>{{ Str::limit($news->content, 200, '...') }}</p>
                <button class="btn btn-link">Read more</button>
            </div>
            @endforeach
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-right"><a href="">See all</a></p>
            </div>
        </div>
    </div>
</section>