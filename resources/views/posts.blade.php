@extends('layouts.main')

@section('container')
<h1 class="text-center">{{$title}}</h1>

<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-md-8">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                @else (request('author'))
                    <input type="hidden" name="author" value="{{request('author')}}">
                @endif
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
  <img src="img/programming.jpg" class="card-img-top img-fluid" alt="..." style="height: 350px;">
  <div class="card-body text-center">
    <small>
    <h4 class="card-title"><a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h4>
    <p>By: <a href="/posts?author={{$posts[0]->author->username }}" class="text-decoration-none">{{$posts[0]->author->name}}</a> in Category <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{$posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans()}}</p> 
    <h6 class="card-text">{{$posts[0]->excerpt}}</h6>
    </small>
    <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn text-bg-primary mt-2">Read more...</a>
  </div>
</div>

<div class="container">
    <div class="row">
    @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
        <div class="card">
            <img src="https://source.unsplash.com/1200x400/?{{$post->category->slug}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{ $post->slug}}" class="text-decoration-none">{{$post->title}}</a></h5>
                    <h6>By: <a href="/posts?author={{$post->author->username }}" class="text-decoration-none">{{$post->author->name}}</a> in Category <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{$post->category->name}}</a></h6> 
                    <p class="card-text">{{$post->excerpt}}</p>
                    <a href="/posts/{{$post->slug}}" class="btn btn-primary text-decoration-none">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4 text-muted">No post found.</p>
@endif

<div class="d-flex justify-content-end">
{{$posts->links()}}
</div>

@endsection


