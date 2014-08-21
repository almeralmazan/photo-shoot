@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        {{ Form::open(['url' => 'admin/update/reservation/' . $customer->id, 'class' => 'form-horizontal']) }}
        <h3 class="page-header">Customer Reservation</h3>

        <div class="form-group">
            <label class="col-sm-2 control-label">Customer Name</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $customer->name }}</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $customer->email }}</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Contact #</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $customer->contact_number }}</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Package Reserved</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $package->name }}</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Reservation Date:</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ date('F j, Y', strtotime($customer->date)) }}</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $customer->message }}</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Status</label>
            <div class="col-sm-4">
                <p>
                    {{ Form::select('status',
                        [
                        '1' => 'Pending',
                        '2' => 'Reserved',
                        '3' => 'Cancelled',
                        '4' => 'Deposited-Confirmed',
                        '5' => 'Deposited-Waiting for confirmation'
                        ],
                        $customer->status_id, ['class' => 'form-control'])
                    }}
                </p>
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

        {{ Form::close() }}
    </div>
</div>
@stop
