@extends('layouts/main')

@section('content')
<h1>{{ $serie->title }}</h1>
<p>{{ $serie->content }}</p>
<p>{{ $serie->acteurs }}</p>

<form method="POST" action="/comment?serie_id={{$serie->id}}">
@csrf
<div>
<input type="text" name="name" value="{{ old('author')}}" required>
</div>

<label for="comments">Write your comment:</label>
<textarea id="comments" name="content" rows="5" cols="50" required>{{ old('text') }}</textarea>
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $errors }}</li>
        @endforeach 
</ul>
<div>
    @endif
<button type="submit">Upload Comment</button>
</div>
</form>



@endsection
