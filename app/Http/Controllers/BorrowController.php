<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Borrower;
use App\Borrow;

class BorrowController extends Controller
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
    {   
        $records = Borrow::orderBy('id', 'desc')->get();

        return view('borrow.borrowIndex')->with('records', $records);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Books::where('status', '=', 'in')->get();
        $borrowers = Borrower::orderBy('id', 'desc')->get();
        $data = array('books' => $books, 'borrowers' => $borrowers);
        return view('borrow.borrowCreate')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Parse the book and the borrower to get the isbn and borrower id
        $book_isbn = preg_split('/[:]/', $request->input('book_title'));
        $borrower_id = preg_split('/[-]/', $request->input('borrower'));

        // Find the borrower to confirm
        $borrower = Borrower::find($borrower_id[1]);
        if(!$borrower){
            return redirect('/borrow')->with('error', 'Borrower not found!');
        }
        // Find the book and update its status and user_id
        $book = Books::where('ISBN', '=', $book_isbn[1])->where('status', '=', 'in')->first();
        if(!$book){
            return redirect('/borrow')->with('error', 'Book not found!');
        }
        // Set the status and the user id
        $book->status = 'out';
        $book->borrower_id = $borrower->id;
        $book->save();

        // Create a borrow data
        $borrow = new Borrow;
        $borrow->borrower_id = $borrower->id;
        $borrow->books_id = $book->id;
        $borrow->date_borrowed = $request->input('date');
        $borrow->status = 'borrowed';
        $borrow->save();


        return redirect('/borrow')->with('success', 'The book was successfully borrowed!');
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
        $books = Books::where('status', '=', 'in')->get();
        $borrowers = Borrower::orderBy('id', 'desc')->get();
        $data = array( 'book' => $book, 'books' => $books, 'borrowers' => $borrowers);

        return view('borrow.borrowShow')->with($data);
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

    public function returned (Request $request){
        $book_id = $request->input('book_id');

        // Find the book and set the status to in and borrower id to null
        $book = Books::find($book_id);
        $book->status = 'in';
        $book->borrower_id = null;
        $book->save();

        // Find its record from the borrow table and set the status and date returned
        $borrow = Borrow::where('books_id', '=', $book_id)->where('status', '=', 'borrowed')->first();
        $borrow->date_returned = date('Y-m-d');
        $borrow->status = 'returned';
        $borrow->save();

        return redirect('/borrow')->with('success', 'The book was successfully returned!');
    }

    public function print(){
        $records = Borrow::orderBy('id', 'desc')->get();

        return view('borrow.borrowPrint')->with('records', $records);
    }
}
