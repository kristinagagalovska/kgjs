@extends('layouts.app')

@section('content')
{{--<h2><a href="{{route('index')}}">Почетна</a></h2>--}}
{{--<h2><a href="{{route('t1.index')}}">Нарушување на видот</a></h2>--}}
{{--<h2><a href="{{route('t2.index')}}">Живот без наочари</a></h2>--}}
{{--<h2><a href="{{route('t3.index')}}">Операција на катаракта</a></h2>--}}
{{--<h2><a href="{{route('t4.index')}}">Останати процедури</a></h2>--}}
{{--<h2><a href="{{route('t5.index')}}">За нас</a></h2>--}}

{{--<div class="row">--}}
{{--<div class="col-sm-7">--}}
    {{--<h2>Rreth nesh</h2><br>--}}
    {{--@foreach($zaNas as $nas)--}}
        {{--<strong>{{$nas->title}}</strong>--}}
        {{--<p>{{$nas->description}}</p>--}}
    {{--@endforeach--}}
{{--</div>--}}
{{--</div>--}}

<!-- Row (About Section) -->
<div class="row" id="about">
    <h2 class="text-center">За Нас</h2>
    <h4 class="text-center">Вашите очи го заслужуваат најдоброто</h4>
    <div class="col-sm-6">
        <p>Покрај класичните прегледи и терапии, Германската Очна Клиника нудат голем број на оперативни интервенции. Без обзир дали се работи за хирургија на катарактот или мрежницата, (Femto-) LASIK третман или имплантација на (мултифокални) леќи, очните лекари од Германската Очна Клиника  го нудат речиси целиот спектар на офталмологијата, од еден извор. </p>
    </div>
    <div class="col-sm-6">
        <p>Сите третмани се ориентирани кон највисоките стандарди на медицинската наука, т.н. златни стандарди. Искористете ги веќе денес, предностите на можностите кои произлегуваат од нашето искуство и опрема. Офталмолозите на Германската Очна Клиника сакаат при тоа да ви бидат на помош, за да го заштитите и зачувате вашето највредно чуло.</p>
    </div>
</div>
<!-- kraj -->

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
            {{ str_limit($cat->description, $limit = 250, $end = '...') }}
            </div>
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
            {{$pom = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, repellendus, ad, adipisci neque earum culpa magnam veritatis ipsum dolores odio laboriosam sed veniam accusamus! Architecto, provident nulla recusandae repellendus illo!"}}
            {{ str_limit($pom, $limit = 150, $end = '...') }}</div>
        </div>
    <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="{{url("img/32X32.gif")}}" width="40px" height="40px" alt="placeholder image"> </a> </div>
        <div class="media-body">
            <h3 class="media-heading">Product</h3>
            {{$pom = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, repellendus, ad, adipisci neque earum culpa magnam veritatis ipsum dolores odio laboriosam sed veniam accusamus! Architecto, provident nulla recusandae repellendus illo!"}}
            {{ str_limit($pom, $limit = 150, $end = '...') }}</div>
        </div>
    <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="{{url("img/32X32.gif")}}" width="40px" height="40px" alt="placeholder image"></a></div>
        <div class="media-body">
            <h3 class="media-heading">Product</h3>
            {{$pom = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, repellendus, ad, adipisci neque earum culpa magnam veritatis ipsum dolores odio laboriosam sed veniam accusamus! Architecto, provident nulla recusandae repellendus illo!"}}
            {{ str_limit($pom, $limit = 150, $end = '...') }}</div>
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


<!-- Row (About Section) -->
<div class="row" id="media">
    <div class="col-lg-7">
        <h2>Dëshmi</h2><br>
        @foreach ($comments as $comment)
        <div class="media">
            <div class="media-left"> <a href="{{route('ko', $comment->id)}}"> <img class="media-object" src="{{ route('images', $comment->image)}}" alt="..."> </a> </div>
            <div class="media-body">
                {{--<h3 class="media-heading">Media heading</h3>--}}
                <a href="{{route('ko', $comment->id)}}"> {{ str_limit($comment->description, $limit = 250, $end = '...') }} <br></a> </div>


        </div>
        @endforeach
    </div>
    <div class="col-sm-5">
        <h2>Media</h2><br>
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="854" height="480" src="https://www.youtube.com/embed/34Na4j8AVgA" allowfullscreen></iframe>
        </div>

        <!-- 4:3 aspect ratio -->
        <!--<div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="..."></iframe>
        </div>-->
    </div>

</div>
@endsection



