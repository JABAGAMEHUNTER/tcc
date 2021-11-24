@extends('admin.layouts.app')
<div class="center">
    <nav class="mt-3.5 mr-3.5">
        @include('admin.posts._partials.menu1')
    </nav>
    <nav class="mt-3.5 mr-3.5">
        @include('admin.posts._partials.menu2')
    </nav>
    <nav class="ml-3.5 mt-3.5 rounded-xl mr-3.5 box-border p-4 border-4">

                @section('title','Listagem dos Produtos')

                @section('content')
                <button class="decoration-clone bg-gradient-to-b from-green-200 to-green-500 rounded-xl box-porder p-1" type="submit"><a href="{{ route('posts.create')}}">Cadastrar novo produto</a></button>
                
                @if (session('message'))
                    <div>
                        {{  session('message') }}
                    </div>
                @endif

                <form  class="mt-2" action="{{ route('posts.search') }}" method="post">
                    @csrf
                    <input class="rounded-xl mr-3.5 box-border p-4 border-4" type="text" name="search" placeholder="Filtrar">
                    <button class="decoration-clone bg-gradient-to-b from-green-200 to-green-500 rounded-xl box-porder p-1" type="submit">Filtrar</button>
                </form>
                <strong><h1>Produtos</h1></strong>
                <div class="flex flex-col lg:flex-row">
                @foreach ($posts as $post)
                    
                    <p class="bg-yellow-400 rounded-xl mr-3.5 box-border p-4 border-4">
                    <img class="rounded-xl"src="{{ url("storage/{$post->image}")}}" alt="{{ $post->title }}" style="max-width:100px">
                       <strong class="">{{ $post->title}}</strong><br>
                    <button class="decoration-clone bg-gradient-to-b from-green-200 to-green-500 rounded-xl box-porder p-1"><a href="  {{route('posts.show', $post->id)}}">Visualizar</a></button>
                    <button class="decoration-clone bg-gradient-to-b from-green-200 to-green-500 rounded-xl box-porder p-1"><a href="{{  route('posts.edit', $post->id)}}">Editar</a></button>
                    </p>

                @endforeach
                </div>
                @if (isset($filters))
                {{ $posts->appends($filters)->links()}}
                @else
                {{ $posts->links()}}
                @endif


    </nav>
    <nav class="ml-3.5 mr-3.5">
        
        @include('admin.posts._partials.footer')
    </nav>
</div>

