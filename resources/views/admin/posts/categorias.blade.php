@extends('admin.layouts.app')
<div class="center">
    <nav class="mt-3.5 ">
        @include('admin.posts._partials.menu1')
    </nav>
    
    <nav class=" mt-3.5 box-border p-4 border-4">
        @include('admin.posts._partials.categ')
    </nav>
    <nav class="ml-3.5 ">
        
        @include('admin.posts._partials.footer')
    </nav>
</div>