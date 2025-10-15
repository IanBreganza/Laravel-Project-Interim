<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    public function index(){
        // route --> /library/
        $authors = Author::orderBy('id', 'desc')->get();
        // fetch all records and pass into index view
        return view('library.index', ["authors" => $authors]);
        // fetch all records and pass into show view
    }

    public function show($id){
        // route --> /library/{id}
        $author = Author::findOrFail($id);
        // fetch record by id
        return view('library.show', ["author" => $author]);
        // fetch record by id and pass into show view
    }

    public function request(){
        // route --> /library/request
        return view('library.request');
        // show request form
    }

    public function store(){
        // route --> /library/ (POST)
        // handle form submission
        // validate and save the request
    }
}
