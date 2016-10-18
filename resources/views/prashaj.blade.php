@extends('layouts.page')

@section('content')

    @foreach ($questions as $question)
    {{--<a href="{{route('questions.show')}}">{{$question->title}}</a> <br>--}}
    <label>{{$question->title}} <br> {{@$question->description}}</label> <br> <br> <br>
    @endforeach

    <form  role="form" action="{{route('contact')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div>
            <hr3>Постави прашање</hr3>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="ИМЕ И ПРЕЗИМЕ" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="ЕМАИЛ" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="ОПИС" rows="5"></textarea>
            <br>
            <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Send</button>
            </div>
        </div>
    </form>

    //prikaz na prashanjata od pochetna

@endsection