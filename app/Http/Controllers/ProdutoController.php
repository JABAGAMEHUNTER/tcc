<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Mensagem;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateRequest;
use App\Http\Requests\StoreUpdateProduto;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::latest()->paginate(6);
        return view('admin.produtos.index', compact('produtos'));
    }

    public function create()//fazer postagem de novo produto
    {
        $this->authorize('is_produtor');
        return view('admin.produtos.create');
    }

    public function store(StoreUpdateProduto $request)//salvar novo produto
    {
        $data = $request->all();
        if ($request->image->isValid()) {
            $nameFile = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();
            $image = $request->image->storeAs('produtos', $nameFile, 'public');
            $data['image'] = $image;
        }
        Produto::create($data);
        return redirect()
            ->route('produtos.index')
            ->with('message','Ola!');
    }

    public function show($id)//listar produtos
    {
        $produtos = Produto::oldest()->find($id);
        if(!$produtos){
            return redirect()->route('produtos.index');
        }
        return view('admin.produtos.show', compact('produtos'));
    }

    public function destroy($id){
        if(!$produtos = Produto::find($id))
            return redirect()->route('produtos.index');

        if(Storage::exists('public/'.$produtos->image))
            Storage::delete('public/'.$produtos->image);

            $produtos->delete();

            return redirect()
            ->route('produtos.index')
            ->with('message', 'Produto Deletado com Sucesso');

    }

    public function edit($id){
        //$post = Post::where('id', $id)->first();

        if(!$produtos = Produto::find($id)){
           return redirect()->back();
        }

        return view ('admin.produtos.edit', compact('produtos'));
    }

    public function update(StoreUpdateProduto $request, $id){
        //$post = Post::where('id', $id)->first();

        if(!$produtos = Produto::find($id)){
            return redirect()->back();
        }

        $data = $request->all();

        if($request->image && $request->image->isValid()){
            if(Storage::exists( 'public/'.$produtos->image))
               Storage::delete('public/'.$produtos->image);

            $nameFile = Str::of($request->title)->slug('-') . '.'.$request->image->getClientOriginalExtension();

            /* $image = $request->image->storeAs('posts', $nameFile);
            $data['image'] = $image; */
            $file = $request->image->storeAs('public/produtos',$nameFile);
            $file = str_replace('public/','',$file);
            $data['image'] = $file;
        }
        $produtos->update($data);

        return redirect()
        ->route('produtos.index')
        ->with('message', 'Produto editado com sucesso');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');
        $produtos = Produto::where('title', '==', "%$request->search%")
        							 ->orWhere('categoria', 'LIKE', "%$request->search%")
                            ->orWhere('content', 'LIKE', "%$request->search%")
                            ->paginate(4);
                        return view('admin.produtos.index', compact('produtos', 'filters'));
    }
    public function searchCategoriaHortifruti(Request $request)
    {
        $filters = $request->except('_token');
        $produtos = Produto::where('categoria', 'LIKE', "%hortifruti%")
                            ->paginate(3);
                        return view('admin.produtos.index', compact('produtos', 'filters'));
    }
    public function searchCategoriaPeixes(Request $request)
    {
        $filters = $request->except('_token');
        $produtos = Produto::where('categoria', 'LIKE', "%peixes%")
                            ->paginate(3);
                        return view('admin.produtos.index', compact('produtos', 'filters'));
    }
    public function searchCategoriaCarnes(Request $request)
    {
        $filters = $request->except('_token');
        $produtos = Produto::where('categoria', 'LIKE', "%carnes%")
                            ->paginate(3);
                        return view('admin.produtos.index', compact('produtos', 'filters'));
    }
    public function searchCategoriaNaturais(Request $request)
    {
        $filters = $request->except('_token');
        $produtos = Produto::where('categoria', 'LIKE', "%naturais%")
                            ->paginate(3);
                        return view('admin.produtos.index', compact('produtos', 'filters'));
    }
    public function categorias()
    {
        $produtos = Produto::latest()->paginate(5);
        return view('admin.produtos.categorias', compact('produtos'));
    }

    public function produtores()
    {

        $produtos = Produto::latest()->paginate(5);

        return view('admin.produtos.produtores', compact('produtos'));
    }


    public function userconfig()
    {

      /*  $posts = Post::latest()->paginate(5);*/

        return view('admin.produtos.userconfig');
    }

    public function adicionarCarrinho($idProduto = 0, Request $request){
        //buscar o produto pelo ID
        $prod =  Produto::find($idProduto);

        if($prod){
        //Encontrou o produto
        //Buscar da sessão o carrinho atual
            $carrinho = session('cart',[]);

            array_push($carrinho, $prod);
            session(['cart' => $carrinho]);
        }
        return redirect()->route("index");
    }
    public function verCarrinho(Request $request){
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho];

        return view("admin.produtos.carrinho", $data);
    }
    public function excluirCarrinho($indice, Request $request){
        $carrinho = session('cart',[]);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }
        session(["cart" => $carrinho]);
        return redirect()->route("ver_carrinho");
    }

	public function chat() {
    	  //$messages = Produto::latest()->paginate(5);
    	  $mensagens = Mensagem::oldest()->paginate(18);

        return view('admin.produtos.chat', compact('mensagens'));
    }

	public function createMessage()//criar nova mensagem
    {

        return view('chat');
    }

    public function enviar(StoreUpdateRequest $request)//salvar nova mensagem
    {
     			$data = $request->all();
     			Mensagem::create($data);
        		return redirect()
            ->route('chat')
            ->with('message','Ola!');
    }
//    public function calcularFrete(Request $request) {
////        $frete = 3,06;
////        $a = request()->produto->valor;
////        $b = request()->$frete;
////        $operation = request()->input('operation');
////        $result = $calculator->calculate($operation, $a, $b);
////
////        return view('calculator', [
////            'operations' => $calculator->getOperations(),
////            'result' => $result,
////            'a' => $a,
////            'b' => $b,
////        ]);
//            dd(request);
//		}
//
//
//    }

}
