@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center items-center w-full py-5 gap-5">
    {{-- Navigation --}}
    <section class="max-w-6xl w-full flex flex-row justify-between items-center">
        <div class="flex flex-row gap-3">
            <a href="{{ route('books.index') }}" class="underline hover:text-primary-light inline-flex items-center">
                <x-heroicon-m-arrow-small-left class="h-5 w-5" />
                Voltar
            </a>
        </div>
    </section>

    {{-- Content --}}
    <section class="max-w-6xl w-full flex flex-col">
        <div>
            <h1 class="text-lg font-bold tracking-widest uppercase">Dados do Livro</h1>
        </div>

        <div class="flex flex-col gap-2">
            <div class="flex flex-row gap-1">
                <span>ISBN: </span>
                <span>{{ $book->isbn }}</span>
            </div>
            <div class="flex flex-row gap-1">
                <span>Título: </span>
                <span>{{ $book->title }}</span>
            </div>
            <div class="flex flex-row gap-1">
                <span>Editora: </span>
                <span>{{ $book->publisher }}</span>
            </div>
            <div class="flex flex-row gap-1">
                <span>Autor(es): </span>
                @foreach ($book->authors as $author)   
                <span>{{ $author->name }}@if (!$loop->last), @endif</span>
                @endforeach
            </div>
            <div class="flex flex-row gap-1">
                <span>Categoria(s): </span>
                @foreach ($book->categories as $category)
                <span>{{ $category->name }}@if (!$loop->last), @endif</span>
                @endforeach
            </div>
            <div class="flex flex-row gap-1">
                <span>Quantidade de páginas: </span>
                <span>{{ $book->page_count }} páginas</span>
            </div>
            <div class="flex flex-row gap-1">
                <span>Status: </span>
                <span>{{ ucfirst($book->status) }}</span>
            </div>

            <div class="flex flex-row gap-2">
                <a href="{{ route('books.edit', $book->id) }}" class="bg-primary text-slate-50 px-3 py-0.5 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Editar</a>
                <form action="{{ route('books.delete', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="bg-red-900 text-slate-50 px-3 py-0.5 rounded-md w-fit hover:bg-red-700 cursor-pointer transition duration-200 shadow">Excluir</button>
                </form>
            </div>
        </div>
        
    </section>
</div>

@endsection