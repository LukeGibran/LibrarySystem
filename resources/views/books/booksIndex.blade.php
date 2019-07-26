@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('includes.messages')
            <div class="card">
                <div class="card-header">
                    Books Data Table
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                          <a href="/books/create" class="btn btn-success">Add Book <i class="fas fa-plus"> </i></a>
                            {{-- <label for="">
                                Show
                                <select name="" id="showOptions" class="form-control input-sm">
                                    <option value="1">10</option>
                                    <option value="2">25</option>
                                    <option value="5">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label> --}}
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
                                    <td><a href="#" class="btn btn-primary">View</a></td>
                                  </tr>
                                  
                                  @endforeach
                                </tbody>
                              </table>
                              <div class="row">
                                  <div class="col-sm-6">
                                    <div class="databaTable-info">1 to 10 of 89</div>
                                  </div>
                                  <div class="col-sm-6">
                                        <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-end">
                                                  <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                  </li>
                                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                  </li>
                                                </ul>
                                              </nav>
                                    </div>
                              </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
<script>
  const data = [];
  const tableHeader = document.querySelectorAll('th');
  const tableD = document.querySelectorAll('td');
  const tableBody = document.querySelector('tbody');

  const searchInput = document.querySelector('#searchInput');
  const searchBy = document.querySelector('#searchBy');

  // Get the data and set the state
  const getData = () => {
      // Store the table headers
    const headers = []
  tableHeader.forEach(header => {
      headers.push(header.innerHTML.replace(/\s+/g, ''));
    })

    // Store the table d
    const table_d = [];

    tableD.forEach(td => {
      table_d.push(td.innerHTML); 
    })

    // Store as on State (on data array)
      // Keep track of the row
      let countRow = 0;
    for(x=1;x <= (table_d.length / headers.length); x++){

      // To determine on what column
      let countColumn = 0;
      // The obj to be push to the state
      let objData = {}
      // The column name
      let columnName

      for(y=countRow;y < tableHeader.length * x; y++){
        columnName = headers[countColumn]

        objData[columnName] = table_d[y]

        countColumn++
      }
      data.push(objData)

      countRow += tableHeader.length;
    }
  }

  const displayData = (dataDisplay) => {
    tableBody.innerHTML = ''
    let markup;
    

    dataDisplay.forEach(data => {
      let tr = '<tr class="">'
    if(data.Status !== 'in'){
      tr = '<tr class="table-danger">'
    }
    markup = `
    ${tr}
    <td>${data.Title}</td>
    <td>${data.Author}</td>
    <td>${data.Subject}</td>
    <td>${data.DatePublish}</td>
    <td>${data.PublishingCompany}</td>
    <td>${data.PlaceofPublication}</td>
    <td>${data.ISBN}</td>
    <td>${data.Status}</td>
    <td>${data.View}</td>
    </tr>`
    tableBody.insertAdjacentHTML('beforeend', markup)


    } )
  }

  // Event Listener for Search
  searchInput.addEventListener('input', e => {
    const searchOptn = searchBy.value;
    const searchResult = data.filter(data => {
      return data[searchOptn].toLowerCase()
      .includes(e.target.value.toLowerCase());
    })

    displayData(searchResult)
  })
  
  getData();
  displayData(data)
  console.log(data)
</script>
@endsection

