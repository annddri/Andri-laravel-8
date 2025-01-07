@extends('layouts.main')

@section('container')

<h2>{{$posts->title}}</h2>
<h6>By: Andri Widani. Category: <a href="/category/{{$posts->category->slug}}">{{$posts->category->name}}</a></h6>
<p>{!!$posts->body!!}</p>

<a href="/posts">Kembali ke halaman blog</a>


@endsection




