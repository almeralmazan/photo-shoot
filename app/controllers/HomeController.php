<?php

class HomeController extends BaseController {

    public function index()
    {
        $title = 'Home Page';
        return View::make('home.index', compact('title'));
    }

    public function services()
    {
        $title = 'Services Page';
        return View::make('home.services', compact('title'));
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

}
