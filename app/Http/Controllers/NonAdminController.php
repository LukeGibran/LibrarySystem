<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class NonAdminController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search($type){
        $books = Books::where('type_of_material', '=', $type)->orderBy('id', 'desc')->get();
        $data = array('type' => $type, 'books' => $books);
        return view('search')->with($data);
    }

    public function view($id){
        $book = Books::find($id);
        if(!$book){
            return redirect('/')->with('error', 'Book not found!');
        }
        return view('view')->with('book', $book);
    }

}
