@extends('layouts.app')

@section('content')
        <div class="container">
            <h1>Add a Position</h1>
            {{-- Using LaravelCollective HTML --}}
            {!! Form::open(['action' => 'PositionsController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('position', 'Position')}}
                    {{Form::text('position', '', ['class' => 'form-control', 'placeholder' => 'Position Name'])}}
                </div>
                <a href="/positions" class="btn btn-danger float-right" style="margin: 3px;">Cancel</a>
                {{Form::submit('Submit', ['style' => 'margin: 3px;', 'class' => 'btn btn-success float-right'])}}
            {!! Form::close() !!}
        </div>
@endsection