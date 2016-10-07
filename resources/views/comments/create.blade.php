<form role="form" action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    Коментар:<input type="text"  id="description" name="description" style="width:1400px; height:700px;"><br></br>
    <input type="file"  id="image" name="image"><br></br>
    <button type="submit" name="store">Додади коментар.</button>
</form>