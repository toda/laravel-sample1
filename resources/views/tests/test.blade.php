<h1>test</h1>

count : {{ $count }}<br><br>

first : {{ $first }}<br><br>

text2 : {{ $text }}<br><br/>

queryBuilder : {{ $queryBuilder }}<br><br>

@foreach ($values as $value)
{{ $value->id}}, {{ $value->text}}
<br>
@endforeach
