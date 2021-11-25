<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-5 ">
    <x-button class="p-6 bg-green-500 border-b border-gray-200">
    <a href="  {{route('index')}}">Acessar MinhaFeira</a>
    </x-button>
</div>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-400 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-green-500 border-b border-gray-200">
                    Você está logado!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
