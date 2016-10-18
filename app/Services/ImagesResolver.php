<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class ImagesResolver
{
    public function get($filename) 
    {
        //$path = '/laravel/kgjs/storage/uploads' . '/' . $filename;
        //$path = '/public_html/jusufi.website/jusutfed/public_html/Jusufi.website/images' . '/' . $filename;
        $path = url("/img" . "/" . $filename);

        if(!File::exists($path)) abort(404);

        $file = File::get($path);

        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}