@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                    <a href="/posts" class="btn btn-outline-danger float-right"  style="margin: 3px;">Go Back</a>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary float-right" style="margin: 3px;">Edit Post</a>
                    <h1 class="float-left">{{$post->title}}</h1>
            </div>
        </div>
        
        <div class="">
            {!! $post->body !!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
    </div>
@endsection