<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');        
    }

    public function submit(Request $request)
    {
        $name = $request->get('name');
        $pass = $request->get('pass');

        if($name == 'admin' && $pass=='123654') {
            return view('admin.index');
        } else { return view('admin.login'); }
    }
    
    public function index() {
        return view('admin.index');
    }

    public function zadaca() {
        return view('zadaca');
    }
}