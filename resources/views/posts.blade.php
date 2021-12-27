

@extends('layouts.main')

@section('container')

@foreach ($posts as $p)
    
<article class="mb-5">
<a href="/posts/{{ $p->slug }}"><h2>{{ $p->title }}</h2></a>
<h5>{{ $p->author }}</h5>
<p>{{ $p->excerpt }}</p>
</article>
@endforeach

@endsection

