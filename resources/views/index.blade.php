@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.messages')
        <div class="row justify-content-center">
            <img src="/storage/images/SDM.png" alt="" style="width: 160px;height: 80px;">
        </div>
        <div class="row justify-content-center mb-2">
            <h1>SDM Library System</h1>
        </div>
        <hr>
        {{-- <h3 class="h3-responsive">Select type: </h3>
        <form action="/search/" method="GET"> --}}
            <div class="row justify-content-center mb-3 offset-1">
                <div class="col-md-3 col-sm-5">
                    <div class="">
                        <a href="/search/book" class="text-dark pb-5"><h2 class="h3-responsive"> <i class="fas fa-book"></i> Books</h2></a>
                        <hr>
                        <a href="/search/magazine" class="text-dark"><h2 class="h3-responsive"> <i class="fas fa-sticky-note"></i> Magazines</h2></a>
                        <hr>

                        <a href="/search/article" class="text-dark"><h2 class="h3-responsive"> <i class="fas fa-file-alt"></i> Articles</h2></a>
                        <hr>

                        <a href="/search/journal" class="text-dark"><h2 class="h3-responsive"> <i class="fas fa-pager"></i> Journals</h2></a>
                        <hr>
                        <a href="/search/periodical" class="text-dark"><h2 class="h3-responsive"> <i class="fas fa-book-open"></i> Periodicals</h2></a>
                        <hr>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="">
                        <a href="/search/encyclopedia" class="text-dark pb-5"><h2 class="h3-responsive"> <i class="fas fa-atlas"></i> Encyclopedia</h2></a>
                        <hr>
                        <a href="/search/dictionary" class="text-dark"><h2 class="h3-responsive"> <i class="fas fa-spell-check"></i> Dictionary</h2></a>
                        <hr>

                        <a href="/search/almanac" class="text-dark"><h2 class="h3-responsive"> <i class="fas fa-book-reader"></i> Almanac</h2></a>
                        <hr>

                        <a href="/search/newspaper_clipping" class="text-dark"><h2 class="h3-responsive"> <i class="fas fa-newspaper"></i> Newspaper Clippings</h2></a>
                        <hr>
                    </div>
                </div>
                    {{-- <div class="col-md-8">
                            <select class="browser-default custom-select custom-select-lg mb-3" name="selOption">
                                    <option value="Book">Books</option>
                                    <option value="Magazine">Magazines</option>
                                    <option value="Article">Article</option>
                            </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success " style="margin:0">GO!</button>
                    </div>
            </div>
        </form> --}}

    </div>

@endsection


