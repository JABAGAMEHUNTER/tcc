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
    
    
    <blockquote>
    <ul class="flex-auto p-6">
    <li><strong>Titulo:</strong>{{ $produtos->title }}</li>
    <li><strong>Conteudo:</strong>{{ $produtos->content }}</li>
    </ul>    
    </blockquote>
    @can('is_admin')
    <form action="{{route('produtos.destroy', $produtos->id) }}" method="post">
        @csrf
        
        <input  type="hidden" name="_method" value="DELETE">
        <button class="btn mt-1 py-2 px-2 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit">Deletar o produto</button>
        
    </form>
    @endcan
    @can('is_feirante')
    <form class="flex-auto p-2" action="" method="">
        @csrf
        <input  type="hidden" name="_method" value="DELETE"><br>
        <button class="btn mt-1 py-2 px-2 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit"> Comprar</button><br>
        <button class="btn mt-1 py-2 px-2 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit"> Adicionar ao Carrinho</button><br>
    </form>
    @endcan
    </div>
    <nav class="ml-3.5 mr-3.5">
        @include('admin.produtos._partials.footer')
    </nav>
</div>