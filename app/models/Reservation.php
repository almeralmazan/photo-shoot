<?php

class Reservation extends Eloquent {

    protected $fillable = ['name', 'email', 'contact_number', 'package_id', 'date', 'message', 'status'];
}