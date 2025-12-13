@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center items-center w-full py-5 gap-5">
    {{-- Navigation --}}
    <section class="max-w-6xl w-full flex flex-row justify-between items-center">
        <div class="flex flex-row gap-3">
            <a href="{{ route('books.show', $book->id) }}" class="underline hover:text-primary-light inline-flex items-center">
                <x-heroicon-m-arrow-small-left class="h-5 w-5" />
                Voltar
            </a>
        </div>
    </section>

    {{-- Content --}}
    <section class="max-w-6xl w-full flex flex-col">
        <div>
            <h1 class="text-lg font-bold tracking-widest uppercase">Editar Livro</h1>
        </div>
        <form action="{{ route('books.update', $book->id) }}" method="POST" class="flex flex-col gap-2">
            @csrf
            @method('PUT')

            <div class="flex flex-col">
                <label for="isbn">ISBN</label>
                <input class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2" value="{{ $book->isbn }}" type="text" name="isbn" id="isbn" required>
            </div>
            <div class="flex flex-col">
                <label for="title">Título</label>
                <input class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2" value="{{ $book->title }}" type="text" name="title" id="title" required>
            </div>
            <div class="flex flex-col">
                <label for="author">Autor(es)</label>
                <select name="authors[]" id="author" class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2" size="1" multiple required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->authors->contains($author->id) ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col">
                <label for="category">Categoria(s)</label>
                <select name="categories[]" id="category" class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2" size="1" multiple required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $book->categories->contains($category->id) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col">
                <label for="publisher">Editora</label>
                <input class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2" value="{{ $book->publisher }}" type="text" name="publisher" id="publisher" required>
            </div>
            <div class="flex flex-col">
                <label for="page_count">Quantidade de páginas</label>
                <input class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2" value="{{ $book->page_count }}" type="number" min="0" name="page_count" id="page_count" required>
            </div>
            <div class="flex flex-col">
                <label for="status">Status</label>
                <select name="status" id="status" class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2">
                    <option value="ativo" {{ $book->status === 'ativo' ? 'selected' : '' }}>Ativo</option>
                    <option value="inativo" {{ $book->status === 'inativo' ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
            <button type="submit" class="bg-primary text-slate-50 px-3 py-0.5 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Salvar</button>
        </form>
    </section>
</div>

@endsection
