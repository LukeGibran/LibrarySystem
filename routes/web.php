<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Custom Routes
Route::post('/borrow/returned', 'BorrowController@returned');
Route::get('/borrow/print', 'BorrowController@print');
Route::get('/books/print', 'BooksController@print');
Route::get('/books/search/{type}', 'BooksController@search');

Route::resource('books', 'BooksController');
Route::resource('borrower', 'BorrowersController');
Route::resource('borrow', 'BorrowController');