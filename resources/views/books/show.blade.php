@extends('layouts.app')

@section('content')

<div>
    <div>
        <a href="{{ route('books.index') }}">Voltar</a>
    </div>
    <div>
        <h1>Dados do Livro:</h1>
        <p>{{ $book->isbn }}</p>
        <p>{{ $book->title }}</p>
        <p>{{ $book->publisher }}</p>
        @foreach ($book->authors as $author)
            <span>{{ $author->name }}@if (!$loop->last), @endif</span>
        @endforeach
        @foreach ($book->categories as $category)
            <span>{{ $category->name }}@if (!$loop->last), @endif</span>
        @endforeach
        <p>{{ $book->page_count }}</p>
        <p>{{ $book->status }}</p>
    </div>
    <div>
        <a href="{{ route('books.edit', $book->id) }}">edit</a>
        <form action="{{ route('books.delete', $book->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit">Excluir</button>
        </form>
    </div>
</div>

@endsection