<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('cadastrar_feirante') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="nome" :value="__('Nome')" />

                <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
            </div>

<!-- Endereço -->
            <div>
                <x-label for="logradouro" :value="__('Logradouro')" />
                <x-input placeholder="Logradouro" id="logradouro" class="block mt-1 w-full" type="text" name="logradouro" :value="old('logradouro')" required autofocus />
                <x-label for="numero" :value="__('Número')" />
                <x-input placeholder="Número" id="numero" class="block mt-1 w-full" type="text" name="numero" :value="old('numero')" required autofocus />
                <x-label for="complemento" :value="__('Complemento')" />
                <x-input placeholder="Complemento" id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" required autofocus />
                <x-label for="cidade" :value="__('Cidade')" />
                <x-input placeholder="Cidade" id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autofocus />
                <x-label for="cep" :value="__('Cep')" />
                <x-input placeholder="Cep" id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus />
                <x-label for="estado" :value="__('Estado')" />
                <x-input placeholder="Estado" id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required autofocus />
            </div>

            <!-- Cpf -->
            <div>
                <x-label for="cpf" :value="__('Cpf')" />

                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autofocus />
            </div>

            <!-- Tipo de usuario -->
            <div>
                <x-label for="usertipo" :value="__('Tipo de usuário')" />
                    <div class="form-group"><br>
                    <label id="usertipo" class="radio-inline"><input type="radio" name="usertipo" value="produtor" :value="old('usertipo')" required autofocus>Produtor</label>
                    <label id="usertipo" class="radio-inline"><input type="radio" name="usertipo" value="feirante" :value="old('usertipo')" required autofocus>Feirante</label>
                    </div>    
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <!--Registro de usuario-->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Já possui cadastro?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
