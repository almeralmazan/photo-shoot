<?php

class HomeController extends BaseController {

    public function index()
    {
        $title = 'Home Page';
        $services = Service::all();
        return View::make('home.index', compact('title', 'services'));
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

    public function reserve($servicePackageId)
    {
        $title = 'Packages';
        $package = ServicePackage::find($servicePackageId);
        return View::make('home.reserve', compact('title', 'package'));
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
        $announcement = Announcement::find(1);
        return View::make('home.about-us', compact('title', 'announcement'));
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
