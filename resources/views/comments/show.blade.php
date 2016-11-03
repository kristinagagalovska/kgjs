@extends('layouts.page')

@section('content')
{{--deshmiii--}}
@foreach($comment as $com)
    <p>{{$com->description}}</p> //da se vnesi ubav html kod kako kje izgleda prikazot na deshmi (komentari sho gi vnesva adminot preku dodadi komentar)
    @endforeach
@endsection