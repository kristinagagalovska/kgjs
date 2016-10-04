<?php

namespace App\Http\Controllers;


use App\Services\ImagesResolver;

class ImageController extends Controller
{
    public function show($filename)
    {
        $images = new ImagesResolver();
        return $images->get($filename);
    }

}