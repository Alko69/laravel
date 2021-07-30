<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   // public function getBookInfos()
   // {
   //    $books = Book::all();
   //    return $this->id;
   // }
   
   public function store(Request $request)
   {
      $book = new Book;
      $book->title = $request->input('title');
      $book->author = $request->input('author');
      $book->publication_year = $request->input('publication_year');
      $book->genre = $request->input('genre');

      $book->save();

      return view('addBook');
   }
}
