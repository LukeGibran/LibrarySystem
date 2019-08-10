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




Auth::routes();


// Custom Routes
Route::get('/', 'NonAdminController@index');
Route::get('/home', 'AdminController@home')->name('home');
Route::post('/borrow/returned', 'BorrowController@returned');
Route::get('/borrow/print', 'BorrowController@print');
Route::get('/books/print', 'BooksController@print');
Route::get('/books/search/{type}', 'BooksController@search');
Route::get('/search/{type}', 'NonAdminController@search');
Route::get('/view/{id}', 'NonAdminController@view');

// Resources Routes
Route::resource('books', 'BooksController');
Route::resource('borrower', 'BorrowersController');
Route::resource('borrow', 'BorrowController');