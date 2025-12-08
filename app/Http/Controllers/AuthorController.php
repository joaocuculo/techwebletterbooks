<?php

namespace App\Http\Controllers;

use App\Models\Author;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index')->with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Author::create([
            'name' => $request->name
        ]);

        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::find($id);
        return view('authors.show')->with('author', $author);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::find($id);
        return view('authors.edit')->with('author', $author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author = Author::find($id);

        $author->update([
            'name' => $request->name,
            'status' => $request->status
        ]);

        return redirect()->route('authors.show', $author->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::find($id);

        $author->delete();
        return redirect()->route('authors.index');
    }
}
