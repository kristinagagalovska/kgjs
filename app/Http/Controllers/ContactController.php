<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $comments = $request->get('comments');

        Mail::send('email.contact', ['name'=>$name, 'comments'=>$comments, 'email'=>$email], function ($message) {
            $message->to('kristinagagalovska@gmail.com')->subject('poraka'); //setirame na koj mail da se prakjaat porakite

        });

        return redirect()->route('index');

    }
}