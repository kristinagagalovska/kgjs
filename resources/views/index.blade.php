@extends('layouts.app')

@section('content')
{{--<h2><a href="{{route('index')}}">Почетна</a></h2>--}}
{{--<h2><a href="{{route('t1.index')}}">Нарушување на видот</a></h2>--}}
{{--<h2><a href="{{route('t2.index')}}">Живот без наочари</a></h2>--}}
{{--<h2><a href="{{route('t3.index')}}">Операција на катаракта</a></h2>--}}
{{--<h2><a href="{{route('t4.index')}}">Останати процедури</a></h2>--}}
{{--<h2><a href="{{route('t5.index')}}">За нас</a></h2>--}}
<div class="row">
<div class="col-sm-7">
    <h2>Rreth nesh</h2><br>
    @foreach($zaNas as $nas)
        <strong>{{$nas->title}}</strong>
        <p>{{$nas->description}}</p>
    @endforeach
</div>
</div>

<!-- Row (News Section) -->
<div class="row" id="lajme">
<div class="col-md-5">
<div class="nefokus">
    <h2>Ne fokus</h2>
    <hr>
   {{-- <p>Novostiii od site kategoriiii :)</p>--}}
</div>
<div class="media-object-default">
    @foreach($fokus as $cat)
    <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="{{ route('images', $cat->image)}}" style="height: 4em; width:4em;" alt="placeholder image"> </a> </div>
        <div class="media-body">
            <h3 class="media-heading">{{$cat->title}}</h3>
            {{$cat->description}} </div>
    </div>
    @endforeach
</div>
</div>
<div class="col-sm-2"></div>

<div class="col-md-5">
<div class="nefokus">
    <h2>Te rejat e fundita</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, magnam?</p>
</div>
<div class="media-object-default">
    <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="{{url("img/32X32.gif")}}" width="40px" height="40px" alt="placeholder image"> </a> </div>
        <div class="media-body">
            <h3 class="media-heading">Product</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita! </div>
    </div>
    <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="{{url("img/32X32.gif")}}" width="40px" height="40px" alt="placeholder image"> </a> </div>
        <div class="media-body">
            <h3 class="media-heading">Product</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, quasi doloribus non repellendus quae aperiam. Quos, eligendi itaque soluta ut dignissimos reprehenderit commodi laboriosam quis atque minus enim magnam delectus.</div>
    </div>
    <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="{{url("img/32X32.gif")}}" width="40px" height="40px" alt="placeholder image"></a></div>
        <div class="media-body">
            <h3 class="media-heading">Product</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, repellendus, ad, adipisci neque earum culpa magnam veritatis ipsum dolores odio laboriosam sed veniam accusamus! Architecto, provident nulla recusandae repellendus illo!</div>
    </div>
</div>
</div>
</div>
@endsection
@section('deshmi')

<!-- Row (About Section) -->
{{--<div class="row" id="about">--}}
{{--<div class="col-sm-7">--}}{{--
            --}}{{--<h2>За нас</h2><br>--}}{{--
            --}}{{--@foreach($zaNas as $nas)--}}{{--
            --}}{{--<strong>{{$nas->title}}</strong>--}}{{--
            --}}{{--<p>{{$nas->description}}</p>--}}{{--
                --}}{{--@endforeach--}}{{--
        --}}{{--</div>--}}{{--
</div>--}}
<div class="row">
        <h2>Dëshmi</h2><br>
        @foreach ($comments as $comment)
        <div class="col-sm-4">
        <div class="media">
            <div class="media-left"> <a href="#"> <img class="media-object" src="{{url("img/35X35.gif")}}" alt="..."> </a> </div>
            <div class="media-body">
                {{--<h3 class="media-heading">Media heading</h3>--}}
                {{$comment->description}} <br>
                @if($comment->image == 'null')
                    {{--<img src="{{ route('images', $cat->image)}}" style="height: 16em; width:16em; display: none;"> <br>--}}
                @else
                    <img src="{{ route('images', $comment->image)}}" style="height: 50px; width:60px;">
                @endif

                </div>
            </div>
        </div>

        @endforeach
</div>
@endsection



