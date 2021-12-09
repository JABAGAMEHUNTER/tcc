@extends('admin.layouts.app')
<div class="container mx-auto">
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu1')
    </nav>
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu2')
    </nav>
{{--    <nav class="lg:grid lg:grid-cols-2 lg:gap-4 ml-3.5 mt-3.5 rounded-xl mr-3.5 box-border p-4 border-4">--}}
    <nav class="ml-3.5 mt-3.5 rounded-xl mr-3.5 box-border p-6 border-4">
    @section('title', 'Chat')

    @section('content')
     <form action="{{ route('enviar') }}" method="post" enctype="multipart/form-data">

        @include('admin.produtos._partials.chat')

     </form>
    </nav>
    <nav class="ml-3.5 mr-3.5">
        @include('admin.produtos._partials.footer')
    </nav>
</div>
