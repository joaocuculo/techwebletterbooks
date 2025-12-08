@extends('layouts.app')

@section('content')
    
<div>
    <div>
        <a href="{{ route('authors.show', $author->id) }}">Voltar</a>
    </div>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome do Autor</label>
            <input class="border border-black" type="text" name="name" id="name" value="{{ $author->name }}" required>
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="ativo" {{ $author->status === 'ativo' ? 'selected' : '' }}>Ativo</option>
                <option value="inativo" {{ $author->status === 'inativo' ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <button type="submit" class="bg-slate-300 cursor-pointer">Salvar</button>
    </form>
</div>

@endsection
