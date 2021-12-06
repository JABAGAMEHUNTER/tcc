<div class="flex flex-wrap justify-center items-center ">
@can('is_produtor')
        <x-button class="p-6 bg-green-500 border-b">
        <a href="  {{route('produtos.create')}}">Cadastrar Novo Produto</a>
        </x-button>
@endcan
    <form class="flex justify-center items-center max-w-7xl sm:px-6 lg:px-8 m-5 " method="POST" action="{{ route('logout') }}">
    @csrf
    <x-button class="p-6 bg-red-500 border-b">
    <a :href="route('logout')"
    onclick="event.preventDefault();
    this.closest('form').submit();">{{ __('Log Out') }}</a></x-button>
    </form>
    <x-button class="ml-1 p-6 border-b font-semibold rounded-lg shadow-md text-white bg-blue-500 hover:bg-blue-700" >
    @csrf
    <a href="{{route('dashboard')}}">Ir para Início</a></x-button>

    <x-button class="ml-1 p-6 border-b font-semibold rounded-lg shadow-md text-white bg-blue-500 hover:bg-blue-700" >
		<a href="{{route('chat')}}">Chat</a></x-button>   
</div>