<?php

class InquiryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('inquiries')->delete();

        $inquiries = [
            [
                'name'      =>  'Almer Almazan',
                'email'     =>  'almerboy@gmail.com',
                'message'   =>  'The big brown fox jumps over the lazy dog'
            ],
            [
                'name'      =>  'John Doe',
                'email'     =>  'johndoe@gmail.com',
                'message'   =>  'Foo bar baz'
            ]
        ];

        foreach ($inquiries as $data)
        {
            Inquiry::create($data);
        }
    }
}