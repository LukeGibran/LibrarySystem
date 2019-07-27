@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
              <a href="#" class="nav-link text-dark">
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

    </div>
</div>

@endsection
