<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Input, Redirect; 
use App\Book;

class booksController extends Controller
{
    //
    // getでhello/にアクセスされた場合
    public function getIndex()
    {
        $books = Book::all();
        return view('layouts/books',[
            'books' => $books
        ]);
    }
    public function postBooks(Request $request, $name)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
        ]);

        if($validator->fails()){
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $book = new Book; //ORM
        $book->title = $request->name;
        $book->save();

        return redirect('/');
    }

    public function deleteBooks(Book $book)
    {
        $book->delete();

        return redirect('/');
    }

    
}
