@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2>{{$posts->title}}</h2>
        <p>By: <a href="/posts?authors={{$posts->author->username }}" class="text-decoration-none">{{$posts->author->name}}</a> in Category <a href="/posts?category={{ $posts->category->slug }}" class="text-decoration-none">{{$posts->category->name}}</a></p> 

        <img src="" alt="" class="img-fluid">

        <article class="my-3">
            <p>{!!$posts->body!!}</p>
        </article>
        <a href="/posts">Kembali ke halaman blog</a>
        </div>
    </div>
</div>






@endsection




