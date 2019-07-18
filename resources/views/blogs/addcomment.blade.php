@extends('layouts.bloglayout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br>
        <h3>{{$blog->title}}</h3>
        <p class="lead"> {{$blog->content}} </p>
    </div>
</div>

<div class="container">
    <h3>Add your comment</h3>

    <form action=" {{ route ('blogs.store_comment') }} " method = "post">
    @csrf 
    <input type="hidden" id="blog_id" name="blog_id" value="{{$blog->id}}">
    <div class="form-group">
        <label for="screen_name">Name with comment</label>
        <input type="text" name="screen_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="comment">Your comment</label>
        <textarea name="comment" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary" type="submit">Add comment</button>
    </div>
    </form>

</div>

@endsection