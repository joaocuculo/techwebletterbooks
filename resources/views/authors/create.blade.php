@extends('layouts.app')

@section('content')
    
<div>
    <div>
        <a href="{{ route('authors.index') }}">Voltar</a>
    </div>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nome do Autor</label>
            <input class="border border-black" type="text" name="name" id="name" required>
        </div>

        <button type="submit" class="bg-slate-300 cursor-pointer">Cadastrar</button>
    </form>
</div>

@endsection
