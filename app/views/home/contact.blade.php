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

                {{ Form::open(['url' => 'save-inquiry', 'class' => 'form-horizontal']) }}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel"
                               name="contact_number"
                               class="form-control"
                               placeholder="Contact # (format: 09XXXXXXXXX)"
                               pattern="^[(09)\d]{11}$"
                               title="Format: 09159115188 (11 numbers)"
                               required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your message"></textarea>
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
