@extends('layouts.main')

@section('container')

<h2>{{$posts->title}}</h2>
<h6>By: <a href="#" class="text-decoration-none">{{$posts->user->name}}</a> in Category <a href="/posts/{{ $posts->slug }}" class="text-decoration-none">{{$posts->category->name}}</a></h6> 
<p>{!!$posts->body!!}</p>

<a href="/posts">Kembali ke halaman blog</a>


@endsection




