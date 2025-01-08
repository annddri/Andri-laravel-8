@extends('layouts.main')

@section('container')
<h1 class="text-center">Halaman Posts Blogs</h1>

@foreach ($posts as $post)
<article class="border-bottom pb-4 text-decoration-none">
    <a href="/posts/{{ $post->slug}}" class="text-decoration-none"><h3 class="mt-3">{{$post->title}}</h3></a>
    <h6>By: <a href="/authors/{{$post->author->username }}">{{$post->author->name}}</a> in Category <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{$post->category->name}}</a></h6> 
    <p>{{$post->excerpt}}</p>
    <a href="/posts/{{$post->slug}}" class="text-decoration-none">Read more...</a>
</article>
@endforeach


@endsection


