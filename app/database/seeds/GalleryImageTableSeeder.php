<?php

class GalleryImageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('gallery_images')->delete();

        $galleryImages = [
            [
                'image'         =>  'giordano.jpg',
                'gallery_id'    =>  1
            ],
            [
                'image'         =>  'bench.jpg',
                'gallery_id'    =>  1
            ],
            [
                'image'         =>  'tumbler.jpg',
                'gallery_id'    =>  2
            ],
            [
                'image'         =>  'id-lace.jpg',
                'gallery_id'    =>  2
            ]
        ];

        foreach ($galleryImages as $data)
        {
            GalleryImage::create($data);
        }
    }
}