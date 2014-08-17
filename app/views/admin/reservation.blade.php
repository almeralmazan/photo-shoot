@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <table class="table">
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
                        <td>{{ $reserve->status }}</td>
                        <td>{{ HTML::link('admin/reservation/' . $reserve->id, 'View', ['class' => 'btn btn-info']) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@stop
