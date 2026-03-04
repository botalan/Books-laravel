<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;


class BooksController extends Controller
{
    public function create()
    {
        return view("books.create");
    }

    public function store(Request $request)
    {
        Book::create([
            'name' => $request->input("name"),
            'main' => $request->input("main"),
        ]);
        return "<h1>".$request->input("name")."</h1><h2>".$request->input("main")."</h2>";
    }

    public function index()
    {
        $books = Book::all();
        return view("books.index",["allBooks"=>$books]);
    }
    public function show($id)
    {
        return Book::find($id);
        return view('books.show', compact('book'));
    }
}
