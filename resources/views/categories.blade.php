@extends('layouts.main')

@section('container')
<h1>Posts Categories</h1>
@foreach ($categories as $category)
<ul>
    <li>
        <a href="/category/{{ $category->slug }}"><h2>{{$category->name}}</a></h2>
    </li>
</ul>
@endforeach

<a href="/posts">Kembali ke halaman Blog</a>

@endsection


