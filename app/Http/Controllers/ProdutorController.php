<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProduto;
use App\Models\Produto;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProdutorController extends Controller
{
    
    public function index()
    {

        $produtos = Produto::latest()->paginate(5);

        return view('admin.produtos.index', compact('produtos'));
    }

    public function create()//fazer postagem de novo produto
    {
        $this->authorize('is_admin');
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
        $produtos = Produto::find($id);
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

        $produtos = Produto::where('title', 'LIKE', "%{$request->search}%")
                            ->orWhere('content', 'LIKE', "%{$request->search}%")
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





}
