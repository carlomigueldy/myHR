@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="float-left">Employee Positions</h1>
            <a href="/positions/create" class="btn btn-success float-right">Add a Position</a>
        </div>
    </div>
    @if(count($positions) > 0)
            <table class="table table-sm table-bordered">
                <thead align="center">
                    <tr>
                        <th>#</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach($positions as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->position}}</td>
                            <td><a href="/positions/{{$row->id}}">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{$positions->links()}}
    @else 
        <p>No posts found.</p>
    @endif
@endsection