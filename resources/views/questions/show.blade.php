<label>Прашања</label> <br>
@foreach ($questions as $question)
    <label>{{$question->title}}</label> <br>
    <label>{{@$question->description}}</label> <br>
@endforeach