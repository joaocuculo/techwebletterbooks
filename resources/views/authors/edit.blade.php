@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center items-center w-full py-5 gap-5">
    {{-- Navigation --}}
    <section class="max-w-6xl w-full flex flex-row justify-between items-center">
        <div class="flex flex-row gap-3">
            <a href="{{ route('authors.show', $author->id) }}" class="underline hover:text-primary-light inline-flex items-center">
                <x-heroicon-m-arrow-small-left class="h-5 w-5" />
                Voltar
            </a>
        </div>
    </section>

    {{-- Content --}}
    <section class="max-w-6xl w-full flex flex-col">
        <div>
            <h1 class="text-lg font-bold tracking-widest uppercase">Editar Autor</h1>
        </div>
        <form action="{{ route('authors.update', $author->id) }}" method="POST" class="flex flex-col gap-2">
            @csrf
            @method('PUT')

            <div class="flex flex-col">
                <label for="name">Nome do Autor</label>
                <input class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2" value="{{ $author->name }}" type="text" name="name" id="name" required>
            </div>
            <div class="flex flex-col">
                <label for="status">Status</label>
                <select name="status" id="status" class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2">
                    <option value="ativo" {{ $author->status === 'ativo' ? 'selected' : '' }}>Ativo</option>
                    <option value="inativo" {{ $author->status === 'inativo' ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
            <button type="submit" class="bg-primary text-slate-50 px-3 py-0.5 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Salvar</button>
        </form>
    </section>
</div>

@endsection
