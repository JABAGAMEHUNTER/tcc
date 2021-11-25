@foreach ($produtos as $produto)
                    
                    <p class="bg-yellow-400 rounded-xl mr-3.5 box-border p-4 border-4">
                    <img class="rounded-xl"src="{{ url("storage/{$produto->image}")}}" alt="{{ $produto->title }}" style="max-width:100px">
                       <strong class="">{{ $produto->title}}</strong><br>
                    <button class="decoration-clone bg-gradient-to-b from-green-200 to-green-500 rounded-xl box-porder p-1"><a href="{{route('produtos.show', $produto->id)}}">Visualizar</a></button>
                    <button class="decoration-clone bg-gradient-to-b from-green-200 to-green-500 rounded-xl box-porder p-1"><a href="{{route('produtos.show', $produto->id)}}">Adicionar ao carrinho</a></button>
                    @can('is_produtor')
                    <button class="decoration-clone bg-gradient-to-b from-green-200 to-green-500 rounded-xl box-porder p-1"><a href="{{route('produtos.edit', $produto->id)}}">Editar</a></button>
                    @endcan
                     </p>
@endforeach
@if (isset($filters))
                {{ $produtos->appends($filters)->links()}}
                @else
                {{ $produtos->links()}}
                @endif 