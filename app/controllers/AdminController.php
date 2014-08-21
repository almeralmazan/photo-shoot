<?php

class AdminController extends BaseController {

    public function index()
    {
        $title = 'Admin Page';
        return View::make('admin.index', compact('title'));
    }

    public function announcement()
    {
        $title = 'Announcement Page';
        $announcement = Announcement::find(1);
        return View::make('admin.announcement', compact('title', 'announcement'));
    }

    public function reservation()
    {
        $title = 'Reservation Page';
        $reservations = Reservation::all();
        return View::make('admin.reservation', compact('title', 'reservations'));
    }

    public function reserveId($reservationId)
    {
        $title = 'Reservation Page';
        $customer = Reservation::find($reservationId);
        $package = ServicePackage::find($customer->package_id);
        return View::make('admin.customer-reservation', compact('title', 'customer', 'package'));
    }

    public function updateReservation($reservationId)
    {
        DB::table('reservations')
            ->where('reservations.id', '=', $reservationId)
            ->update([
                'status_id' => Input::get('status')
            ]);

        return Redirect::back();
    }

    public function updateAnnouncement($announcementId)
    {
        DB::table('announcements')
            ->where('announcements.id', '=', $announcementId)
            ->update([
                'title'     =>  Input::get('title'),
                'content'   =>  Input::get('content')
            ]);

        return Redirect::back();
    }

    public function services()
    {
        $title = 'Services';
        $services = Service::all();
        return View::make('admin.services.index', compact('title', 'services'));
    }

    public function addService()
    {
        Service::create([
            'name'  =>  Input::get('service_name'),
            'image' =>  Input::file('service_image')
        ]);
    }

    public function servicePackage($serviceId)
    {
        $service = Service::find($serviceId);
        $title = $service->name;

        $servicePackages = DB::table('service_packages')
                            ->where('service_id', '=', $serviceId)
                            ->get();

        return View::make('admin.services.service-package', compact('title', 'service', 'servicePackages'));
    }

    public function getIdAndServiceId($servicePackageId, $serviceId)
    {
        $title = 'Yahoo';
        $package = DB::table('service_packages')
                    ->where('service_packages.id', '=', $servicePackageId)
                    ->where('service_packages.service_id', '=', $serviceId)
                    ->first();

        return View::make('admin.services.service-package-details', compact('title', 'package'));
    }

    public function gallery()
    {
        $title = 'Gallery Page';
        $galleries = Gallery::all();
        return View::make('admin.gallery', compact('title', 'galleries'));
    }

    public function galleryPage($galleryId)
    {
        $title = 'Gallery Page';
        $galleryImages = DB::table('gallery_images')
                            ->select('id', 'image')
                            ->where('gallery_id', $galleryId)
                            ->get();

        $gallery_id = $galleryId;

        return View::make('admin.gallery-page', compact('title', 'galleryImages', 'gallery_id'));
    }

    public function addGallery()
    {
        Gallery::create([
            'name' => Input::get('gallery_name')
        ]);

        return Redirect::back();
    }

    public function addGalleryImage()
    {
        $image = Input::file('image_name');
        $filename = $image->getClientOriginalName();

        GalleryImage::create([
            'gallery_id'    =>  Input::get('gallery_id'),
            'image'         =>  $filename
        ]);

        $destinationPath = public_path() . '/images/uploads/galleries';
        $image->move($destinationPath, $filename);

        return Redirect::back();
    }

    public function deleteGallery($galleryId)
    {
        Gallery::find($galleryId)->delete();

        return Redirect::back();
    }


    public function verifyLogin()
    {
        // Using Auth::attempt, 'password' is automatically Hash::make()
        $credentials = Auth::attempt([
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ]);

        if ($credentials) return Redirect::to('admin');

        return Redirect::back()->with('message', 'Sorry, only the administrator allowed here');
    }

    public function login()
    {
        $title = 'Login Page';
        return View::make('admin.login', compact('title'));
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}