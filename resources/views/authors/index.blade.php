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
            <a href="{{ route('authors.create') }}" class="bg-primary text-slate-50 px-5 py-2 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Adicionar livro</a>
        </div>
    </section>
    <section class="max-w-6xl w-full flex flex-col">
        @foreach ($authors as $author)
            <a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a>
        @endforeach
    </section>
</div>

@endsection
