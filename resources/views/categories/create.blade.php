@extends('layouts.app')

@section('content')
    
<div>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nome da Categoria</label>
            <input class="border border-black" type="text" name="name" id="name" required>
        </div>

        <button type="submit" class="bg-slate-300 cursor-pointer">Cadastrar</button>
    </form>
</div>

@endsection