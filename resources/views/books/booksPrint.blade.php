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
    <h1>All Books</h1>
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
                                    <th scope="col">Cost</th>
                                    <th scope="col">Edition</th>
                                    <th scope="col">Added Entries</th>
                                    <th scope="col">Type of Material</th>
                                    <th scope="col">Includes</th>
                                    <th scope="col">Remarks</th>
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
                                    <td>{{$book->cost}}</td>
                                    <td>{{$book->edition}}</td>
                                    <td>{{$book->added_entries}}</td>
                                    <td>{{$book->type_of_material}}</td>
                                    <td>{{$book->includes}}</td>
                                    <td>{{$book->remarks}}</td>                                  @endforeach
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
<meta http-equiv='refresh' content='0;url=/books/'>
</body>
</html>
