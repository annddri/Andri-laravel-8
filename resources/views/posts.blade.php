@extends('layouts.main')

@section('container')
@foreach ($posts as $post)
<a href="/posts/{{ $post->slug }}"><h2>{{$post->title}}</h2></a>
<p>{{$post->excerpt}}</p>
@endforeach


@endsection


