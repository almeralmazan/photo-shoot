<?php

class ServicePackage extends Eloquent {

    protected $table = 'service_packages';
    protected $fillable = ['service_id', 'name', 'image', 'price', 'status', 'details'];
}