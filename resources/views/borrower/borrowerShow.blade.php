@extends('layouts.app')

@section('content')
    <div class="container">
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
                                  <tr class="table-success">
                                    <td>Book About Something</td>
                                    <td>2019-08-01</td>
                                    <td><a href="#" class="btn btn-link">View</a></td>
                                  </tr>
                                  <tr class="table-success">
                                        <td>Book About Something</td>
                                        <td>2019-08-01</td>
                                        <td><a href="#" class="btn btn-link">View</a></td>
                                  </tr>
                                  <tr class="table-success">
                                        <td>Book About Something</td>
                                        <td>2019-08-01</td>
                                        <td><a href="#" class="btn btn-link">View</a></td>
                                  </tr>                                  
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
                                      <tr class="table-danger">
                                        <td>Book About Something</td>
                                        <td>2019-08-01</td>
                                        <td><a href="#" class="btn btn-link">View</a></td>
                                      </tr>
                                      <tr class="table-danger">
                                            <td>Book About Something</td>
                                            <td>2019-08-01</td>
                                            <td><a href="#" class="btn btn-link">View</a></td>
                                      </tr>
                                      <tr class="table-danger">
                                            <td>Book About Something</td>
                                            <td>2019-08-01</td>
                                            <td><a href="#" class="btn btn-link">View</a></td>
                                      </tr>                                  
                                    </tbody>
                                  </table>
                        </div>

            <a href="/borrower" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </div>
@endsection