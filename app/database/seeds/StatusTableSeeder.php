<?php

class StatusTableSeeder extends Seeder {

    public function run()
    {
        DB::table('status')->delete();

        $statuses = [
            [ 'name'  => 'Pending' ],
            [ 'name'  => 'Reserved' ],
            [ 'name'  => 'Cancelled' ],
            [ 'name'  => 'Deposited-Confirmed'],
            [ 'name'  => 'Deposited-Waiting for confirmation']
        ];

        foreach ($statuses as $status)
        {
            Status::create($status);
        }
    }
}