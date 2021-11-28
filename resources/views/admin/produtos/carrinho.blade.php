@extends('admin.layouts.app')
@section("content")
<div class="center">
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu1')
    </nav>
    <nav class="mt-3.5 mr-3.5">
    @include('admin.produtos._partials.menu2')
    </nav>
    <nav class="ml-3.5 mt-3.5 rounded-xl mr-3.5 box-border p-4 border-4">
    
        <h3>Carrinho</h3>

        @if(isset($cart)&& count($cart) >0)

        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
        <tbody>
            @foreach($cart as $indice => $p)
                <tr>
                    <td>
                        <a href="{{ route('carrinho_excluir', ['indice' => $indice])}}">
                            <button class="btn bg-red-600 p-1 rounded-xl">DEL</button>
                        </a>
                    </td>
                    <td>{{$p->title}}</td>
                    <td><img class="rounded-xl" src="{{url("storage/{$p->image}")}}" style="max-width:50px"/></td>
                    <td>{{$p->valor}}</td>
                    <td>{{$p->content}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
        @else
            <p>Nenhum item no carrinho</p>
        @endif    
    </nav>
    <nav class="ml-3.5 mr-3.5">
    @include('admin.produtos._partials.footer')
    </nav>
</div>
@endsection
