@extends('layouts.main')

@section('container')
<h1>Category: {{$category}}</h1>
@foreach ($posts as $post)
<h2>{{$post->title}}</h2>
<p>{{$post->excerpt}}</p>
@endforeach

<a href="/categories">Masuk ke categories</a>
<a href="/posts">Kembali ke halaman blog</a>

@endsection


