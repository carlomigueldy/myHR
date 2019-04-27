@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="float-left">Posts</h1>
            <a href="/posts/create" class="btn btn-success float-right">Create a Post</a>
        </div>
    </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-light" style="margin: 5px">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else 
        <p>No posts found.</p>
    @endif
@endsection