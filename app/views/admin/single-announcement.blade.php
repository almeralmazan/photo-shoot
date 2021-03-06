@extends('layouts.admin')

@section('content')
{{ Form::open(['url' => 'admin/update/announcement/1']) }}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $announcement->title }}" class="form-control" id="title"
               placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" rows="10">{{ $announcement->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
{{ Form::close() }}
@stop