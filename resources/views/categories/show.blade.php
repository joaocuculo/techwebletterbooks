@extends('layouts.app')

@section('content')
    
<div>
    <div>
        <a href="{{ route('categories.index') }}">Voltar</a>
    </div>

    <div>
        <h1>Dados da categoria:</h1>
        <p>Nome: {{ $category->name }}</p>
        <p>Status: {{ $category->status }}</p>
        <a href="{{ route('categories.edit', $category->id) }}">edit</a>
        <form action="{{ route('categories.delete', $category->id) }}" method="POST">
            @csrf
            @method('DELETE')
            
            <button type="submit">Excluir</button>
        </form>
    </div>
</div>

@endsection