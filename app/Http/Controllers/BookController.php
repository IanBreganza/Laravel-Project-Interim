<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        // route --> /library/
        $books = Book::orderBy('id', 'desc')->get();
        // fetch all records and pass into index view
        return view('library.index', ["books" => $books]);
        // fetch all records and pass into show view
    }

    public function show($id){
        // route --> /library/{id}
        $book = Book::findOrFail($id);
        // fetch record by id
        return view('library.show', ["book" => $book]);
        // fetch record by id and pass into show view
    }


    public function store(){
        // route --> /library/ (POST)
        // handle form submission
        // validate and save the request
        //saka na to
    }

    public function author()
    {
        $authors = Author::all();
        $authors = Author::orderBy('id', 'desc')->get();
        return view('library.author', ['authors' => $authors]);
    }

    public function publisher()
    {
        $publishers = Publisher::all();
        $publishers = Publisher::orderBy('id', 'desc')->get();
        return view('library.publisher', ['publishers' => $publishers]);
    }

}
