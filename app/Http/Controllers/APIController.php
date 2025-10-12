<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function searchBooks() {

        $apiKey = 'AIzaSyDmdv8NhXWEL84K7YfuCjxXQjWyq__poxw';

        $response = Http::get("https://www.googleapis.com/books/v1/volumes?q=flowers+inauthor:keyes&key={$apiKey}");

        $posts = $response->json();

        return view('welcome', compact('posts'));
    }
}
