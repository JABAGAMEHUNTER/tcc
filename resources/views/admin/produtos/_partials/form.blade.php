@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{   $error   }}</li>
    @endforeach
</ul>
@endif
@csrf
<div class="lg:grid lg:grid-cols-1 flex flex-wrap justify-center items-center">
<input class="btn mt-1 px-4 py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="file" autocomplete="off" name="image" id="image" value="{{ $produtos->image ?? old('image')}}" required>
<input type="text" autocomplete="off" name="title" id="title" placeholder="Titulo" value="{{ $produtos->title ?? old('title')}}"required>
  <div>
  <x-label for="categoria" :value="__('Categoria')" />
  <div class="form-group"><br>
  <label id="categoria" class="radio-inline"><input type="radio" name="categoria" id="categoria" placeholder="Categoria" value="hortifruti" old('categoria')}}"required autofocus>Hortifruti</label>
  <label id="categoria" class="radio-inline"><input type="radio" name="categoria" id="categoria" placeholder="Categoria" value="peixes" old('categoria')}}"required autofocus>Peixes</label>
  <label id="categoria" class="radio-inline"><input type="radio" name="categoria" id="categoria" placeholder="Categoria" value="carnes" old('categoria')}}"required autofocus>Carnes</label>  
  <label id="categoria" class="radio-inline"><input type="radio" name="categoria" id="categoria" placeholder="Naturais" value="naturais" old('categoria')}}"required autofocus>Naturais</label>  
  </div>    
  </div>
<input type="text" autocomplete="off" name="procedencia" id="procedencia" placeholder="Procedencia" value="{{ $produtos->procedencia ?? old('procedencia')}}"required>
<input type="text" autocomplete="off" name="valor" id="valor" placeholder="Preço" value="{{ $produtos->valor ?? old('valor')}}"required>
<textarea class="rounded-xl mr-3"name="content" id="content" cols="20" rows="5" placeholder="Conteudo">{{ $produtos->content ?? old('content') }}</textarea>
<button class="btn mt-1 px-4 py-2 px-4 font-semibold rounded-lg shadow-md text-white ml-3.5 decoration-clone bg-gradient-to-b from-yellow-400 to-red-500" type="submit">Cadastrar</button>
</div>