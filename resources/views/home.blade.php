@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-4">
          <a href="/books/" class="nav-link text-success">
            <div class="card">
              <div class="card-body text-center">
                <hr>
                <i class="fas fa-search fa-5x mb-3"></i>
                <h1 class="">Search</h1>
                <hr>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
            <a href="/books/create" class="nav-link text-primary">
              <div class="card">
                <div class="card-body text-center">
                  <hr>
                  <i class="fas fa-plus-circle fa-5x mb-3 "></i>
                  <h1 class="">Add Books</h1>
                  <hr>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4">
              <a href="/borrow/create" class="nav-link " style="color: #654321 !important">
                <div class="card">
                  <div class="card-body text-center">
                    <hr>
                      <i class="fas fa-book fa-5x mb-3"></i>
                    <h1 class="">Borrow</h1>
                    <hr>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-4">
              <a href="/borrow" class="nav-link text-dark ">
                <div class="card">
                  <div class="card-body text-center">
                    <hr>
                      <i class=" fas fa-file-invoice fa-5x mb-3"></i>
                    <h1 class="">Records</h1>
                    <hr>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="/borrower/" class="nav-link text-dark">
                <div class="card">
                  <div class="card-body text-center">
                    <hr>
                      <i class="fas fa-id-card fa-5x mb-3"></i>
                    <h1 class="">Borrowers</h1>
                    <hr>
                  </div>
                </div>
              </a>
            </div>
    </div>
</div>

@endsection
