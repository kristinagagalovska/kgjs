<form role="form" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    Наслов:<textarea id="title" name="title" style="width:200px; height:50px;"></textarea><br><br>
    Опис:<textarea id="description" name="description" style="width:1400px; height:700px;"></textarea><br><br>
    <input type="file"  id="image" name="image"><br><br>
    <select name="num">
        <option value="1">Нарушување на видот</option>
        <option value="2">Живот без наочари</option>
        <option value="3">Операција на катаракта</option>
        <option value="4">Останати процедури</option>
        <option value="5">За нас</option>
    </select> <br><br>
    <input type="checkbox" name="bool" value='true'> Прикажи во новости.<br><br>
    <button type="submit" name="store">Додади категорија.</button>
</form>