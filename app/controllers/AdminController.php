<?php

class AdminController extends BaseController {

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

    public function updateReservation($customerId)
    {
        $customer = Reservation::find($customerId);
        $customer->status_id = Input::get('status');
        $customer->save();

        return Redirect::back();
    }

    public function announcement()
    {
        $title = 'Announcement Page';
        $announcement = Announcement::find(1);
        return View::make('admin.announcement', compact('title', 'announcement'));
    }

    public function updateAnnouncement($announcementId)
    {
        $announcement = Announcement::find($announcementId);
        $announcement->title = Input::get('title');
        $announcement->content = Input::get('content');
        $announcement->save();

        return Redirect::back();
    }

    public function serviceEvent()
    {
        $title = 'Event Package';
        return View::make('admin.services.event', compact('title'));
    }

    public function servicePhotoShoot()
    {
        $title = 'Photo Shoot Package';
        return View::make('admin.services.photo-shoot', compact('title'));
    }

    public function serviceProduct()
    {
        $title = 'Products Package';
        return View::make('admin.services.products', compact('title'));
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
        $gallery = new Gallery;
        $gallery->name = Input::get('gallery_name');
        $gallery->save();

        return Redirect::back();
    }

    public function addGalleryImage()
    {
        $image = Input::file('image_name');
        $filename = $image->getClientOriginalName();

        $galleryImage = new GalleryImage;
        $galleryImage->gallery_id = Input::get('gallery_id');
        $galleryImage->image = $filename;
        $galleryImage->save();

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

        if ($credentials) return Redirect::to('admin/announcement');

        return Redirect::back()->withMessage('Sorry, only the administrator allowed here');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}