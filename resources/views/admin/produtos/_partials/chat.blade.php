@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{   $error   }}</li>
    @endforeach
</ul>
@endif
@csrf
@foreach ($mensagens as $mensagem)
	<i class="">{{ $mensagem->usuario}}</i><br>
   <i class="">Disse:{{ $mensagem->texto}}</i><br>
@endforeach
<div class="lg:grid lg:grid-cols-1 flex flex-wrap justify-center items-center">
<input type="text" autocomplete="off" name="usuario" id="usuario" placeholder="Usuario" value="{{ $mensagens->usuario ?? old('usuario')}}"required>
<div> 
<textarea class="rounded-xl mr-3"name="texto" id="texto" cols="20" rows="5" placeholder="Texto">{{ $mensagens->texto ?? old('texto') }}</textarea>
<button class="btn mt-1 px-4 py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit">Enviar</button>
</div>