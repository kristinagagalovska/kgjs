<h4>Нарушување на видот</h4>
@foreach($catT1 as $category)
    {{$category->title}} <br>
    {{$category->description}} <br>

    <form method="POST" action="{{ route('category.delete', $category->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-sm btn-info" type="submit">Избришија категоријата</button>
    </form>

    @foreach($subCatT1 as $subCat)
        @if($subCat->catId == $category->id)
        {{$subCat->title}} <br>
        {{$subCat->description}} <br>
        <form method="POST" action="{{ route('subcat.delete', $subCat->id) }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button class="btn btn-sm btn-info" type="submit">Избришија подкатегоријата</button>
        </form>
        @endif
        @endforeach

    <form method="GET" action="{{ route('subcat.create', ['id' => $category->id, 'num' => $category->num]) }}">
        <button class="btn btn-sm btn-info" type="submit">Додади подкатегорија</button>
    </form>

    {{--<a href="{{route('subcat.create')}}">Додади подкатегорија</a>--}}
    @endforeach

<h4>Живот без наочари</h4>
@foreach($catT2 as $category)
    {{$category->title}} <br>
    {{$category->description}} <br>
    <form method="POST" action="{{ route('category.delete', $category->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-sm btn-info" type="submit">Избришија категоријата</button>
    </form>

    @foreach($subCatT2 as $subCat)
        @if($subCat->catId == $category->id)
            {{$subCat->title}} <br>
            {{$subCat->description}} <br>
            <form method="POST" action="{{ route('subcat.delete', $subCat->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <button class="btn btn-sm btn-info" type="submit">Избришија подкатегоријата</button>
            </form>
        @endif
    @endforeach
    <form method="GET" action="{{ route('subcat.create', ['id' => $category->id, 'num' => $category->num]) }}">
        <button class="btn btn-sm btn-info" type="submit">Додади подкатегорија</button>
    </form>
@endforeach

<h4>Операција на катаракта</h4>
@foreach($catT3 as $category)
    {{$category->title}} <br>
    {{$category->description}} <br>
    <form method="POST" action="{{ route('category.delete', ['id' => $category->id, 'num' => $category->num]) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-sm btn-info" type="submit">Избришија категоријата</button>
    </form>

    @foreach($subCatT3 as $subCat)
        @if($subCat->catId == $category->id)
            {{$subCat->title}} <br>
            {{$subCat->description}} <br>
            <form method="POST" action="{{ route('subcat.delete', $subCat->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <button class="btn btn-sm btn-info" type="submit">Избришија подкатегоријата</button>
            </form>
        @endif
    @endforeach

    <form method="GET" action="{{ route('subcat.create', ['id' => $category->id, 'num' => $category->num]) }}">
        <button class="btn btn-sm btn-info" type="submit">Додади подкатегорија</button>
    </form>
@endforeach

<h4>Останати процедури</h4>
@foreach($catT4 as $category)
    {{$category->title}} <br>
    {{$category->description }} <br>
    <form method="POST" action="{{ route('category.delete', $category->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-sm btn-info" type="submit">Избришија категоријата</button>
    </form>

    @foreach($subCatT4 as $subCat)
        @if($subCat->catId == $category->id)
            {{$subCat->title}} <br>
            {{$subCat->description}} <br>
            <form method="POST" action="{{ route('subcat.delete', $subCat->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <button class="btn btn-sm btn-info" type="submit">Избришија подкатегоријата</button>
            </form>
        @endif
    @endforeach

    <form method="GET" action="{{ route('subcat.create', ['id' => $category->id, 'num' => $category->num]) }}">
        <button class="btn btn-sm btn-info" type="submit">Додади подкатегорија</button>
    </form>
@endforeach

<h4>За нас</h4>
@foreach($catT5 as $category)
    {{$category->title}} <br>
    {{$category->description}} <br>
    <form method="POST" action="{{ route('category.delete', $category->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-sm btn-info" type="submit">Избришија категоријата</button>
    </form>

    @foreach($subCatT5 as $subCat)
        @if($subCat->catId == $category->id)
            {{$subCat->title}} <br>
            {{$subCat->description}} <br>
            <form method="POST" action="{{ route('subcat.delete', $subCat->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <button class="btn btn-sm btn-info" type="submit">Избришија подкатегоријата</button>
            </form>
        @endif
    @endforeach

    <form method="GET" action="{{ route('subcat.create', ['id' => $category->id, 'num' => $category->num]) }}">
        <button class="btn btn-sm btn-info" type="submit">Додади подкатегорија</button>
    </form>
@endforeach
