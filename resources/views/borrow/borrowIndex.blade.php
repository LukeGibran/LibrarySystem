@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('includes.messages')

            <h1>All Records</h1>
            <div class="card">
                <div class="card-header">
                   Records Data Table
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                          <a href="/books/create" class="btn btn-success">Borrow a book<i class="fas fa-plus"> </i></a>

                        </div>
                        <div class="col-sm-3">
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
                                    <th scope="col">Book Title</th>
                                    <th scope="col">Borrowed by</th>
                                    <th scope="col">Date Borrowed</th>
                                    <th scope="col">Date Returned</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody id="dataTable-body">
                                  @foreach ($records as $record)
                                      
                                  <tr>
                                    <td>{{$record->books->title}}</td>
                                    <td>{{$record->borrower->fname.' '.$record->borrower->lname}}</td>
                                    <td>{{date('F-d-Y', strtotime($record->date_borrowed))}}</td>
                                    <td>{{$record->date_returned ? date('F-d-Y', strtotime($record->date_returned)) : 'Not yet returned'}}</td>
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
                                                <ul class="pagination justify-content-end">
                                                  
                                                </ul>
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

