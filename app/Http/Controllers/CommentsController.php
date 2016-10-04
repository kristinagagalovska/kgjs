<?php

namespace App\Http\Controllers;


use App\Comment;
use Illuminate\Http\Request;

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

        $extension = $image->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension;
        $directory = storage_path("uploads/");
        $image = $image->move($directory, $fileName);
        $comment->setImage($image->getFilename());
        $comment->save();
    }
}