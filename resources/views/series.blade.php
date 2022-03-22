@extends('layouts/main')
@section('content')
<h1>Series</h1>
<div>
<p>Welcome to the series page</p>

<ul>
@foreach ( $series as $serie )

  <li><a href="/series/{{ $serie->url }}"> {{ $serie->title }} </a></li>

@endforeach
</ul>
</div>

@endsection
