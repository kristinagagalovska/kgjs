<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $description = $request->get('description');
        $image = $request->file('image');

        $comment = new Comment();
        $comment->setDescription($description);

        if($image == null) {
            $comment->setImage('null');
        } else {
        $extension = $image->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension;
            //$directory = storage_path('home/jusutfed/public_html/jusufi.website/img');
        $directory = storage_path("uploads/");
           //$directory = storage_path("jusutfed/public_html/Jusufi.website/images/");
            ///public_html/jusufi.website/jusutfed/public_html/Jusufi.website/images
            //$directory = "/public_html/jusufi.website/images";
            $image = $image->move($directory, $fileName);
        $comment->setImage($image->getFilename()); }
        $comment->save();
    }

    public function show($id)
    {
        $comment = (array)DB::select("SELECT * FROM comments WHERE id='$id'");

        return view('comments.show', ['comment' => $comment]);
    }
}