<section class="slider">
    <div id="carousel-banner" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
            <li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-banner" data-slide-to="1"></li>
            <li data-target="#carousel-banner" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="max-height: 500px;">
            <div class="item active">
                {{ HTML::image("images/slider-1.jpg", null, ['class' => 'img-responsive']) }}
            </div>
            <div class="item">
                {{ HTML::image("images/slider-2.jpg", null, ['class' => 'img-responsive']) }}
            </div>
            <div class="item">
                {{ HTML::image("images/slider-1.jpg", null, ['class' => 'img-responsive']) }}
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
            {{ HTML::image("images/prev.png", null, ['width' => '30%']) }}
        </a>
        <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
            {{ HTML::image("images/next.png", null, ['width' => '30%']) }}
        </a>
    </div>
</section>