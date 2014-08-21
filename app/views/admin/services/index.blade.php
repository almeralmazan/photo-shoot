@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">Services</h3>

        {{ Form::open(['url' => 'admin/add/service', 'class' => 'form-inline', 'files' => true]) }}

        <div class="form-group">
            {{ Form::text('service_name', null, ['class' => 'form-control', 'placeholder' => 'Service Name', 'required',
            'autofocus']) }}

            {{ Form::file('service_image', ['class' => 'form-control']) }}

            <button type="submit" class="form-control btn btn-success"/>
            <span class="glyphicon glyphicon-plus"></span> Add Service</button>
        </div>
        {{ Form::close() }}

        <br/>

        <table class="table">
            <thead>
            <tr>
                <th>Service Name</th>
                <th>Action</th>
                <th>Delete?</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($services as $service)
            <tr>
                <td>
                    {{ $service->name }}
                </td>
                <td>
                    <a href="{{ URL::to('admin/service-package', [$service->id]) }}" class="btn btn-default">
                       <i class="fa fa-eye"></i> View Details
                    </a>
                </td>
                <td>
                    <a href="{{ URL::to('admin/delete/service-package', [$service->id]) }}" type="button" class="btn btn-danger btn-circle">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop