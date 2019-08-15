@extends('layouts.app')

@section('content')
<div class="container">
        <a href="/" class="btn btn-link" style="padding-left:3px"><i class="fas fa-arrow-left"></i> Back</a>
            <h1>All 
                {{
                $type == 'dictionary' ? 'Dictionaries' : str_replace('_', ' ',ucfirst($type)).'s'
                }}</h1>

    <hr>
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('includes.messages')
            <div class="card">
                <div class="card-header">
                    Books Data Table
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-1">
                            <label for="">
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
                                  <td><a href="/view/{{$book->id}}" class="btn btn-sm btn-primary">View</a></td>
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

