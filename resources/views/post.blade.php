@extends('layouts.main')

@section('container')

<h2>{{$posts->title}}</h2>
<p>{!!$posts->body!!}</p>

<a href="/posts">Kembali ke halaman blog</a>


@endsection




