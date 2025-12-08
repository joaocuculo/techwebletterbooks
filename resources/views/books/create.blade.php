@extends('layouts.app')

@section('content')

<div>
    <form action="" method="POST">
        @csrf

        <div>
            <label for="title">Título</label>
            <input class="border border-black" type="text" name="title" id="title">
        </div>
        <div>
            <label for="publisher">Editora</label>
            <input class="border border-black" type="text" name="publisher" id="publisher">
        </div>
        <div>
            <label for="author">Autor</label>
            <input class="border border-black" type="text" name="author" id="author">
        </div>
    </form>
</div>

@endsection
