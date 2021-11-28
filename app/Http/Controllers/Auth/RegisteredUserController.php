<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\Models\User;

use App\Providers\RouteServiceProvider;
use Faker\Calculator\Ean;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register'); 
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
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
        $user = User::create([
            'nome' => $request->nome,
            'cpf' =>$request->cpf,
            'usertipo' =>$request->usertipo,
            'email' => $request->email,
            'password' => Hash::make($request->password),
           // 'logradouro' => data_get($request, 'logradouro'),
        ]);


        event(new Registered($user));
       // Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);
    }
}
