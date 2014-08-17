@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        {{ Form::open(['url' => 'admin/update/reservation/' . $customer->id]) }}
            <h2>Customer Reservation</h2>

            <p>
                <label for="customer-name">Customer Name:</label> {{ $customer->name }}
            </p>
            <p>
                <label for="customer-name">Email: </label> {{ $customer->email }}
            </p>
            <p>
                <label for="customer-name">Contact #: </label> {{ $customer->contact_number }}
            </p>
            <p>
                <label for="customer-name">Package to reserve: </label> {{ $package->name }}
            </p>
            <p>
                <label for="customer-name">Reservation Date: </label> {{ $customer->date }}
            </p>
            <p>
                <label for="customer-name">Message: </label> {{ $customer->message }}
            </p>
            <p>
                <label for="customer-name">Status: </label>
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
            {{ Form::submit('Update', ['class' => 'btn btn-info']) }}

        {{ Form::close() }}
        </div>
    </div>
</div>
@stop
