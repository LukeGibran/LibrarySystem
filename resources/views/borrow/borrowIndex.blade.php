@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.messages')
        {{Form::open(['action' => 'BorrowController@store', 'method' => 'POST'])}}
            <div class="row">
                <div class="col-md-6">
                    <h2>Select the book</h2>
                    <hr>
                    {{Form::label('book_title', 'Book Title')}}
                    {{Form::text('book_title','',['class' => 'form-control mb-3', 'placeholder' => 'Book Title', 'list' => 'datalist1', 'required'])}}
                        <datalist id="datalist1">
                            @foreach ($books as $book)
                                <option value="{{$book->title}}">
                            @endforeach
                        </datalist>

                    {{Form::label('date', 'Date Borrowed')}}
                    {{Form::date('date','',['class' => 'form-control', 'placeholder' => 'Date Borrowed', 'list' => 'datalist1', 'required'])}}
                </div>
                <div class="col-md-6">
                        <h2>Select the Borrower</h2>
                        <hr>
                        {{Form::label('borrower', 'Borrower\'s name')}}
                        {{Form::text('borrower','',['class' => 'form-control mb-3', 'placeholder' => 'Borrower\'s name', 'list' => 'datalist2', 'required'])}}
                            <datalist id="datalist2">
                                @foreach ($borrowers as $borrower)
                                    <option value="{{$borrower->fname.' '.$borrower->lname}}">
                                @endforeach
                            </datalist>
                        <a href="/" class="btn btn-danger">Cancel</a>
                        {{Form::submit('Submit', ['class' => 'btn btn-success float-right'])}}
                </div>
            </div>
        {{Form::close()}}

    </div>
@endsection