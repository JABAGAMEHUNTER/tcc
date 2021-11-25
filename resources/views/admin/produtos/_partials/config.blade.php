<div class="py-12">
@can('is_produtor')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-5 ">
        <x-button class="p-6 bg-green-500 border-b">
        <a href="  {{route('produtos.create')}}">Cadastrar Novo Produto</a>
        </x-button>
    </div>
@endcan
    <form class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-5 " method="POST" action="{{ route('logout') }}">
    @csrf
    <x-button class="p-6 bg-red-500 border-b">
    <a :href="route('logout')"
    onclick="event.preventDefault();
    this.closest('form').submit();">{{ __('Log Out') }}</x-button></a>
    </form>
</div>
<form class="py-12">
<div class="container rounded-xl bg-blue-400 text-white" style="width:400px width:10px;">
<span class="ml-3.5 lg:ml-96">Configurações do Usuário</span></div>
    <button class="p-6 px-4  m-5 mx-auto border-b font-semibold rounded-lg shadow-md text-white bg-blue-500 hover:bg-blue-700" >
    @csrf
    <a href="  {{route('dashboard')}}">Ir para Início</a></button>

    <button class="p-6 px-4  m-5 mx-auto border-b font-semibold rounded-lg shadow-md text-white bg-blue-500 hover:bg-blue-700" >
    @csrf
    <a href="  {{route('dashboard')}}">Resetar Senha</a></button>


</form>

<div class="container rounded-xl bg-blue-400 text-white"style="width:400px width: 10px;"><span class="ml-3.5 lg:ml-96">Metodo de pagamento</span></div>
    <ul>
        <li class="text-white">
            CONTA BANCÁRIA
            <div class=" grid grid-cols-3 gap-4">
                <div class="">
                    Nome
                </div>
                <div class="">
                    Tipo de chave
                </div>
                <div class="">
                    QRCODE
                </div>
                <input class="rounded-xl border text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent  lg:ml-30 lg:w-96">
                <input class="rounded-xl border text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent  lg:ml-30 lg:w-96">
                <input class="rounded-xl border text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent  lg:ml-30 lg:w-96">
            </div>
        </li>
        <li class="text-white">
            PIX
            <div class="grid grid-cols-3 gap-4">
                <div class="">
                    Nome
                </div>
                <div class="">
                    Tipo de chave
                </div>
                <div class="">
                    QRCODE
                </div>
                <input class="rounded-xl border text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent  lg:ml-30 lg:w-96">
                <input class="rounded-xl border text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent  lg:ml-30 lg:w-96">
                <input class="rounded-xl border text-white bg-green-500 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent  lg:ml-30 lg:w-96">
                
            </div>
        </li>
    </ul>
</div>