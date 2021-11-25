@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{   $error   }}</li>
    @endforeach
</ul>
@endif
@csrf
<input type="file" name="image" id="image" required>
<br><input type="text" name="title" id="title" placeholder="Titulo" value="{{ $produtos->title ?? old('title')}}"required><br>
<br><input type="text" name="categoria" id="categoria" placeholder="Categoria" value="{{ $produtos->categoria ?? old('categoria')}}"required><br>
<br><input type="text" name="procedencia" id="procedencia" placeholder="Procedencia" value="{{ $produtos->procedencia ?? old('procedencia')}}"required><br>
<br><textarea class="rounded-xl mr-3"name="content" id="content" cols="40" rows="5" placeholder="Conteudo">{{ $produtos->content ?? old('content') }}</textarea><br>
<button class="btn mt-1 px-4 py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit">Enviar</button>
