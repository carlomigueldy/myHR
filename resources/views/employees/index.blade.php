@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="float-left">Employees</h1>
            <a href="/employees/create" class="btn btn-success float-right">Add Employee</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-sm">
            <thead align="center">
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                @if(count($employees) > 0)
                    @foreach($employees as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->emp_name}}</td>
                            <td>{{$row->emp_email}}</td>
                            <td align="center">
                                <a href="" class="btn btn-secondary btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                @else 
                    <tr>
                        <td colspan="4" align="center">No records found.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        {{-- For the pagination-buttons --}}
        {{$employees->links()}}
    </div>
@endsection