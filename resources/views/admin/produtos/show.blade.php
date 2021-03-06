@extends('admin.layouts.app')
<div class="center">
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu1')
    </nav>
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu2')
    </nav>
<div class=" flex flex-wrap justify-center items-center">
    @section('title', 'Detalhes do Produto')

    @section('content')
    <div class="lg:ml-25 mb-8 mt-8">
    <div><strong>Titulo:</strong>{{ $produtos->title }}</div>
    <div><strong>Preço: </strong>R$ {{ $produtos->valor }}</div>
    <div><strong>Categoria: </strong>{{ $produtos->categoria }}</div>
    <div><strong>Procêdencia: </strong>{{ $produtos->procedencia }}</div>
    <div><strong>Conteudo:</strong>{{ $produtos->content }}</div>
    </div>

    <div class="sm:mb-8 form-group">
    @can('is_produtor')

        <input  type="hidden" name="_method" value="DELETE">

    @endcan
        <x-button class="btn mt-1 py-2 px-2 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500"><a href="{{route('chat')}}">Calcular frete</a></x-button>
        <x-button class="btn mt-1 py-2 px-2 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500"><a href="{{route('chat')}}">Chat</a></x-button>
    @can('is_produtor')
    <form action="{{route('produtos.destroy', $produtos->id) }}" method="post">
        @csrf
        <input  type="hidden" name="_method" value="DELETE">
        <x-button class="btn mt-1 py-2 px-2 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit">Deletar o produto</x-button>
    </form>
    </div>
        @endcan
</div>
<nav class="ml-3.5 mr-3.5">
@include('admin.produtos._partials.footer')
</nav>
</div>
