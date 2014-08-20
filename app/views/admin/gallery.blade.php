@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h3>Gallery</h3>

            {{ Form::open(['url' => 'admin/add/gallery-category', 'class' => 'form-inline']) }}

            <div class="form-group">
                {{ Form::text('gallery_name', null, ['class' => 'form-control', 'placeholder' => 'Gallery Name', 'required' => true]) }}

                <button type="submit" class="form-control btn btn-success"/>
                    <span class="glyphicon glyphicon-plus"></span> Add Gallery </button>
            </div>
            {{ Form::close() }}

            <br/>

            <table class="table">
                <thead>
                <tr>
                    <th>Gallery Category Name</th>
                    <th>Action</th>
                    <th>Delete?</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->name }}</td>
                    <td>{{ HTML::link('admin/gallery/' . $gallery->id, 'See Images', ['class' => 'btn btn-info']) }}</td>
                    <td>{{ HTML::link('admin/delete/gallery/' . $gallery->id, 'delete', ['class' => 'btn btn-danger']) }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@stop
