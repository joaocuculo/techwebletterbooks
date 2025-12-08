@extends('layouts.app')

@section('content')
    
<div class="flex flex-col w-fit">
    @foreach ($authors as $author)
        <a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a>
    @endforeach

    <a href="{{ route('authors.create') }}" class="bg-slate-300 w-fit">Adicionar autor</a>
</div>

@endsection
