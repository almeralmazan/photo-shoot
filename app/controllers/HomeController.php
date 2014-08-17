<?php

class HomeController extends BaseController {

    public function index()
    {
        $title = 'Home Page';
        $services = Service::all();
        return View::make('home.index', compact('title', 'services'));
    }

    public function event()
    {
        $title = 'Event Package Page';
        return View::make('home.event', compact('title'));
    }

    public function photoShoot()
    {
        $title = 'Photo Shoot Page';
        return View::make('home.photo-shoot', compact('title'));
    }

    public function product()
    {
        $title = 'Product Page';
        return View::make('home.product', compact('title'));
    }

    public function galleries()
    {
        $title = 'Galleries Page';
        return View::make('home.galleries', compact('title'));
    }

    public function aboutUs()
    {
        $title = 'About Us Page';
        return View::make('home.about-us', compact('title'));
    }

    public function contact()
    {
        $title = 'Contact Page';
        return View::make('home.contact', compact('title'));
    }

    public function login()
    {
        $title = 'Login Page';
        return View::make('home.login', compact('title'));
    }
}
