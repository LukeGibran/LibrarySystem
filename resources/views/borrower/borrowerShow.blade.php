@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row mb-3">
            <div class="col-md-12">
                <h1>{{$borrower->id}}. {{$borrower->fname.' '.$borrower->lname}}</h1>
                <hr>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                        <h3>Books returned</h3>
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Book Title</th>
                                    <th scope="col">Date Returned</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($borrower->borrow as $record)
                                      @if ($record->status == 'returned')
                                      <tr class="table-success">

                                      <td>{{$record->books->title}}</td>
                                      <td>{{date('F-d-Y', strtotime($record->date_returned))}}</td>
                                      <td><a href="/books/{{$record->books->id}}" class="btn btn-link" style="padding:0">View</a></td>
                                    </tr>                                

                                      @endif
                                    @endforeach

                                </tbody>
                              </table>
                    </div>
    
                    <div class="col-md-6 float-right">
                            <h3>Books Borrowed</h3>
                            <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Book Title</th>
                                        <th scope="col">Date Borrowed</th>
                                        <th scope="col"></th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                          @foreach ($borrower->borrow as $record)
                                          @if ($record->status == 'borrowed')
                                          <tr class="table-danger">

                                          <td>{{$record->books->title}}</td>
                                          <td>{{date('F-d-Y', strtotime($record->date_borrowed))}}</td>
                                          <td><a href="/books/{{$record->books->id}}" class="btn btn-link" style="padding:0">View</a></td>
                                        </tr>                                  

                                          @endif
                                        @endforeach
                                    </tbody>
                                  </table>
                        </div>

            <a href="/borrower" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </div>
@endsection