@extends('layouts.page')

@section('content')

    <!--Row (Navigation and Content) -->
    <div class="row" id="rowDy">
        <!-- Vertical Navigation Menu-->
        <div class="col-md-3" id="menyMajtas">

            <ul class="nav nav-pills  nav-stacked">
                {{--<li role="presentation" class="active"><a href="#">Syri i njeriut dhe të parit</a></li>--}}
                @foreach ($categories as $cate)
                    <li role="presentation"><a href="{{route('t1.show', $cate->title)}}">{{$cate->title}}</a></li>
                    <li role="separator" class="divider"></li>
                    @foreach($subCat as $s)
                        @if($s->catId == $cate->id)
                            <li role="presentation"><a href="{{route('sub1.show', ['id' => $cate->id, 'title' => $s->title])}}">{{$s->title}}</a></li>
                        @endif
                    @endforeach
                    <li role="separator" class="divider"></li>
                @endforeach
            </ul>
        </div>
        <!--Content-->
        <div class="col-md-8" id="permbajtjekryesore">
                @foreach($sub as $cat)
                   <h3>{{$cat->title}}</h3>
                    <p> {{$cat->description}} <br>
                        @if($cat->image == 'null')
                            {{--<img src="{{ route('images', $cat->image)}}" style="height: 16em; width:16em; display: none;"> <br>--}}
                        @else
                            <img src="{{ route('images', $cat->image)}}" style="height: 16em; width:16em;"> <br>
                        @endif
                    </p>
                @endforeach
        </div>
    </div>
@endsection


