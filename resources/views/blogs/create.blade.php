@extends('layouts.bloglayout')

@section('content')

<div class="container">
    <h3>Blogger</h3>
    <p>This is the create page</p>

    <form action=" {{ route ('blogs.store') }} " method = "post">
    @csrf 

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary" type="submit">Add blog post</button>
    </div>
    </form>

</div>

@endsection