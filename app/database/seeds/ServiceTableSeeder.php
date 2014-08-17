<?php

class ServiceTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();

        $services = [
            [
                'name'  =>  'Event Package'
            ],
            [
                'name'  =>  'Photo Shoot Package'
            ],
            [
                'name'  =>  'Products Package'
            ]
        ];

        foreach ($services as $data)
        {
            Service::create($data);
        }

    }
}