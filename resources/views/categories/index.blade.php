@extends('layouts.app')

@section('content')
    
<div class="flex justify-center items-center w-full py-5">
    <section class="max-w-6xl w-full">
        <div class="flex flex-row w-full justify-end items-center">
            <a href="{{ route('categories.create') }}" class="bg-primary text-slate-50 px-5 py-2 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Adicionar categoria</a>
        </div>
        
        @foreach ($categories as $category)
            <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
        @endforeach
    </section>
</div>

@endsection