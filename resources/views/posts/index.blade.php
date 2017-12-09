@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header"><h1>Posts</h1></div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4">
                        <img style="100%" src="{{ asset('/storage/cover_images/'.$post->cover_image) }}" class="img-responsive">
                    </div>
                    <div class="col-md-8">
                        <h3><a href="/blog/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
    <p>No Posts Found !!</p>
    @endif   
</div>
@endsection


