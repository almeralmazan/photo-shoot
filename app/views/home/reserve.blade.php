@extends('layouts.main')

@section('content')
<section class="reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">{{ $package->name }}</h1>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <img src="{{ URL::to('images/uploads/services/packages', [$package->image]) }}" alt="" class="img-responsive center-block">
                <p class="text-center h4">{{ $package->name }}</p>
                <pre class="text-center">{{ $package->details }}</pre>
                <p class="text-center">P{{ $package->price }}</p>
            </div>
        </div>
        <div class="row margin-top-sm">
            <div class="col-md-6 col-md-offset-3">

                {{ Form::open(['url' => 'reserve-package', 'class' => 'form-horizontal']) }}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact_number" class="form-control" placeholder="Contact #" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="date" class="form-control datepicker" placeholder="Reservation date" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Your message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            Submit
                        </button>
                    </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</section>

@stop