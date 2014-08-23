<?php

// Global variable
App::singleton('services', function($servicePackages)
{
    $services = '';

    foreach ($servicePackages as $service)
    {
        $services .= "<li><a href='services/" . $service->id . "'>" . $service->name . '</a></li>';
    }

    return $services;
});

// Public Pages
Route::get('/', 'HomeController@index');
Route::get('login', 'AdminController@login');
Route::post('login', 'AdminController@verifyLogin');
Route::get('services/{serviceId}', 'HomeController@service');

Route::get('event', 'HomeController@event');
Route::get('photo-shoot', 'HomeController@photoShoot');
Route::get('products', 'HomeController@products');

Route::get('reserve/{serviePackageId}', 'HomeController@reserve');
Route::post('reserve-package', 'HomeController@reservePackage');
Route::get('galleries', 'HomeController@galleries');
Route::get('about-us', 'HomeController@aboutUs');
Route::get('contact', 'HomeController@contact');

Route::group(['before' => 'auth', 'prefix' => 'admin'], function()
{
    Route::get('reservation', 'AdminController@reservation');
    Route::get('reservation/{reservationId}', 'AdminController@reserveId');
    Route::post('update/reservation/{customerId}', 'AdminController@updateReservation');

    Route::get('/', 'AdminController@index');
    Route::get('announcement', 'AdminController@announcement');
    Route::get('single-announcement/{announcementId}', 'AdminController@singleAnnouncement');
    Route::post('update/announcement/{announcementId}', 'AdminController@updateAnnouncement');

    // Services
    Route::get('services', 'AdminController@services');
    Route::get('service-package/{packageId}', 'AdminController@servicePackage');
    Route::get('service-package/{packageId}/service-id/{serviceId}', 'AdminController@getIdAndServiceId');
    Route::post('add/service', 'AdminController@addService');
    Route::get('event', 'AdminController@serviceEvent');
    Route::get('photo-shoot', 'AdminController@servicePhotoShoot');
    Route::get('products', 'AdminController@serviceProduct');

    Route::get('gallery', 'AdminController@gallery');
    Route::get('gallery/{galleryId}', 'AdminController@galleryPage');
    Route::post('add/gallery-category', 'AdminController@addGallery');
    Route::post('add/gallery-image', 'AdminController@addGalleryImage');
    Route::get('delete/gallery/{galleryId}', 'AdminController@deleteGallery');

    Route::get('logout', 'AdminController@logout');
});