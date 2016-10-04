{{--<h3>Нарушување на видот</h3> <br>--}}
@extends('layouts.page')

@section('content')

<!--Row (Navigation and Content) -->
    <div class="row" id="rowDy">
        <!-- Vertical Navigation Menu-->
        <div class="col-md-3" id="menyMajtas">

            <ul class="nav nav-pills  nav-stacked">
                {{--<li role="presentation" class="active"><a href="#">Syri i njeriut dhe të parit</a></li>--}}
                @foreach ($categories as $category)
                    <li role="presentation"><a href="{{route('t1.show', $category->title)}}">{{$category->title}}</a></li>
                    <li role="separator" class="divider"></li>
                    @foreach($subCat as $sub)
                        @if($sub->catId == $category->id)
                            <li role="presentation"><a href="{{route('sub1.show', ['id' => $category->id, 'title' => $sub->title])}}">{{$sub->title}}</a></li>
                        @endif
                    @endforeach
                    <li role="separator" class="divider"></li>
                @endforeach
            </ul>
        </div>
        <!--Content-->
        <div class="col-md-8" id="permbajtjekryesore">
            @if($categories)
            {{$categories[0]->title}}
                <p> {{$categories[0]->description}} <br>
                    <img src="{{ route('images', $categories[0]->image)}}" style="height: 16em; width:16em;"> <br>
                </p>
            @endif
        </div>
    </div>

    @endsection


