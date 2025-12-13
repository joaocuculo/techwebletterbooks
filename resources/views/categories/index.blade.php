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

    {{-- Content --}}
    <section class="max-w-6xl w-full flex flex-col">
        <div>
            <h1 class="text-lg font-bold ml-5 tracking-widest uppercase">Categorias</h1>
        </div>
        <table class="bg-slate-200 rounded-xl shadow-2xl overflow-hidden">
            <tr class="bg-slate-300">
                <th class="py-2 border-r border-b border-slate-400">Nome</th>
                <th class="py-2 border-r border-b border-slate-400">Status</th>
                <th class="py-2 border-b border-slate-400">Ação</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td class="w-3/5 px-5 py-2 border-b border-slate-300">
                        {{ $category->name }}
                    </td>
                    <td class="w-1/5 text-center border-b border-slate-300">
                        {{ ucfirst($category->status) }}
                    </td>
                    <td class="w-1/5 text-center border-b border-slate-300">
                        <a href="{{ route('categories.show', $category->id) }}" class="underline hover:text-primary-light">
                            Ver detalhes
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
</div>

@endsection