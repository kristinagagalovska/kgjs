<?php

namespace App\Http\Controllers;


use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $title = $request->get('title');
        $description = $request->get('description');

        $question = new Question();
        $question->setTitle($title);
        $question->setDescription($description);
        $question->save();
        dd("dodaeno e novo prashanje");
    }

    public function show()
    {
        $questions = Question::all()->all();

        return view('questions.show', ['questions' => $questions]);
    }
}