@extends('layouts.bloglayout')

@section('content')

<div class="container">
    <h3>Blogger</h3>

    <form action=" {{ route ('blogs.update', $blog->id) }} " method = "post">
    @csrf 
    @method('PATCH')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{$blog->title}}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" rows="10" class="form-control">{{$blog->content}}</textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary" type="submit">Edit blog post</button>
    </div>
    </form>

</div>

@endsection