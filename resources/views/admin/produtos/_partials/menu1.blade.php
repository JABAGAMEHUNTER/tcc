<div id="cardUser" class=" fixed box-border bg-blue-100 h-25 w-20 p-4 border-4 rounded-xl top-0 right-0">
<a href="  {{route('userconfig')}}"><img class="h-12 w-12 rounded-full transform scale-25"src="./storage/img/farmer.png" alt="userPhoto"></a>
    <div class="">{{ Auth::user()->name }}</div>
</div>
<form id='menu1' class="form-inline ">
<div class="flex relative mx-auto w-2/5 max-w-md">
          <form action="{{route('search')}}" method="get">
            @csrf
            <input  type="text" name="search" placeholder="Filtrar:"/>
            <button type="submit">Pesquisar</button>
          </form>
</div>
            <div class="flex flex-row cursor-pointer sm:flex-inline ml-3.5 mt-3.5">
            <button class="mx-auto px-4 md:container md:mx-auto py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500"><a href="  {{route('index')}}">Página Inicial</a></button>
            <button class="mx-auto px-4 md:container md:mx-auto py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-green-200 to-green-500"><a href="  {{route('categorias')}}">Categorias</a></button>
            <button class="mx-auto px-4 md:container md:mx-auto py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-blue-400 to-indigo-500 "><a href="  {{route('produtores')}}">Produtores</a></button>
            </div>
            <!--Este é o menu1-->
</form>