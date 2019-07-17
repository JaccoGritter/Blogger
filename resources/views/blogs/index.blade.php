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

                <!-- {{ Str::limit($blog->content, 40, ' (...)') }} -->
                {{ Str::words($blog->content, 10, '...') }}
                

                <p class="font-weight-light">
                    posted {{ $blog->created_at->diffForhumans() }}
                </p>
                <a href={{ route ('blogs.show', $blog->id)}} class="btn btn-outline-primary">Show</a>

            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection