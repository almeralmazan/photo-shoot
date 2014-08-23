<?php

function set_active($path, $class = 'active')
{
    return Request::is($path) ? $class : '';
}


function select_status($statusId)
{
    $status = DB::table('reservations')
                ->select('status.name')
                ->join('status', 'status.id', '=', 'reservations.status_id')
                ->where('reservations.status_id', $statusId)
                ->first();

    return $status;
}

