@extends('layouts.app')

@section('content')
    <div class="container py-4">
        @include('includes.messages')
        <div class="row">
            <h1>Edit Book</h1>
            {{Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-link ', 'style' => 'padding-left:3px;color:#ff3547!important'])}} 
            {{Form::close()}}
        </div>
        {{-- <a href="/" class="btn btn-link"> <i class="fas fa-arrow-left"></i> Back to home</a> --}}

        <hr>

        {{ Form::open(['action' => ['BooksController@update', $book->id], 'method' => 'POST']) }}
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title',$book->title,['class' => 'form-control', 'placeholder' => 'Title', 'required'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('author', 'Author')}}
                            {{Form::text('author',$book->author,['class' => 'form-control', 'placeholder' => 'Author', 'required'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('subject', 'Subject')}}
                            {{Form::text('subject',$book->subject,['class' => 'form-control', 'placeholder' => 'Subject', 'required'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('dateofpub', 'Date Publish / Copyright')}}
                            {{Form::number('dateofpub',$book->date_publish,['class' => 'form-control', 'placeholder' => 'Date Publish / Copyright', 'required'])}}
                    </div>
                   
                </div> 
                <div class="col-md-6">
                        <div class="form-group">
                                {{Form::label('publishingcomp', 'Publishing Company')}}
                                {{Form::text('publishingcomp',$book->publishing_comp,['class' => 'form-control', 'placeholder' => 'Publishing Company', 'required'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('placeofpub', 'Place of publication')}}
                                {{Form::text('placeofpub',$book->place_of_publication,['class' => 'form-control', 'placeholder' => 'Place of publication', 'required'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('isbn', 'ISBN')}}
                                {{Form::text('isbn',$book->ISBN,['class' => 'form-control', 'placeholder' => 'ISBN', 'required'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('no_copy', 'No of Copy / Volumes')}}
                                {{Form::number('no_copy',$book->no_of_copy,['class' => 'form-control', 'placeholder' => 'No of Copy / Volumes', 'required'])}}
                        </div>
                </div>
            </div>
            <h2>Additional information</h2>
            <hr>
            <div class="row">
                 <div class="col-md-6">
                        <div class="form-group">
                                {{Form::label('cost', 'Cost')}}
                                {{Form::number('cost',$book->cost,['class' => 'form-control', 'placeholder' => 'Cost'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('edition', 'Edition')}}
                            {{Form::text('edition',$book->edition,['class' => 'form-control', 'placeholder' => 'Edition'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('addedentries', 'Added Entries (if more Authors/Subject)')}}
                                {{Form::text('addedentries',$book->added_entries,['class' => 'form-control', 'placeholder' => 'Added'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('typeofmat', 'Type of Material')}}
                                {{Form::text('typeofmat',$book->type_of_material,['class' => 'form-control', 'placeholder' => 'Type of Material','list' => 'datalist', 'autocomplete' => 'off'])}}
                                <datalist id="datalist">
                                        <option value="Book">
                                        <option value="Magazine">
                                        <option value="Article">
                                </datalist>
                        </div>
                   
                </div> 
                <div class="col-md-6">
                        <div class="form-group">
                                {{Form::label('includes', 'Includes')}}
                                {{Form::text('includes',$book->includes,['class' => 'form-control', 'placeholder' => 'Includes'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('remarks', 'Remarks')}}
                                {{Form::text('remarks',$book->remarks,['class' => 'form-control', 'placeholder' => 'Remarks'])}}
                        </div>
                        
                        <a href="/books/{{$book->id}}" class="btn btn-danger">Cancel</a>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Update', ['class' => 'btn btn-info float-right'])}}

                </div>

            </div>
        {{ Form::close() }}
    </div>
@endsection