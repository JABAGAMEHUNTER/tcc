@extends('admin.layouts.app')
<div class="center">
    <nav class="mt-3.5 ">
        @include('admin.posts._partials.menu1')
    </nav>
    <nav class="mt-3.5 ">
        @include('admin.posts._partials.menu2')
    </nav>

@section('title', 'Criar Novo Post')

@section('content')
<h1>Cadastrar Novo Produto</h1>

<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @include('admin.posts._partials.form')
</form>
<nav class="ml-3.5 ">
        
        @include('admin.posts._partials.footer')
</nav>
@endsection
