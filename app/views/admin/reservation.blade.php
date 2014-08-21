@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <h3 class="page-header">Reservation</h3>

            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Date Submitted</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reserve)
                <tr>
                    <td>{{ $reserve->name }}</td>
                    <td>{{ date('F j, Y', strtotime($reserve->date)) }}</td>
                    <?php $status = select_status($reserve->status_id) ?>
                    <td>{{ $status->name }}</td>
                    <td>{{ HTML::link('admin/reservation/' . $reserve->id, 'View', ['class' => 'btn btn-info']) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
