@extends('layouts.bloglayout')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br>
        <div class="showpost">
            <h3>{{$blog->title}}</h3>
            <p class="lead"> {{$blog->content}} </p>
        </div>
    
    @if(count($blog->comments) > 0)
        
        <div class="ml-5">
        <h5>Comments</h5>
            @foreach($blog->comments as $comment)
            <div>
                <p>{{$comment->screen_name}}</p>
                
                <p>{{$comment->comment}}</p>
                <p class="font-weight-light">
                    posted {{ $comment->created_at->diffForhumans() }}
                </p>
            </div>
            @endforeach
        </div>
    @endif

    </div>


    <div class="ml-3 mr-2">
        <a href="{{route('blogs.index')}}" class="btn btn-outline-primary">Home</a>
    </div>
    <div class="mr-2">
        <a href="{{route('blogs.add_comment', $blog->id)}}" class="btn btn-outline-primary">Add Comment</a>
    </div>
    <div class="mr-2">
        <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-outline-primary">Edit</a>
    </div>
    <div>
    <form action="{{ route('blogs.destroy', $blog->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger" type="submit">Delete</button>
        </form>
    </div>
</div>

@endsection