@extends('layouts.app')

@section('content')
<style>
 a:hover > h2{
    background: #90ee90;
 }
</style>
    <div class="container">
        @include('includes.messages')
        <div class="row justify-content-center">
            <img src="/storage/images/SDM.png" alt="" style="width: 160px;height: 80px;">
        </div>
        <div class="row justify-content-center mb-2">
            <h1>SDM Library System</h1>
        </div>
        <hr>

            <div class="row justify-content-center mb-3">
                <div class="col-md-4 col-sm-5">
                    <div class="">
                        <a href="/search/book" class="text-dark pb-5"><h2 class="h3-responsive border p-3 "> <i class="fas fa-book"></i> Books</h2></a>
                        <br>
                        <a href="/search/magazine" class="text-dark"><h2 class="h3-responsive  border p-3"> <i class="fas fa-sticky-note"></i> Magazines</h2></a>
                        <br>

                        <a href="/search/article" class="text-dark"><h2 class="h3-responsive  border p-3"> <i class="fas fa-file-alt"></i> Articles</h2></a>
                        <br>

                        <a href="/search/journal" class="text-dark"><h2 class="h3-responsive  border p-3"> <i class="fas fa-pager"></i> Journals</h2></a>

                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="">
                        <a href="/search/periodical" class="text-dark"><h2 class="h3-responsive  border p-3"> <i class="fas fa-book-open"></i> Periodicals</h2></a>
                        <br>

                        <a href="/search/encyclopedia" class="text-dark pb-5"><h2 class="h3-responsive  border p-3"> <i class="fas fa-atlas"></i> Encyclopedia</h2></a>
                        <br>
                        <a href="/search/dictionary" class="text-dark"><h2 class="h3-responsive  border p-3"> <i class="fas fa-spell-check"></i> Dictionary</h2></a>
                        <br>

                        <a href="/search/almanac" class="text-dark"><h2 class="h3-responsive  border p-3"> <i class="fas fa-book-reader"></i> Almanac</h2></a>


                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <a href="/search/newspaper_clipping" class="text-dark"><h2 class="h3-responsive  border p-3"> <i class="fas fa-newspaper"></i> Newspaper Clippings</h2></a>
                        <br>
                </div>

    </div>

@endsection


