<?php

// Public Pages
Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::post('login', 'AdminController@verifyLogin');
Route::get('services', 'HomeController@services');
Route::get('galleries', 'HomeController@galleries');
Route::get('about-us', 'HomeController@aboutUs');
Route::get('contact', 'HomeController@contact');

Route::group(['before' => 'auth', 'prefix' => 'admin'], function()
{
    Route::get('announcement', 'AdminController@announcement');
    Route::get('event', 'AdminController@serviceEvent');
    Route::get('photo-shoot', 'AdminController@servicePhotoShoot');
    Route::get('products', 'AdminController@serviceProduct');
    Route::get('gallery', 'AdminController@gallery');
    Route::get('logout', 'AdminController@logout');
});