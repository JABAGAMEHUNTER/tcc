@extends('admin.layouts.app')
<div class="center">
    <nav class="mt-3.5 mr-3.5">
        @include('admin.produtos._partials.menu1')
    </nav>
    <nav class="mt-3.5 mr-3.5">
    @include('admin.produtos._partials.menu2')
    </nav>
    <nav class="ml-3.5 mt-3.5 rounded-xl mr-3.5 box-border p-4 border-4">
    @include('admin.produtos._partials.categ')    
    </nav>



    
    <nav class="ml-3.5 mr-3.5">
    @include('admin.produtos._partials.footer')
    </nav>
</div>