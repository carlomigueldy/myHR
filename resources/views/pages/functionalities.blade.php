@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>These are a list of functioalities of this application.</p>
    @if(count($functionalities) > 0)
        <ul class="list-group">
            @foreach($functionalities as $function)
                <li class="list-group-item">{{$function}}</li>
            @endforeach
        </ul>
    @endif
@endsection
