@extends('layouts.base')

@section('app')

{{-- Header --}}
<header class="bg-primary flex flex-row justify-center items-center sticky w-full text-slate-50">
    <div class="max-w-6xl w-full py-5 flex flex-row justify-between items-center">

        {{-- Logo --}}
        <div class="flex flex-row">
            <h1 class="text-3xl font-bold font-serif">LetterBooks</h1>
        </div>

        {{-- Navigation --}}
        <nav>
            <ul class="flex flex-row space-x-10">
                <li><a href="{{ route('books.index') }}" class="uppercase text-xs font-semibold tracking-[0.2rem] transition duration-200 hover:text-slate-50/70">Início</a></li>
                <li><a href="#" class="uppercase text-xs font-semibold tracking-[0.2rem] transition duration-200 hover:text-slate-50/70">Sobre</a></li>
                <li><a href="#" class="uppercase text-xs font-semibold tracking-[0.2rem] transition duration-200 hover:text-slate-50/70">Estantes</a></li>
            </ul>
        </nav>

        {{-- Actions --}}
        <div class="flex flex-row space-x-2 justify-center items-center">
            <a href="#" class="px-5 py-1.5 rounded-full border border-transparent hover:bg-white/10 transition duration-200">Entrar</a>
            <a href="#" class="px-5 py-1.5 rounded-full bg-white/10 border border-white/30 hover:bg-white/30 transition duration-200">Cadastrar</a>
        </div>
    </div>
</header>

<main class="flex flex-col flex-1 w-full bg-slate-100">
    @yield('content')
</main>

{{-- Footer --}}
<footer class="bg-primary-dark text-slate-50 flex flex-row justify-center items-center w-full">
    <div class="flex flex-col max-w-6xl divide-y divide-white/30 w-full">
        <div class="flex flex-row py-5 justify-between items-center">
            <div class="flex flex-col items-start gap-1 justify-center">
                <h3 class="text-2xl pr-5 font-bold font-serif">LetterBooks</h3>
                <p class="text-sm text-wrap">Crie sua estante personalizada e avalie seus livros favoritos com LetterBooks!</p>
            </div>
            <div class="flex flex-row gap-3">
                <x-fab-instagram class="h-5 w-5" />
                <x-fab-x-twitter class="h-5 w-5" />
            </div>
        </div>
        <div class="flex flex-col justify-center items-center py-3">
            <span class="text-xs font-normal">&copy; {{ now()->year }} LetterBooks. Todos os direitos reservados.</span>
        </div>
    </div>
</footer>

@endsection