@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">

        <h3 class="page-header">Gallery Images</h3>

        {{ Form::open(['url' => 'admin/add/gallery-image', 'files' => true, 'class' => 'form-inline']) }}

        <div class="form-group">
            {{ Form::file('image_name', ['class' => 'form-control']) }}

            {{ Form::hidden('gallery_id', $gallery_id) }}

            <button type="submit" class="form-control btn btn-success"/>
            <span class="glyphicon glyphicon-plus"></span> Add Image </button>
        </div>
        {{ Form::close() }}

        <br/>

        <table class="table">
            <thead>
            <tr>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($galleryImages as $gallery)
            <tr>
                <td>{{ $gallery->image }}</td>
                <td>{{ HTML::link('admin/delete/gallery-image/' . $gallery->id, 'delete', ['class' => 'btn btn-danger'])
                    }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@stop
