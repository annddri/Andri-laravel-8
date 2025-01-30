@extends('layouts.main')

@section('container')
<main class="form-registration w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
  <form action="/regist" method="post">
    @csrf
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror " id="name" name="name" placeholder="Name..." value="{{old('name')}}">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username..." value="{{old('username')}}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password...">
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Register</button>
        <small class="mt-2 d-block text-center"><a href="/login">Login your account! </a></small>
      </div>
    </div>
  </form>
</main>
@endsection
