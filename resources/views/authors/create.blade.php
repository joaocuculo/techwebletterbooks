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
            <h1 class="text-lg font-bold tracking-widest uppercase">Cadastro de Autor</h1>
        </div>
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf

            <div class="flex flex-col">
                <label for="name">Nome do Autor</label>
                <div class="flex flex-row gap-3">
                    <input class="max-w-96 w-full border border-slate-400 rounded-sm shadow py-0.5 px-2" type="text" name="name" id="name" required>
                    <button type="submit" class="bg-primary text-slate-50 px-3 py-0.5 rounded-md w-fit hover:bg-primary-light cursor-pointer transition duration-200 shadow">Cadastrar</button>
                </div>
            </div>
        </form>
    </section>
</div>

@endsection
