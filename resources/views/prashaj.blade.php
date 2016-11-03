@extends('layouts.page')

@section('content')


    @foreach ($questions as $question)
    {{--<a href="{{route('questions.show')}}">{{$question->title}}</a> <br>--}}
    {{--<label>{{$question->title}} <br> {{@$question->description}}</label> <br> <br> <br>--}}

    <!-- Row (FAQ Section) -->
    <br>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" >
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$question->id}}" aria-expanded="false" aria-controls="collapseOne">
                        {{$question->title}}
                    </a>
                </h4>
            </div>
            <div id="{{$question->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    {{@$question->description}}
                </div>
            </div>
        </div>
    </div>

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