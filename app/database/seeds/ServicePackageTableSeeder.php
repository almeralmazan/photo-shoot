<?php

class ServicePackageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('service_packages')->delete();

        $servicePackages = [
            [
                'service_id'    =>  1,
                'name'          =>  'Party Package No. 1',
                'image'         =>  'event-1.jpg',
                'price'         =>  1000.00,
                'status'        =>  'Available',
                'details'       =>  'Consist of 2hours photocoverage by 1 photographer with Unlimited shots Stored in CD/DVD and get free 50pcs personalized souvenir bag tags'
            ],
            [
                'service_id'    =>  1,
                'name'          =>  'Party Package No. 2',
                'image'         =>  'event-2.jpg',
                'price'         =>  2000.00,
                'status'        =>  'Available',
                'details'       =>  'Consist of 4hours photocoverage by 1 photographer with Unlimited shots Stored in CD/DVD and get free 50pcs personalized souvenir bag tags'
            ],
            [
                'service_id'    =>  2,
                'name'          =>  'Indoor Photo Shoot',
                'image'         =>  'indoor.jpg',
                'price'         =>  1500.00,
                'status'        =>  'Available',
                'details'       =>  "1 hour session<br />
Unlimited Lab Quality 4R prints<br />
Photobooth with audio assistance and live view<br />
Use of Canon DSLR Camera<br />
Use of fun props<br />
Use of studio light<br />
Softcopy of pictures in CD/DVD<br />
Personalized photo layout"
            ],
            [
                'service_id'    =>  2,
                'name'          =>  'Outdoor Photo Shoot',
                'image'         =>  'outdoor.jpg',
                'price'         =>  2500.00,
                'status'        =>  'Unavailable',
                'details'       =>  '3 hours session<br />
Bring your props and clothes<br />
edited selected pictures will be given in soft copy'
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