@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <h1>Add a borrower</h1>
        <hr>
        {{ Form::open(['action' => 'BorrowersController@store', 'method' => 'POST']) }}
     
        <div class="row mb-3">
            <div class="col-md-6">
                {{Form::label('fname', 'Firstname')}}
                {{Form::text('fname','',['class' => 'form-control', 'placeholder' => 'Firstname', 'required'])}}  
            </div>
            <div class="col-md-6">
                {{Form::label('lname', 'Lastname')}}
                {{Form::text('lname','',['class' => 'form-control', 'placeholder' => 'Lastname', 'required'])}}  
            </div>
        </div>
        <a href="/borrower/" class="btn btn-danger">Cancel</a>

        {{Form::submit('Submit',['class' => 'btn btn-success float-right'])}}

        {{ Form::close() }}

    </div>
@endsection