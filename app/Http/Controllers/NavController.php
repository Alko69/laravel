<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class NavController extends Controller
{
   
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function bookList()
    {
        $books = Book::all();
        return view('bookList', compact('books')); 

        // return view('bookList, ['books' => Book::all()] / 'books' => $books )
    }

    public function addBook()
    {
        $authors = Author::all()->sortBy('name');
        return view('addBook', ['authors' => $authors]);
    }

    public function book($id)
    {
        $book = Book::findOrFail($id);
        return view('book', ['book' => $book]);
    }

    public function editBook(Request $request)
    {
        $book = Book::findOrFail($request->id);
        $authors = Author::all()->sortBy('name');
        return view('editBook', ['info' => $book, 'authors' => $authors]);
    }
}