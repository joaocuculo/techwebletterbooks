@extends('layouts.app')

@section('content')
    
<div>
    <div>
        <a href="{{ route('authors.index') }}">Voltar</a>
    </div>

    <div>
        <h1>Dados do autor:</h1>
        <p>Nome: {{ $author->name }}</p>
        <p>Status: {{ $author->status }}</p>
        <a href="{{ route('authors.edit', $author->id) }}">edit</a>
        <form action="{{ route('authors.delete', $author->id) }}" method="POST">
            @csrf
            @method('DELETE')
            
            <button type="submit">Excluir</button>
        </form>
    </div>
</div>

@endsection