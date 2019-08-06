@extends('layouts.app')

 @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Select a borrower</h1>
                <hr>
                @include('includes.messages')
                
                {{-- <input type="text" name="search" id="search" list="datalist1">
                <datalist id="datalist1">
                  <option value="Canada">
                  <option value="Denmark">
                  <option value="Boston">
                  <option value="Africa">
                </datalist> --}}
                <div class="card">
                        <div class="card-header">
                            Borrowers Data Table
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                  <a href="/borrower/create" class="btn btn-success">Add Borrower <i class="fas fa-plus"> </i></a>
        
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
                                            <option value="Firstname">Firstname</option>
                                            <option value="Lastname">Lastname</option>
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
                                            <th scope="col">Account #</th>
                                            <th scope="col">Firstname</th>
                                            <th scope="col">Lastname</th>
                                            <th scope="col">View</th>
                                          </tr>
                                        </thead>
                                        <tbody id="dataTable-body">
                                          @foreach ($borrowers as $borrower)
                                              
                                          <tr>
                                            <td>{{$borrower->id}}</td>
                                            <td>{{$borrower->fname}}</td>
                                            <td>{{$borrower->lname}}</td>
                                          <td><a href="/borrower/{{$borrower->id}}" class="btn btn-sm btn-primary">Select Borrower</a></td>
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