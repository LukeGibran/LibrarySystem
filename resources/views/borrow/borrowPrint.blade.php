<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body onload="window.print()">
                <h1>All Records</h1>
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
                                      
                                <tr class="table-{{$record->status === 'returned' ? 'success' : 'danger'}}">
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
<meta http-equiv='refresh' content='0;url=/borrow/'>
</body>
</html>
