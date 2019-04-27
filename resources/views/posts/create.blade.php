@extends('layouts.app')

@section('content')
    @extends('inc.navbar')
        <div class="container">
            <h1>Create Post</h1>
            {{-- Using LaravelCollective HTML --}}
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                {{Form::submit('Submit', ['class' => 'btn btn-success float-right'])}}
            {!! Form::close() !!}
        </div>
@endsection