<form role="form" action="{{route('subcat.store')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="text"  id="title" name="title"><br>
    <input type="text"  id="description" name="description"><br>
    <input type="file"  id="image" name="image"><br>
    <input type="hidden" name="num" value="{{$num}}">
    <input type="hidden" name="catId" value="{{$id}}">
    <input type="checkbox" name="bool" value='true'> Прикажи во новости.<br>
    <button type="submit" name="store">Додади подкатегорија.</button>
</form>