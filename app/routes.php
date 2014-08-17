<?php

// Public Pages
Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::post('login', 'AdminController@verifyLogin');
Route::get('event', 'HomeController@event');
Route::get('photo-shoot', 'HomeController@photoShoot');
Route::get('products', 'HomeController@product');
Route::get('galleries', 'HomeController@galleries');
Route::get('about-us', 'HomeController@aboutUs');
Route::get('contact', 'HomeController@contact');

Route::group(['before' => 'auth', 'prefix' => 'admin'], function()
{
    Route::get('reservation', 'AdminController@reservation');
    Route::get('reservation/{reservationId}', 'AdminController@reserveId');
    Route::post('update/reservation/{customerId}', 'AdminController@updateReservation');
    Route::get('announcement', 'AdminController@announcement');
    Route::get('event', 'AdminController@serviceEvent');
    Route::get('photo-shoot', 'AdminController@servicePhotoShoot');
    Route::get('products', 'AdminController@serviceProduct');
    Route::get('gallery', 'AdminController@gallery');
    Route::get('logout', 'AdminController@logout');
});