<?php

class ServicePackageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('service_packages')->delete();

        $servicePackages = [
            [
                'service_id'    =>  1,
                'name'          =>  'Party Package No. 1',
                'image'         =>  'event-package-1.jpg',
                'price'         =>  1000.00,
                'status'        =>  'Available',
                'details'       =>  'Simple message details'
            ],
            [
                'service_id'    =>  1,
                'name'          =>  'Party Package No. 2',
                'image'         =>  'event-package-2.jpg',
                'price'         =>  2000.00,
                'status'        =>  'Available',
                'details'       =>  'Simple message details'
            ],
            [
                'service_id'    =>  2,
                'name'          =>  'Indoor Photo Shoot',
                'image'         =>  'photo-shoot-1.jpg',
                'price'         =>  1500.00,
                'status'        =>  'Available',
                'details'       =>  'Simple message details'
            ],
            [
                'service_id'    =>  2,
                'name'          =>  'Outdoor Photo Shoot',
                'image'         =>  'photo-shoot-2.jpg',
                'price'         =>  2500.00,
                'status'        =>  'Unavailable',
                'details'       =>  'Simple message details'
            ],
            [
                'service_id'    =>  3,
                'name'          =>  'Product Package 1',
                'image'         =>  'product-1.jpg',
                'price'         =>  2000.00,
                'status'        =>  'Unavailable',
                'details'       =>  'Simple message details'
            ],
            [
                'service_id'    =>  3,
                'name'          =>  'Product Package 2',
                'image'         =>  'product-2.jpg',
                'price'         =>  3000.00,
                'status'        =>  'Available',
                'details'       =>  'Simple message details'
            ],
        ];

        foreach ($servicePackages as $data)
        {
            ServicePackage::create($data);
        }
    }
}