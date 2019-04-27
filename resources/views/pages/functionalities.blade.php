@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$title}}</h1>
        <p>These are a list of functioalities of this application.</p>
        @if(count($functionalities) > 0)
            <ul>
                @foreach($functionalities as $function)
                    <li>{{$function}}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
