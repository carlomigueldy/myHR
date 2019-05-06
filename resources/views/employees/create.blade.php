@extends('layouts.app')

@section('content')
        <div class="container">
            <h1>Add Employee</h1>
            {{-- Using LaravelCollective HTML --}}
            {!! Form::open(['action' => 'EmployeesController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('Employee Name', 'Employee Name')}}
                    {{Form::text('emp_name', '', ['class' => 'form-control', 'placeholder' => 'Name of the Employee'])}}
                </div>   
                <div class="form-group">
                    {{Form::label('Employee Email', 'Employee Email')}}
                    {{Form::text('emp_email', '', ['class' => 'form-control', 'placeholder' => 'Email of the Employee'])}}
                </div>
                <hr>
                {{Form::submit('Submit', ['class' => 'btn btn-success float-right'])}}
            {!! Form::close() !!}
        </div>
@endsection