<?php

class AdminController extends BaseController {

    public function announcement()
    {
        $title = 'Announcement Page';
        return View::make('admin.announcement', compact('title'));
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
        return View::make('admin.gallery', compact('title'));
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}