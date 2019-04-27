@extends('layouts.app')

@section('content')
    @extends('inc.navbar')
    <div class="container">
        <h1>{{$title}}</h1>
        <p>These are a list of functioalities of this application.</p>
        @if(count($functionalities) > 0)
            <ul class="list-group">
                @foreach($functionalities as $function)
                    <li class="list-group-item">{{$function}}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
