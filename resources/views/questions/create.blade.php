<form role="form" action="{{route('questions.store')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="text"  id="title" name="title">
    <input type="text"  id="description" name="description">
    <button type="submit" name="store">Додади прашање.</button>
</form>