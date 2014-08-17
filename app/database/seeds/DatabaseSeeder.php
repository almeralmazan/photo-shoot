<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
        $this->call('AnnouncementTableSeeder');
        $this->call('ServiceTableSeeder');
        $this->call('InquiryTableSeeder');
        $this->call('GalleryTableSeeder');
        $this->call('ReservationTableSeeder');
	}

}
