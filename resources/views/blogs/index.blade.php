@extends('layouts.bloglayout')

@section('content')
<br><br>
<div class="row">


    @foreach($blogs as $blog)

    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-header">
                <h5>{{ $blog->title}} </h5>
            </div>
            <div class="card-body">
                <p> {{ Str::words($blog->content, 20, '...') }} </p>

                
                <a href={{ route ('blogs.show', $blog->id)}} class="btn btn-outline-primary">View Post</a>

            </div>
            <div class="card-footer">
            <p class="font-weight-light">
                    posted {{ $blog->created_at->diffForhumans() }}
                <br>
                <em>comments:&nbsp;{{ count($blog->comments) }}</em>
            </p>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection