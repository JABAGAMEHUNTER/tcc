@extends('admin.layouts.app')

@section('title','Editar o Produto')

@section('content')
<h1>Editar o Produto <strong>{{ $produtos->title }}</strong></h1>

<form action="{{ route('produtos.update', $produtos->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
    @include('admin.produtos._partials.form')
</form>
@endsection
