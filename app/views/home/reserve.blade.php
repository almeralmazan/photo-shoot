@extends('layouts.main')

@section('content')
<section class="services-offered">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>{{ $package->name }}</h4>
                <p>&#x20b1; {{ $package->price }}</p>
                <p>{{ $package->details }}</p>
            </div>
            <div class="col-md-4 img-container">
                <img src="http://placehold.it/250x250" alt="" class="center-block">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Your name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="inputPassword3" placeholder="Your email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Contact #</label>
                        <div class="col-sm-6">
                            <input type="tex" class="form-control" id="inputEmail3" placeholder="Your contact #">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-6">
                            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop