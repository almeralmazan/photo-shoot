@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h3 class="page-header">{{ $title }}</h3>

        <!--            {{ Form::open(['url' => 'admin/add/service', 'class' => 'form-inline', 'files' => true]) }}-->
        <!---->
        <!--            <div class="form-group">-->
        <!--                {{ Form::text('service_package_name', null, ['class' => 'form-control', 'placeholder' => 'Service Name', 'required', 'autofocus']) }}-->
        <!---->
        <!--                {{ Form::file('service_image', ['class' => 'form-control']) }}-->
        <!---->
        <!--                <button type="submit" class="form-control btn btn-success"/>-->
        <!--                <span class="glyphicon glyphicon-plus"></span> Add Service Package</button>-->
        <!--            </div>-->
        <!--            {{ Form::close() }}-->

        <br/>

        <table class="table">
            <thead>
            <tr>
                <th>Packages Name</th>
                <th>Action</th>
                <th>Delete?</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($servicePackages as $package)
            <tr>
                <td>{{ $package->name }}</td>
                <td>{{ HTML::link('admin/service-package/' . $package->id, 'View Details', ['class' => 'btn btn-info'])
                    }}
                </td>
                <td>{{ HTML::link('admin/delete/service-package/' . $package->id, 'delete', ['class' => 'btn
                    btn-danger']) }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop