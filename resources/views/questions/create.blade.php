<form role="form" action="{{route('questions.store')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    Наслов:<input type="text"  id="title" name="title" style="width:200px; height:50px;"></br></br>
    Опис:<input type="text"  id="description" name="description" style="width:1400px; height:700px;"></br></br>
    <button type="submit" name="store">Додади прашање.</button>
</form>