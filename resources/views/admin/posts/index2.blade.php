@extends('admin.layouts.app')
<div class="container">
    <nav class="mt-3.5 ">
        @include('admin.posts._partials.menu1')
    </nav>
    <nav class="mt-3.5 ">
        @include('admin.posts._partials.menu2')
    </nav>
    <nav>
        @include('admin.posts._partials.cards')
    </nav>
</div>