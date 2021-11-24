<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->categoria = new Categoria();
    }

    public function listCateg($idCategoria)
    {
        $categoria = Categoria::find($id);
        if(!$categoria){
            return redirect()->route('produtos.index');
        }
        
        
        return view('admin.produtos.show', [
            'categoria' =>  $this->categoria->find($idCategoria),
            'produtos' => $this->categoria->find($idCategoria)->retornaTodosOsPostsDessaCategoria()
            //retornar esse posts é facultativo, pois voce tem acesso ao método na view;
        ]);
    }

}