<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $books = Books::orderBy('id', 'desc')->get();
        return view('books.booksIndex')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.booksCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'subject' => 'required',
            'dateofpub' => 'required',
            'publishingcomp' => 'required',
            'placeofpub' => 'required',
            'isbn' => 'required'
        ]);


        
        for($x=0;$x < $request->input('no_copy');$x++){

            $books = new Books;
            $books->title = $request->input('title');
            $books->author = $request->input('author');
            $books->subject = $request->input('subject');
            $books->date_publish = $request->input('dateofpub');
            $books->publishing_comp = $request->input('publishingcomp');
            $books->place_of_publication = $request->input('placeofpub');
            $books->ISBN = $request->input('isbn');
            $books->status = 'in';
            $books->cost = $request->input('cost');
            $books->edition = $request->input('edition');
            $books->added_entries = $request->input('addedentries');
            $books->type_of_material = $request->input('typeofmat');
            $books->includes = $request->input('includes');
            $books->remarks = $request->input('remarks');
            $books->no_of_copy = $request->input('no_copy');
            $books->save();
        }
        return redirect('/books')->with('success', 'Book Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Books::find($id);
        return view('books.bookShow')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
