<?php

class ReservationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('reservations')->delete();

        $reservations = [
            [
                'name'              =>  'John Doe',
                'email'             =>  'johndoe@gmail.com',
                'contact_number'    =>  '09236923433',
                'package_id'        =>  1,
                'date'              =>  '2014-08-09',
                'message'           =>  'A simple message',
                'status_id'         =>  1
            ],
            [
                'name'              =>  'Foo Bar',
                'email'             =>  'foobar@gmail.com',
                'contact_number'    =>  '09186923518',
                'package_id'        =>  2,
                'date'              =>  '2014-08-19',
                'message'           =>  'A simple message that is too much!',
                'status_id'         =>  2
            ],
            [
                'name'              =>  'Bar Baz',
                'email'             =>  'barbaz@gmail.com',
                'contact_number'    =>  '09159115188',
                'package_id'        =>  3,
                'date'              =>  '2014-08-01',
                'message'           =>  'Lorem ipsum dolor',
                'status_id'         =>  4
            ]
        ];

        foreach ($reservations as $data)
        {
            Reservation::create($data);
        }
    }
}