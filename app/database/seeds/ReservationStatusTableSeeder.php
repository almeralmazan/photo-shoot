<?php

class ReservationStatusTableSeeder extends Seeder {

    public function run()
    {
        DB::table('reservation_status')->delete();

        $statuses = [
            [ 'name'  => 'Pending' ],
            [ 'name'  => 'Reserved' ],
            [ 'name'  => 'Cancelled' ],
            [ 'name'  => 'Deposited-Confirmed'],
            [ 'name'  => 'Deposited-Waiting for confirmation']
        ];

        foreach ($statuses as $status)
        {
            ReservationStatus::create($status);
        }
    }
}