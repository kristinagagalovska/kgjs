<form role="form" action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="text"  id="description" name="description"><br>
    <input type="file"  id="image" name="image"><br>
    <button type="submit" name="store">Додади коментар.</button>
</form>