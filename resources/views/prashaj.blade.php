@extends('layouts.page')

@section('content')

    @foreach ($questions as $question)
    <a href="{{route('questions.show')}}">{{$question->title}}</a> <br>
    @endforeach

    // kontakt forma ista kako vo app kaj sho mailojte treba da stigat na mail
    //prikaz na prashanjata od pochetna

@endsection