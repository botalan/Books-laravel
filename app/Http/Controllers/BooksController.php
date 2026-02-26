<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\books;

class BooksController extends Controller
{
        public function create()
    {
        return view("books.create");
    }
    public function store(Request $request)
    {
        Post::create([
        'name' => $request->input("name"),
        "main"=>$request->input("main")]);
        return "Success";
    }
    public function index()
    {
        return Post::all();
    }
}
