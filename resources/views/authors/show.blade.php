@extends('layouts.app')

@section('content')
    
<div class="flex flex-col justify-center items-center w-full py-5 gap-5">
    {{-- Navigation --}}
    <section class="max-w-6xl w-full flex flex-row justify-between items-center">
        <div class="flex flex-row gap-3">
            <a href="{{ route('authors.index') }}" class="underline hover:text-primary-light inline-flex items-center">
                <x-heroicon-m-arrow-small-left class="h-5 w-5" />
                Voltar
            </a>
        </div>
    </section>

    {{-- Content --}}
    <section class="max-w-6xl w-full flex flex-col">
        <div>
            <h1 class="text-lg font-bold tracking-widest uppercase">Dados do Autor</h1>
        </div>

        <div class="flex flex-col gap-2">
            <div class="flex flex-row gap-1">
                <span>Nome: </span>
                <span>{{ $author->name }}</span>
            </div>
            <div class="flex flex-row gap-1">
                <span>Status: </span>
                <span>{{ ucfirst($author->status) }}</span>
            </div>

            <div class="flex flex-row gap-2">
                <a href="{{ route('authors.edit', $author->id) }}" class="bg-primary text-slate-50 px-3 py-0.5 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Editar</a>
                <form action="{{ route('authors.delete', $author->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="bg-red-900 text-slate-50 px-3 py-0.5 rounded-md w-fit hover:bg-red-700 cursor-pointer transition duration-200 shadow">Excluir</button>
                </form>
            </div>
        </div>
        
    </section>
</div>

@endsection