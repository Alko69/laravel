<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Author;

class ActionController extends Controller
{
    public function addBook(Request $request) 
    {
        $book = new Book;
        dd($request);  
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->publication_year = $request->publication_year;
        $book->synopsis = $request->synopsis;
        $book->save();
        $book->genres()->attach($request->genres);
        return redirect('bookList');  //redirige sur une route
    }

    public function deleteBook(Request $request)
    {
        $book = Book::findOrFail($request->id);
        $book->genres()->detach();
        $book->delete();
        return redirect('bookList');
    }

    public function editBook(Request $request)
    {
        $book = Book::findOrFail($request->id);
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->publication_year = $request->publication_year;
        $book->synopsis = $request->synopsis;
        $book->save();
        return redirect('bookList');
    }
}
