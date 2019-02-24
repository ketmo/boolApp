<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class books extends Controller
{
        // getでhello/にアクセスされた場合
        public function getIndex()
        {
            $books = Book::all();
            return view('layouts/books',[
                'books' => $books
            ]);
        }
    
        // getでhello/goodmorningにアクセスされた場合
        public function getGoodmorning()
        {
        }
    
        // postでhello/goodmorningにアクセスされた場合
        public function postGoodmorning()
        {
        }
    
        // getでhello/goodmorning/messageでアクセスされた場合
        // public function getGoodmorning($message)
        // {
        // }
}
