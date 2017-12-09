@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/blog/public/posts/create" class="btn btn-primary pull-right">Create Post</a>
                    <h3 class="panel-title">Your Blog Posts</h3>
                </div>

                    @if(count($posts) > 0)
                    <table class="table">
                        <tr>    
                            <th>#</th>
                            <th>Title</th>
                            <th>Update</th>
                            <th>Remove</th>
                        </tr>
                        <?php $counter = 1; ?>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$counter++}}</td>
                            <td>{{$post->title}}</td>
                            <td><a class="btn btn-warning" href="/blog/public/posts/{{$post->id}}/edit" role="button">Edit</a></td>
                            <td>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                {{ Form::hidden('_method','DELETE')}}
                                {{ Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <div class="panel-body">
                        <h3 class="panel-title">You have no post !!</h3>
                    </div>
                    @endif 
            </div>
        </div>
    </div>
</div>
@endsection
