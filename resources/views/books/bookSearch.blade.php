@extends('layouts.app')

@section('content')
<div class="container">
<h1>All {{$type.'s'}}</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('includes.messages')
            <div class="card">
                <div class="card-header">
                    Books Data Table
                    <ul class="navbar-nav float-right" >
                        <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Type of Material <span class="caret"></span>
                                    </a>
        
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/books/" >
                                        All
                                    </a>
                                    <a class="dropdown-item" href="/books/search/book">
                                            Books
                                        </a>
                                        <a class="dropdown-item" href="/books/search/magazine">
                                            Magazines
                                        </a>
                                        <a class="dropdown-item" href="/books/search/article">
                                            Articles
                                        </a>
                                    </div>
                                </li>
                        </ul>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                          <a href="/books/create" class="btn btn-success">Add <i class="fas fa-plus"> </i></a>
                          <a href="/books/print" class="btn btn-blue-grey">Print <i class="fas fa-print "></i></a>
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
                                    <option value="Title">Title</option>
                                    <option value="Author">Author</option>
                                    <option value="Subject">Subject</option>
                                    <option value="DatePublish">Date Publish</option>
                                    <option value="PublishingCompany">Publishing Company</option>
                                    <option value="PlaceofPublication">Place of Publication</option>
                                    <option value="ISBN">ISBN</option>
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
                                    <th scope="col">Author</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Date Publish</th>
                                    <th scope="col">Publishing Company</th>
                                    <th scope="col">Place of Publication</th>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">View</th>
                                  </tr>
                                </thead>
                                <tbody id="dataTable-body">
                                  @foreach ($books as $book)
                                      
                                  <tr>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->subject}}</td>
                                    <td>{{$book->date_publish}}</td>
                                    <td>{{$book->publishing_comp}}</td>
                                    <td>{{$book->place_of_publication}}</td>
                                    <td>{{$book->ISBN}}</td>
                                    <td>{{$book->status}}</td>
                                  <td><a href="/books/{{$book->id}}" class="btn btn-sm btn-primary">View</a></td>
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

