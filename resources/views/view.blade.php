@extends('layouts.app')

@section('content')
    <div class="container">
      @include('includes.messages')
      <div class="row">
        <h1>{{$book->title}}</h1>
      </div>

        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Subject</th>
                <th scope="col">Date Publish</th>
                <th scope="col">Publishing Company</th>
                <th scope="col">Place of Publication</th>
                <th scope="col">ISBN</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @if ($book->status == 'out')
                         <tr class="table-danger">
                        <th>{{$book->title}}</th>
                        <td>{{$book->author}}</td>
                        <td>{{$book->subject}}</td>
                        <td>{{$book->date_publish}}</td>
                        <td>{{$book->publishing_comp}}</td>
                        <td>{{$book->place_of_publication}}</td>
                        <td>{{$book->ISBN}}</td>
                        <td>{{$book->status}}</td>
                        </tr>
                @else
                        <tr class="table-success">
                        <th>{{$book->title}}</th>
                        <td>{{$book->author}}</td>
                        <td>{{$book->subject}}</td>
                        <td>{{$book->date_publish}}</td>
                        <td>{{$book->publishing_comp}}</td>
                        <td>{{$book->place_of_publication}}</td>
                        <td>{{$book->ISBN}}</td>
                        <td>{{$book->status}}</td>
                        </tr>
                @endif

            </tbody>
          </table>
            <br>
          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Cost</th>
                    <th scope="col">Edition</th>
                    <th scope="col">Added Entries</th>
                    <th scope="col">Type of Material</th>
                    <th scope="col">Includes</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">No of Copy</th>
                    @if ($book->status == 'out')
                        <th scope="col">Borrowed by</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                    @if ($book->status == 'out')
                            <tr class="table-danger">
                            <td>{{$book->cost ? $book->cost : 'n/a'}}</td>
                            <td>{{$book->edition ? $book->edition : 'n/a'}}</td>
                            <td>{{$book->added_entries ? $book->added_entries : 'n/a'}}</td>
                            <td>{{$book->type_of_material ? $book->type_of_material : 'n/a'}}</td>
                            <td>{{$book->includes ? $book->includes : 'n/a'}}</td>
                            <td>{{$book->remarks ? $book->remarks : 'n/a'}}</td>
                            <td>{{$book->no_of_copy}}</td>
                            @if ($book->status == 'out')
                            <th scope="col">{{$book->borrower->fname.' '.$book->borrower->lname}}</th>
                            @endif
                            </tr>
                            </tr>
                    @else
                            <tr class="table-success">
                            <td>{{$book->cost ? $book->cost : 'n/a'}}</td>
                            <td>{{$book->edition ? $book->edition : 'n/a'}}</td>
                            <td>{{$book->added_entries ? $book->added_entries : 'n/a'}}</td>
                            <td>{{$book->type_of_material ? $book->type_of_material : 'n/a'}}</td>
                            <td>{{$book->includes ? $book->includes : 'n/a'}}</td>
                            <td>{{$book->remarks ? $book->remarks : 'n/a'}}</td>
                            <td>{{$book->no_of_copy}}</td>
  
                    @endif
    
                </tbody>
              </table>
              <a href="{{url()->previous()}}" class="btn btn-link"><i class="fas fa-arrow-left"></i> Back</a>

    </div>
@endsection