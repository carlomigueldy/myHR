@extends('layouts.app')


@section('content')
    @extends('inc.navbar')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            <p>This is a sample Laravel project by Carlo Miguel Dy. Click here to see the <a href="/about">About</a> page</p>
            <p><a href="/login" class="btn btn-secondary btn-lg">Login</a> <a href="/register" class="btn btn-success btn-lg">Register</a></p>
        </div>
    </div>
@endsection

