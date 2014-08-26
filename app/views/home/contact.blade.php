@extends('layouts.main')

@section('content')
<section class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">
                    Keep in touch
                </h1>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <ul class="list-unstyled">
                    <li><span class="glyphicon glyphicon-map-marker"></span> Address: 2ndfloor SM City Marilao</li>
                    <li><span class="glyphicon glyphicon-earphone"></span> Contact no: (002)-678-123</li>
                    <li><span class="glyphicon glyphicon-envelope"></span> Email: printshoppe@gmail.com</li>
                </ul>
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
