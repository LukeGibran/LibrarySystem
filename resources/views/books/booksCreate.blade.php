@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Add</h1>
        {{-- <a href="/" class="btn btn-link"> <i class="fas fa-arrow-left"></i> Back to home</a> --}}

        <hr>

        {{ Form::open(['action' => 'BooksController@store', 'method' => 'POST']) }}
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title', 'required'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('author', 'Author')}}
                            {{Form::text('author','',['class' => 'form-control', 'placeholder' => 'Author', 'required'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('subject', 'Subject')}}
                            {{Form::text('subject','',['class' => 'form-control', 'placeholder' => 'Subject', 'required'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('dateofpub', 'Date Publish / Copyright')}}
                            {{Form::number('dateofpub','',['class' => 'form-control', 'placeholder' => 'Date Publish / Copyright', 'required'])}}
                    </div>
                   
                </div> 
                <div class="col-md-6">
                        <div class="form-group">
                                {{Form::label('publishingcomp', 'Publishing Company')}}
                                {{Form::text('publishingcomp','',['class' => 'form-control', 'placeholder' => 'Publishing Company', 'required'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('placeofpub', 'Place of publication')}}
                                {{Form::text('placeofpub','',['class' => 'form-control', 'placeholder' => 'Place of publication', 'required'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('isbn', 'ISBN')}}
                                {{Form::text('isbn','',['class' => 'form-control', 'placeholder' => 'ISBN', 'required'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('no_copy', 'No of Copy / Volumes')}}
                                {{Form::number('no_copy','',['class' => 'form-control', 'placeholder' => 'No of Copy / Volumes', 'required'])}}
                        </div>
                </div>
            </div>
            <h2>Additional information</h2>
            <hr>
            <div class="row">
                 <div class="col-md-6">
                        <div class="form-group">
                                {{Form::label('cost', 'Cost')}}
                                {{Form::number('cost','',['class' => 'form-control', 'placeholder' => 'Cost'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('edition', 'Edition')}}
                            {{Form::text('edition','',['class' => 'form-control', 'placeholder' => 'Edition'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('addedentries', 'Added Entries (if more Authors/Subject)')}}
                                {{Form::text('addedentries','',['class' => 'form-control', 'placeholder' => 'Added'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('typeofmat', 'Type of Material')}}
                                {{Form::text('typeofmat','',['class' => 'form-control', 'placeholder' => 'Type of Material', 'list' => 'datalist', 'autocomplete' => 'off', 'required'])}}
                                <datalist id="datalist">
                                        <option value="Book">
                                        <option value="Magazine">
                                        <option value="Article">
                                        <option value="Journal">
                                        <option value="Periodical">
                                        <option value="Encyclopedia">
                                        <option value="Dictionary">
                                        <option value="Almanac">
                                        <option value="Newspaper_Clipping">
                                        <option value="AV">
                                </datalist>
                        </div>
                   
                </div> 
                <div class="col-md-6">
                        <div class="form-group">
                                {{Form::label('includes', 'Includes')}}
                                {{Form::text('includes','',['class' => 'form-control', 'placeholder' => 'Includes'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('remarks', 'Remarks')}}
                                {{Form::text('remarks','',['class' => 'form-control', 'placeholder' => 'Remarks'])}}
                        </div>
                        
                        <a href="/home" class="btn btn-danger">Cancel</a>
                        {{Form::submit('Submit', ['class' => 'btn btn-success float-right'])}}

                </div>

            </div>
        {{ Form::close() }}
    </div>
@endsection