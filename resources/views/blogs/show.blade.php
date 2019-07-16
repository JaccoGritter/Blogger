@extends('layouts.bloglayout')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br>
        <h3>{{$blog->title}}</h3>
        <p class="lead"> {{$blog->content}} </p>
    </div>
    <div class="ml-3 mr-2">
        <a href="{{route('blogs.index')}}" class="btn btn-outline-primary">Home</a>
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