<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('index', ['books' => $books]);
    }

    public function show_books($id){
        $book_detail = Book::find($id);
        return view('book_detail', ['book' => $book_detail]);
    }
}
