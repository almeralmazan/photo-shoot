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
                'name'      =>  'Event Package',
                'image'     =>  'event.jpg'
            ],
            [
                'name'      =>  'Photo Shoot Package',
                'image'     =>  'photo-shoot.jpg'
            ],
            [
                'name'      =>  'Products Package',
                'image'     =>  'products.jpg'
            ]
        ];

        foreach ($services as $data)
        {
            Service::create($data);
        }

    }
}