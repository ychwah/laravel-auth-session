<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
  public function index() {
    $books = Book::all();
    return view('books.index', compact('books'));
  }

  public function create() {
    return view('books.create');
  }

  public function store(Request $request) {
    $request->validate([
    'title' => 'required',
    'author' => 'required'
    ]);

    $query = Book::insert([
    'title' => $request->title,
    'author' => $request->author
    ]);

    return ($query) ? redirect('/') : redirect('/');
  }
}