<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;
class FeiranteController extends Controller

{
    public function cadastrar(Request $request){
        $request = [];

        return view('cadastrar', $request);
    }

    public function cadastrarFeirante(Request $request){

        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'cpf' =>['required', 'string', 'max:12'],
            'logradouro' =>['required'],
            'numero' =>['required'],
            'complemento' =>['required'],
            'cidade' =>['required'],
            'cep' =>['required'],
            'estado' =>['required'],
            'usertipo' =>['required', Rule::in(['admin','produtor','feirante'])],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        

        $values = $request->all();
        $user = new User();
        $user->fill($values);
        $endereco = new Endereco();
        $endereco->fill($values);
        //dd($values);
        $user->save();
        $endereco->save();
        return redirect()->route("cadastrar");
    }
    public function cadastrarEndereco($request){
       /* $values = Endereco::create([
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'cidade' => $request->cidade,
            'cep' => $request->cep,
            'estado' => $request->estado,
        ]);
        $values = $request->all();
        new Endereco($values);*/
    }
}
