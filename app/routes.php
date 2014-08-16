<?php

// Public Pages
Route::get('/', 'HomeController@index');
Route::get('services', 'HomeController@services');
Route::get('galleries', 'HomeController@galleries');
Route::get('about-us', 'HomeController@aboutUs');
Route::get('contact', 'HomeController@contact');

