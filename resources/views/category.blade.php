@extends('layouts.main')

@section('container')
<h1>Category: {{$category}}</h1>
@foreach ($posts as $post)
<h2>{{$post->title}}</h2>
<p>{{$post->excerpt}}</p>
@endforeach

<a href="/posts">Kembali ke halaman Blog</a>

@endsection


