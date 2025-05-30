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
       try {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'released_at' => 'required|date',
        ]);
    

        Book::create($validatedData);

        return redirect()->route('books.index')->with('success', 'Book created!');
    }
    catch (\Exception $e) {
        \Log::debug('Radās kļūda: ' . $e->getMessage());
       
        return back()
            ->withErrors(['error' => 'Radās kļūda: ' . $e->getMessage()])
            ->withInput();
    }} 
    
    

    // public function show( $id) {
    //     $book = Book::find($id);
    //     return view('books.show', compact('book'));
    // }
    public function show(Book $book) {
        
        return view('books.show', ['book' => $book]);
    }
    

    public function edit(Book $book) {
       // $book = Book::find($id);
        return view('books.edit', ['editBook' => $book]);
    }

    public function destroy(Book $book) {
        // $book = Book::find($id);
        $book->delete();

        // Redirect uz named route
        return redirect()->route('books.index');
    }

    public function update(Request $request, Book $book) {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'released_at' => 'required|date',
        ]);
    
       // $book = Book::findOrFail($id);
        $book->update($validatedData);
    
        return redirect()->route('books.index')->with('success', 'Book updated!');
    }
    

}

