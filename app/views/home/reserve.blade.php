@extends('layouts.main')

@section('content')
<section class="reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">title here</h1>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <img src="http://placehold.it/250x250" alt="" class="img-responsive center-block">
                <p class="text-center h4">Event Package 1</p>
                <pre class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, reprehenderit, ullam. Voluptas magni hic consectetur dolorum ratione rem distinctio fuga perferendis, ipsa velit. Amet, laboriosam, odit sint nobis et assumenda.</pre>
                <p class="text-center">P2,500</p>
            </div>
        </div>
        <div class="row margin-top-sm">
            <div class="col-md-6 col-md-offset-3">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact #">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control datepicker" placeholder="Reservation date">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Your message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@stop