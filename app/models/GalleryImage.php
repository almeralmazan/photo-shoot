<?php

class GalleryImage extends Eloquent {

    protected $table = 'gallery_images';
    protected $fillable = ['image', 'gallery_id'];
}