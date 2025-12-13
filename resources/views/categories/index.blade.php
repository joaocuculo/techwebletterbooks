@extends('layouts.app')

@section('content')
    
<div class="flex flex-col justify-center items-center w-full py-5 gap-5">
    {{-- Navigation --}}
    <section class="max-w-6xl w-full flex flex-row justify-between items-center">
        <div class="flex flex-row gap-3">
            <a href="{{ route('books.index') }}" class="underline hover:text-primary-light inline-flex items-center">
                <x-heroicon-m-arrow-small-left class="h-5 w-5" />
                Voltar
            </a>
        </div>
        <div class="flex flex-row w-full justify-end items-center">
            <a href="{{ route('categories.create') }}" class="bg-primary text-slate-50 px-5 py-2 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Adicionar categoria</a>
        </div>
    </section>
    <section class="max-w-6xl w-full flex flex-col">
        <div>
            <h1 class="text-2xl font-bold tracking-widest uppercase">Categorias</h1>
        </div>
        @foreach ($categories as $category)
            <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
        @endforeach
    </section>
</div>

@endsection