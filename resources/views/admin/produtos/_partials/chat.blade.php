@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{   $error   }}</li>
    @endforeach
</ul>
@endif
@csrf
<div class="grid lg:p-12 justify-center p-4 items-center bg-white rounded-xl flex-row">
@foreach ($mensagens as $mensagem)


        <div class="p-2 bg-blue-400  mt-1 rounded-xl align-content-lg-end">{{ $mensagem->usuario}} Disse:{{ $mensagem->texto}}</div>


{{--   <i class="">{{ $mensagem->usuario}}</i><br>--}}
{{--   <i class="">Disse:{{ $mensagem->texto}}</i><br>--}}
@endforeach
</div>
<div class="lg:grid flex flex-wrap justify-center items-center">
{{--    <div class="right-2">{{ Auth::user()->nome }}</div>--}}

<input class="invisible" type="text" autocomplete="off" name="usuario" id="usuario" placeholder="Usuario" value="{{ Auth::user()->nome ?? old('usuario')}}"required>
{{--    @foreach($request as $title)--}}
{{--    <input type="text" autocomplete="off" name="usuario" id="usuario" placeholder="Usuario" value="{{ $title->nome }}"required>--}}
{{--    @endforeach--}}
    <div>

<textarea class="rounded-xl mr-3"name="texto" id="texto" cols="20" rows="5" placeholder="Texto">{{ $mensagens->texto ?? old('texto') }}</textarea>
<button class="btn mt-1 px-4 py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit">Enviar</button>
</div>
</div>
