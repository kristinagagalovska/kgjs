<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Question;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $questions = DB::select("SELECT * FROM questions ORDER BY created_at LIMIT 3");
        $comments = DB::select("SELECT * FROM comments ORDER BY created_at LIMIT 3");
        $fokus = DB::select("SELECT * FROM categories cat 
                            WHERE (cat.num='1' OR cat.num='2' OR cat.num='3' OR cat.num='4')
                            AND cat.bool='1' ORDER BY cat.created_at DESC LIMIT 3");
        $zaNas = DB::select("SELECT * FROM categories WHERE num='5' AND bool='1' ORDER BY created_at DESC LIMIT 1");

        return view('index', ['questions' => $questions, 'comments' => $comments, 'fokus' => $fokus, 'zaNas' => $zaNas]);
    }

}