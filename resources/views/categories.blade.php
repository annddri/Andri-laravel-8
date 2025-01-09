@extends('layouts.main')

@section('container')
<h2>Posts Categories</h2>

<div class="container">
    <div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4">
        <a href="{{$category->slug}}">
            <div class="card text-bg-dark border border-0">
                <img src="img/{{$category->slug}}.jpg" class="card-img img-fluid" style="height: 250px;">
                <div class="card-img-overlay d-flex align-items-center p-0 m-0">
                    <h5 class="card-title flex-fill p-2 mt-1 fs-3" style="background-color: rgba(0,0,0,0.7);"><a href="/category/{{ $category->slug }}" class="text-decoration-none text-white"><p>{{$category->name}}</a></h2></>
                </div>
            </div>
        </a>
    </div>
    @endforeach
    </div>
    <div class="row">
        <div class="col-md">
        <a href="/posts" class="btn btn-primary mt-4">Kembali ke halaman Blog</a>
        </div>
    </div>
</div>

@endsection


