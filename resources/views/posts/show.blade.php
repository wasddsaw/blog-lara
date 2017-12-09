@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header"><h1>{{$post->title}}</h1></div>
    <img src="{{ asset('/storage/cover_images/'.$post->cover_image) }}" class="img-responsive center-block">
    <br><br>
        <div class="panel panel-default">
            <div class="panel-body">
               <p>{!!$post->body!!}</p>
            </div>
            <div class="panel-footer"><small>Written on {{$post->created_at}} by {{$post->user->name}}</small></div>
        </div>
    <hr>
    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a class="btn btn-warning" href="/blog/public/posts/{{$post->id}}/edit" role="button">edit</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method','DELETE')}}
                {{ Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
     @endif    
     <hr>
</div>
@endsection