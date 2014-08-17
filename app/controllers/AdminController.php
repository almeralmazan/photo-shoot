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