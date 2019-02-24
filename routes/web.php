<?php

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers;

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

// Route::get('/', function () {
//     // return view('books');
//     $books = Book::all();
//     return view('layouts/books',[
//         'books' => $books
//     ]);
// });

// Route::controller('/', 'booksController@getIndex');

Route::get('/', 'booksController@getIndex');
Route::post('/{name}', 'booksController@postBooks');
Route::delete('/book/{book}', 'booksController@deleteBooks');


// Route::get('hello', function () {
//     return 'hello!!';
//     // return view('/resources/views/layouts/books');
// });

// Route::get('/', function ($message) {
//     $books = Book::all();
//     // return view

// });
// ->where('message', '[A-Za-z]+');
