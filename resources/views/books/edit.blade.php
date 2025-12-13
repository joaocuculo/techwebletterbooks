@extends('layouts.app')

@section('content')

<div>
    <div>
        <a href="{{ route('books.show', $book->id) }}">Voltar</a>
    </div>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="isbn">ISBN</label>
            <input class="border border-black" type="text" name="isbn" id="isbn" value="{{ $book->isbn }}" required>
        </div>
        <div>
            <label for="title">Título</label>
            <input class="border border-black" type="text" name="title" id="title" value="{{ $book->title }}" required>
        </div>
        <div>
            <label for="publisher">Editora</label>
            <input class="border border-black" type="text" name="publisher" id="publisher" value="{{ $book->publisher }}" required>
        </div>
        <div>
            <label for="page_count">Quantidade de páginas</label>
            <input class="border border-black" type="number" min="0" name="page_count" id="page_count" value="{{ $book->page_count }}" required>
        </div>
        <div>
            <label for="author">Autor</label>
            <select class="border border-black" name="authors[]" id="author" size="1" multiple required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->authors->contains($author->id) ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="category">Categoria</label>
            <select class="border border-black" name="categories[]" id="category" size="1" multiple required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $book->categories->contains($category->id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="ativo" {{ $book->status === 'ativo' ? 'selected' : '' }}>Ativo</option>
                <option value="inativo" {{ $book->status === 'inativo' ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <button type="submit" class="bg-slate-300 cursor-pointer">Salvar</button>
    </form>
</div>

@endsection
