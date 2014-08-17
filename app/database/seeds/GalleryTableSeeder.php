<?php

class GalleryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('galleries')->delete();

        $galleries = [
            [
                'name'  =>  'T-Shirts'
            ],
            [
                'name'  =>  'Products'
            ]
        ];

        foreach ($galleries as $data)
        {
            Gallery::create($data);
        }
    }
}