@extends('layouts.main')

@section('container')
<h1 class="text-center">{{$title}}</h1>

@if ($posts->count())
<div class="card mb-3">
  <img src="img/programming.jpg" class="card-img-top img-fluid" alt="..." style="height: 350px;">
  <div class="card-body text-center">
    <small>
    <h4 class="card-title"><a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h4>
    <p>By: <a href="/authors/{{$posts[0]->author->username }}" class="text-decoration-none">{{$posts[0]->author->name}}</a> in Category <a href="/category/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{$posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans()}}</p> 
    <h6 class="card-text">{{$posts[0]->excerpt}}</h6>
    </small>
    <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn text-bg-primary mt-2">Read more...</a>
  </div>
</div>
@else
    <p class="text-center fs-4 text-muted">No post found.</p>
@endif


<div class="container">
    <div class="row">
    @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
        <div class="card">
            <img src="https://source.unsplash.com/1200x400/?{{$post->category->slug}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{ $post->slug}}" class="text-decoration-none">{{$post->title}}</a></h5>
                    <h6>By: <a href="/authors/{{$post->author->username }}" class="text-decoration-none">{{$post->author->name}}</a> in Category <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{$post->category->name}}</a></h6> 
                    <p class="card-text">{{$post->excerpt}}</p>
                    <a href="/posts/{{$post->slug}}" class="btn btn-primary text-decoration-none">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection


