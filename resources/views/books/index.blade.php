@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center items-center w-full py-5 gap-5">
    {{-- Navigation --}}
    <section class="max-w-6xl w-full flex flex-row justify-between items-center">
        <div class="flex flex-row gap-3">
            <a href="{{ route('authors.index') }}" class="underline hover:text-primary-light">Autores</a>
            <a href="{{ route('categories.index') }}" class="underline hover:text-primary-light">Categorias</a>
        </div>
        <div class="flex flex-row w-full justify-end items-center">
            <a href="{{ route('books.create') }}" class="bg-primary text-slate-50 px-5 py-2 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Adicionar livro</a>
        </div>
    </section>

    {{-- Content --}}
    <section class="max-w-6xl w-full flex flex-col">
        <div class="flex flex-row gap-4 flex-wrap">
            @foreach ($books as $book)
            <a href="{{ route('books.show', $book->id) }}" class="flex flex-col border rounded-md px-4 py-3">
                <span class="text-base">{{ $book->title }}</span>
                @foreach ($book->authors as $author)
                    <span class="text-sm">{{ $author->name }}</span>
                @endforeach
                @foreach ($book->categories as $category)
                    <span class="text-sm">{{ $category->name }}</span>
                @endforeach
            </a>
            @endforeach
        </div>
    </section>
</div>

@endsection
