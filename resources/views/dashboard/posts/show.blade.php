@extends('dashboard.layouts.main')

@section('container')
<div class="container my-3">
    <div class="row">
        <div class="col-lg-8">
        <h2>{{$post->title}}</h2>

        <a href="/dashboard/posts" class="badge bg-info text-decoration-none"><i data-feather="eye"></i> Back to all my posts</a>
        <a href="" class="badge bg-warning text-decoration-none"><i data-feather="edit"></i> Edit</a>
        <a href="" class="badge bg-danger text-decoration-none"><i data-feather="x-circle"></i> Delete</a>

        <img src="" alt="" class="img-fluid">

        <article class="my-3">
            <p>{!!$post->body!!}</p>
        </article>
        <a href="/dashboard/posts">Kembali ke halaman blog</a>
        </div>
    </div>
</div>
@endsection