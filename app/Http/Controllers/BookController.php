<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with(['authors', 'categories'])->get();

        return view('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('books.create', compact('categories', "authors"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Book::create([
            'isbn' => $request->isbn,
            'title' => $request->title,
            'publisher' => $request->publisher,
            'page_count' => $request->page_count
        ]);

        $book->authors()->attach($request->authors);
        $book->categories()->attach($request->categories);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::with(['authors', 'categories'])->findOrFail($id);
        return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::with(['authors', 'categories'])->findOrFail($id);

        $authors = Author::all();
        $categories = Category::all();

        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);

        $book->update([
            'status' => $request->status,
            'isbn' => $request->isbn,
            'title' => $request->title,
            'publisher' => $request->publisher,
            'page_count' => $request->page_count
        ]);

        $book->authors()->sync($request->authors);
        $book->categories()->sync($request->categories);

        return redirect()->route('books.show', $book->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
