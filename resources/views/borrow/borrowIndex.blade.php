@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('includes.messages')

            <h1>All Records</h1>

            <div class="card">
                <div class="card-header">
                   <div class="float-left">
                    <h6>Legends:</h6>
                    Returned: <i class="fas fa-square-full text-success mr-3"></i>
                    Borrowed: <i class="fas fa-square-full text-danger mr-3"></i>

                    Overdue: <i class="fas fa-square-full text-warning"></i>

                  </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                          <a href="/borrow/create" class="btn btn-success">Borrow <i class="fas fa-book"> </i></a>
                          <a href="/borrow/print" class="btn btn-blue-grey">Print <i class="fas fa-print "></i></a>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="float-right">
                                Show
                                <select name="" id="showOptions" class="form-control input-sm">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                </select>
                            </label> 
                        </div>
                        <div class="col-sm-6">


                            <label for="">
                                Search By
                                <select name="" id="searchBy" class="form-control input-sm ">
                                    <option value="BookTitle">Book Title</option>
                                    <option value="Borrowedby">Borrowed by</option>
                                    <option value="DateBorrowed">Date Borrowed</option>
                                    <option value="DateReturned">Date Returned</option>
                                    <option value="DateDue">Date Due</option>
                                    <option value="Status">Status</option>
                                </select>
                            </label>
                            <label class="float-right">
                                Search:
                                <input type="search" class="form-control input-sm" id="searchInput">
                            </label>
                        </div>
                    </div>
                        <table class="table table-bordered   table-hover">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Borrowed by</th>
                                    <th scope="col">Date Borrowed</th>
                                    <th scope="col">Date Returned</th>
                                    <th scope="col">Date Due</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody id="dataTable-body">
                                  @foreach ($records as $record)
                                      
                                  <tr>
                                  <td><a href="/books/{{$record->books->id}}"> {{$record->books->title}} </a></td>
                                    <td>{{$record->borrower->fname.' '.$record->borrower->lname}}</td>
                                    <td>{{date('F-d-Y', strtotime($record->date_borrowed))}}</td>
                                    <td>{{$record->date_returned ? date('F-d-Y', strtotime($record->date_returned)) : 'Not yet returned'}}</td>
                                    <td>{{date('F-d-Y', strtotime($record->date_due))}}</td>
                                    <td>{{$record->status}}</td>
                                  </tr>
                                  
                                  @endforeach
                                </tbody>
                              </table>
                              <div class="row">
                                  <div class="col-sm-6">
                                    <div class="databaTable-info"></div>
                                  </div>
                                  <div class="col-sm-6">
                                        <nav aria-label="Page navigation example">
                                          <ul class="pagination justify-content-end"></ul>
                                        </nav>
                                    </div>
                              </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
<script src="{{ asset('js/dataTable.js') }}" defer></script>

@endsection

