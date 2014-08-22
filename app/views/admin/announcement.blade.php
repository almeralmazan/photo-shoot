@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">

        <h3 class="page-header">Announcements</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Announcement Title</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($announcements as $announcement)
                <tr>
                    <td>
                        <a href="{{ URL::to('admin/single-announcement', [$announcement->id]) }}">{{ $announcement->title }}</a>
                    </td>
                    <td>
                        {{ HTML::link('admin/delete/announcement/' . $announcement->id, 'delete', ['class' => 'btn btn-danger']) }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@stop



