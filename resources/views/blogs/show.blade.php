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
    <div>
        <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-outline-primary">Edit</a>
    </div>
</div>

@endsection