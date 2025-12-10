@extends('layouts.app')

@section('content')
    
<div class="flex justify-center items-center w-full py-5">
    <section class="max-w-6xl w-full">
        <div class="flex flex-row w-full justify-end items-center">
            <a href="{{ route('authors.create') }}" class="bg-primary-light text-slate-50 px-5 py-2 rounded-md w-fit hover:bg-primary cursor-pointer transition duration-200 shadow">Adicionar autor</a>
        </div>
        
        @foreach ($authors as $author)
            <a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a>
        @endforeach
    </section>
</div>

@endsection
