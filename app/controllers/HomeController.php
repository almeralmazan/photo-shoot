<?php

class HomeController extends BaseController {

    public function index()
    {
        $title = 'Home Page';
        $services = Service::all();
        $announcements = Announcement::all();
        return View::make('home.index', compact('title', 'services', 'announcements'));
    }

    public function service($serviceId)
    {
        $packageName = DB::table('services')->select('name')->where('id', $serviceId)->first();
        $title = $packageName->name;
        $packages = DB::table('service_packages')
                                ->where('service_id', $serviceId)
                                ->get();
        return View::make('home.service', compact('title', 'packages'));
    }

    public function event()
    {
        $title = 'Event Package';
        $packages = DB::table('service_packages')
                        ->where('service_id', 1)
                        ->get();

        return View::make('home.service', compact('title', 'packages'));
    }

    public function photoShoot()
    {
        $title = 'Photo Shoot';
        $packages = DB::table('service_packages')
                        ->where('service_id', 2)
                        ->get();

        return View::make('home.service', compact('title', 'packages'));
    }

    public function products()
    {
        $title = 'Products';
        $packages = DB::table('service_packages')
                        ->where('service_id', 3)
                        ->get();

        return View::make('home.service', compact('title', 'packages'));
    }

    public function reserve($servicePackageId)
    {
        $title = 'Packages';
        $package = ServicePackage::find($servicePackageId);

        Session::put('package_id', $package->service_id);

        return View::make('home.reserve', compact('title', 'package'));
    }

    public function reservePackage()
    {
        $reservationDate = new \Carbon\Carbon(Input::get('date'));

        $packageId      =   Session::get('package_id');
        $name           =   Input::get('name');
        $email          =   Input::get('email');
        $contactNumber  =   Input::get('contact_number');
        $date           =   $reservationDate->toDateString();
        $message        =   Input::get('message');
        $statusId       =   1;

        Reservation::create([
            'name'              =>  $name,
            'email'             =>  $email,
            'contact_number'    =>  $contactNumber,
            'package_id'        =>  $packageId,
            'date'              =>  $date,
            'message'           =>  $message,
            'status_id'         =>  $statusId
        ]);

        return Redirect::back();

    }

    public function product()
    {
        $title = 'Product Page';
        return View::make('home.product', compact('title'));
    }

    public function galleries()
    {
        $title = 'Galleries Page';
        $galleries = Gallery::all();
        return View::make('home.galleries', compact('title', 'galleries'));
    }

    public function gallerySingle($galleryId)
    {
        $title = 'Gallery Image';
        $galleryImages = GalleryImage::where('gallery_id', $galleryId)->get();
        return View::make('home.gallery-single', compact('title', 'galleryImages'));
    }

    public function aboutUs()
    {
        $title = 'About Us Page';
        $announcement = Announcement::find(1);
        return View::make('home.about-us', compact('title', 'announcement'));
    }

    public function contact()
    {
        $title = 'Contact Page';
        return View::make('home.contact', compact('title'));
    }

    public function saveInquiry()
    {
        Inquiry::create([
            'name'              =>  Input::get('name'),
            'email'             =>  Input::get('email'),
            'contact_number'    =>  Input::get('contact_number'),
            'message'           =>  Input::get('message')
        ]);

        return Redirect::back()->withMessage('Created Successfully!');
    }

    public function announcements()
    {
        $title = 'Announcements Page';
        $announcements = Announcement::all();
        return View::make('home.announcements-all', compact('title', 'announcements'));
    }

    public function singleAnnouncement($announcementId)
    {
        $title = 'Single Announcement Page';
        $announcement = Announcement::find($announcementId);
        return View::make('home.announcement-single', compact('title', 'announcement'));
    }
}
