@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>

<h2>Nama: {{$nama}}</h2>
<h4>Email: {{$email}}</h4>
<img src="img/{{$gambar}}" alt="{{$nama}}" class="rounded-circle w-100">
@endsection




