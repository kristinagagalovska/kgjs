@extends('layouts.page')

@section('content')
{{--deshmiii--}}
{{--@foreach($comment as $com)--}}
    {{--<p>{{$com->description}}</p>--}}
    {{--//da se vnesi ubav html kod kako kje izgleda prikazot na deshmi (komentari sho gi vnesva adminot preku dodadi komentar)--}}
    {{--@endforeach--}}
{{--@endsection--}}

<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    @foreach($comment as $com)
        <div class="panel panel-default">
            <div id="{{$com->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    {{$com->description}}
                </div>
            </div>
        </div>
    @endforeach
</div>
    <br>

@endsection