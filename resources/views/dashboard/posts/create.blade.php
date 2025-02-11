@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" autofocus required>
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="slug" name="slug" value="{{old('slug')}}" required>
            @error('slug')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    @if ('category_id' == $category->id)
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
            <label for="body" class="form-label">Body</label>
            @error('body')
                <p class="text-danger">
                    {{$message}}
                </p>
            @enderror
            <input id="body" type="hidden" name="body" required>
            <trix-editor input="body" value="{{old('body')}}"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Create post</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    }); 

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault(); 
    })
</script>

@endsection