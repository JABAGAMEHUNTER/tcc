@extends('admin.layouts.app')
<div class="center">
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu1')
    </nav>
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu2')
    </nav>
<div class="lg:grid lg:grid-cols-1 flex flex-wrap justify-center items-center ">
@section('title','Editar o Produto')

@section('content')

<ul class="flex-auto p-8">
<h1>Editar o Produto <strong>{{ $produtos->title }}</strong></h1>
<form action="{{ route('produtos.update', $produtos->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
    @include('admin.produtos._partials.form')
</form>
</ul>

<nav class="ml-3.5 mr-3.5">
        @include('admin.produtos._partials.footer')
</nav>
@endsection
