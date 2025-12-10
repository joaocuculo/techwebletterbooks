@extends('layouts.app')

@section('content')
    
<div>
    <div>
        <a href="{{ route('categories.show', $category->id) }}">Voltar</a>
    </div>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome da Categoria</label>
            <input class="border border-black" type="text" name="name" id="name" value="{{ $category->name }}" required>
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="ativo" {{ $category->status === 'ativo' ? 'selected' : '' }}>Ativo</option>
                <option value="inativo" {{ $category->status === 'inativo' ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <button type="submit" class="bg-slate-300 cursor-pointer">Salvar</button>
    </form>
</div>

@endsection
