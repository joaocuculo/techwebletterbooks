@extends('layouts.app')

@section('content')

<div>
    <div>
        <a href="{{ route('books.index') }}">Voltar</a>
    </div>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label for="isbn">ISBN</label>
            <input class="border border-black" type="text" name="isbn" id="isbn" required>
        </div>
        <div>
            <label for="title">Título</label>
            <input class="border border-black" type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="publisher">Editora</label>
            <input class="border border-black" type="text" name="publisher" id="publisher" required>
        </div>
        <div>
            <label for="page_count">Quantidade de páginas</label>
            <input class="border border-black" type="number" min="0" name="page_count" id="page_count" required>
        </div>
        <div>
            <label for="author">Autor</label>
            <select class="border border-black" name="authors[]" id="author" multiple required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="category">Categoria</label>
            <select class="border border-black" name="categories[]" id="category" multiple required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-slate-300 cursor-pointer">Cadastrar</button>
    </form>
</div>

@endsection
