@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        {{ Form::open(['url' => 'admin/update/reservation/', 'class' => 'form-horizontal']) }}
        <h3 class="page-header">Customer Reservation</h3>

        <div class="col-md-5">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $package->name }}">
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $package->price }}">
            </div>
        </div>

        <div class="form-group">
            <label for="status" class="col-sm-2 control-label">Status</label>
            <div class="col-sm-10">
                {{ Form::select('status',
                    [
                        'Available'     => 'Available',
                        'Unavailable'   => 'Unavailable',
                    ],
                    $package->status, ['class' => 'form-control'])
                }}
            </div>
        </div>

        <div class="form-group">
            <label for="details" class="col-sm-2 control-label">Details</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $package->details }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <p class="form-control-static">
                    {{ Form::submit('Update', ['class' => 'btn btn-info']) }}
                </p>
            </div>
        </div>
        </div>

        {{ Form::close() }}
    </div>
</div>
@stop
