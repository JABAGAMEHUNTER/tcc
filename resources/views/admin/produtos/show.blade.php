@extends('admin.layouts.app')
<div class="center">
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu1')
    </nav>
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu2')
    </nav>
    <div class="ml-3.5 rounded-xl inline-flex bg-indigo-200 object-contain h-1/4 w-500">
    @section('title', 'Detalhes do Produto')

    @section('content')
    
    
    <div class="">
    <ul>
    <li><strong>Titulo:</strong>{{ $produtos->title }}</li>
    <li><strong>Conteudo:</strong>{{ $produtos->content }}</li>
    </ul>    
    </div>
    <form action="{{route('produtos.destroy', $produtos->id) }}" method="post">
        @csrf
        <input  type="hidden" name="_method" value="DELETE">
        <button class="btn mt-1 py-2 px-2 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit">Deletar o produto</button>
    </form>
    </div>
    <nav class="ml-3.5 mr-3.5">
        @include('admin.produtos._partials.footer')
    </nav>
</div>