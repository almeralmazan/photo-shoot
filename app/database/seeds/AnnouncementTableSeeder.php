<?php

class AnnouncementTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcements')->delete();

        $announcements = [
            [
                'title'         =>  'Welcome to Printshoppe Photography',
                'content'       =>  'Go enjoy over your photos as Printshoppe Photography
brings the fun back to your photo booth experience.
Whether you’re a solo, a duo or with a group of friends,
strike your best pose and get ready for four wacky shots!

Printshoppe Photography is the perfect rental fun machine
for your parties and events: marketing campaigns, corporate
launchings, tradeshows, conventions, club anniversaries,
weddings,  birthdays, debuts, baptisms, reunion party, prom
nights, college fairs and other fun parties and celebrations.
And because we have the fastest printers, we are able to print
more fun photo booth prints for all your events.  Our unlimited
photo booth packages give the best value for any event.  Get your
custom-branded, photo-lab quality photo prints from Printshoppe
Photography Photo Booth in seconds, not minutes.  Fast printers,
more prints and more fun for all!  Enjoy other unique souvenirs
as well: photo magnets, photo bag tags, photo calendars, photo
bookmarks and many more photo novelty items.   Entertain your
guests and clients while having these personalized, on-the-spot,
fun photo booth souvenirs!',

                'content_url'   =>  'welcome-to-printshoppe-photography',
                'date'          =>  '2014-08-17'
            ],
            [
                'title'         =>  'Lorem ipsum',
                'content'       =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'content_url'   =>  'lorem-ipsum',
                'date'          =>  '2014-08-22'
            ]
        ];

        foreach ($announcements as $data)
        {
            Announcement::create($data);
        }
    }
}