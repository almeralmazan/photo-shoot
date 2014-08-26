<?php

class InquiryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('inquiries')->delete();

        $inquiries = [
            [
                'name'              =>  'Almer Almazan',
                'email'             =>  'almerboy@gmail.com',
                'contact_number'    =>  '09159115188',
                'message'           =>  'The big brown fox jumps over the lazy dog'
            ],
            [
                'name'              =>  'John Doe',
                'email'             =>  'johndoe@gmail.com',
                'contact_number'    =>  '09236923431',
                'message'           =>  'Foo bar baz'
            ]
        ];

        foreach ($inquiries as $data)
        {
            Inquiry::create($data);
        }
    }
}