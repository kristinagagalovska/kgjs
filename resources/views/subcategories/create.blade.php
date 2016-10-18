<form role="form" action="{{route('subcat.store')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <textarea id="title" name="title" style="width:200px; height:50px;"></textarea><br>
    <textarea id="description" name="description" style="width:1400px; height:700px;"></textarea><br>
    <input type="file"  id="image" name="image"><br>
    <input type="hidden" name="num" value="{{$num}}">
    <input type="hidden" name="catId" value="{{$id}}">
    <input type="checkbox" name="bool" value='true'> Прикажи во новости.<br>
    <button type="submit" name="store">Додади подкатегорија.</button>
</form>