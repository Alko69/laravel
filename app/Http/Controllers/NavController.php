<?php

namespace App\Http\Controllers;
use App\Models\Book;
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
        return view('addBook');
    }
}