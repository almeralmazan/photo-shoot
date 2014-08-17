<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'username'  =>  'admin',
                'password'  =>  Hash::make('admin')
            ],
            [
                'username'  =>  'user',
                'password'  =>  Hash::make('user')
            ]
        ];

        foreach ($users as $data)
        {
            User::create($data);
        }
    }
}