@extends('layouts.app')

@section('content')

<div class="flex flex-col">
    <a href="{{ route('authors.index') }}">Autores</a>
    <a href="{{ route('categories.index') }}">Categorias</a>
</div>

@endsection
