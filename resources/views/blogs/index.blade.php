@extends('layouts.bloglayout')

@section('content')

<div class="row">


    @foreach($blogs as $blog)

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <a href=" {{route('blogs.show', $blog->id) }}" > {{ $blog->title}} </a>
            </div>
            <div class="card-body">

                {{ $blog->content }}

                <p class="font-weight-light">
                    posted {{ $blog->created_at->diffForhumans() }}
                </p>

            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection