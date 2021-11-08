
<div id="cardUser" class=" fixed box-border bg-blue-100 h-25 w-20 p-4 border-4 rounded-xl top-0 right-0">
<a href="  {{route('feira.userconfig')}}"><img class="h-12 w-12 rounded-full transform scale-25"src="./storage/img/farmer.png" alt="userPhoto"></a>
    <div class="">Usuario</div>
</div>
<form id='menu1' class="form-inline ">
<div class="flex relative mx-auto w-2/5 max-w-md">
  <input class="border-2 border-primary bg-red transition h-12 px-5 pr-16 rounded-md focus:outline-none w-full text-black text-lg " type="search" name="search" placeholder="Search" />
  <button type="submit" class="absolute right-2 top-3 mr-4">
    <svg class="text-black h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"  width="512px" height="512px">
      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
    </svg>
  </button>
</div>
            <div class="flex flex-row cursor-pointer sm:flex-inline ml-3.5 mt-3.5">
            <button class="mx-auto px-4 md:container md:mx-auto py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500"><a href="  {{route('feira.index')}}">Página Inicial</a></button>
            <button class="mx-auto px-4 md:container md:mx-auto py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-green-200 to-green-500"><a href="  {{route('feira.categorias')}}">Categorias</a></button>
            <button class="mx-auto px-4 md:container md:mx-auto py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-blue-400 to-indigo-500 "><a href="  {{route('feira.produtores')}}">Produtores</a></button>
            </div>
            <!--Este é o menu1-->
</form>
