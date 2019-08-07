<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        if(!$book){
            return redirect('/books')->with('error', 'Book not found!');
        }
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
        $book = Books::find($id);
        if(!$book){
            return redirect('/books')->with('error', 'Book not found!');
        }
        return view('books.booksEdit')->with('book', $book);
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
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'subject' => 'required',
            'dateofpub' => 'required',
            'publishingcomp' => 'required',
            'placeofpub' => 'required',
            'isbn' => 'required'
        ]);

        $books = Books::find($id);

        // Produce another copy of the book
        if($request->input('no_copy') > $books->no_of_copy){
            $iteration = ($request->input('no_copy') - $books->no_of_copy);
            for($x=0;$x < $iteration;$x++){
                    $book = new Books;
                    $book->title = $request->input('title');
                    $book->author = $request->input('author');
                    $book->subject = $request->input('subject');
                    $book->date_publish = $request->input('dateofpub');
                    $book->publishing_comp = $request->input('publishingcomp');
                    $book->place_of_publication = $request->input('placeofpub');
                    $book->ISBN = $request->input('isbn');
                    $book->status = 'in';
                    $book->cost = $request->input('cost');
                    $book->edition = $request->input('edition');
                    $book->added_entries = $request->input('addedentries');
                    $book->type_of_material = $request->input('typeofmat');
                    $book->includes = $request->input('includes');
                    $book->remarks = $request->input('remarks');
                    $book->no_of_copy = $request->input('no_copy');
                    $book->save();     
            }
        }

        // update all the same copy of books info
        $copies = Books::where('isbn', '=', $books->ISBN)->get();
                
        foreach($copies as $book){
            $book->title = $request->input('title');
            $book->author = $request->input('author');
            $book->subject = $request->input('subject');
            $book->date_publish = $request->input('dateofpub');
            $book->publishing_comp = $request->input('publishingcomp');
            $book->place_of_publication = $request->input('placeofpub');
            $book->ISBN = $request->input('isbn');
            $book->cost = $request->input('cost');
            $book->edition = $request->input('edition');
            $book->added_entries = $request->input('addedentries');
            $book->type_of_material = $request->input('typeofmat');
            $book->includes = $request->input('includes');
            $book->remarks = $request->input('remarks');
            $book->no_of_copy = $request->input('no_copy');
            $book->save(); 
        }

        

        return redirect('/books/'.$books->id)->with('update', 'Book Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::find($id);

        $book->delete();

        return redirect('/books')->with('warning', 'The selected item has been deleted!');
    }

    public function print(){
        $books = Books::orderBy('id', 'desc')->get();
        return view('books.booksPrint')->with('books', $books);
    }

    public function search($type){
        $books = Books::where('type_of_material', '=', $type)->get();
        $data = array('type' => $type, 'books' => $books);
        return view('books.bookSearch')->with($data);
    }
}
