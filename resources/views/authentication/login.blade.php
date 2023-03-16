@extends('template.defaultForms.defaultForms')
@section('title', 'efetuar login')

@section('content')
    <div class="page container-fluid p-3 d-flex justify-content-center align-items-center"
        style="width:100%; height:100vh; background: var(--bs-blue); background-size: 100px 50px;">

        <x-form.default-form formAction="{{ @route('user.autenticar') }}" formMethod="POST" class="py-3 px-4"
            formId style="min-width: 300px">
            <x-input.select labelName="Selecione o tipo de usuário" inputName="role">
                <x-slot name="options">
                    @foreach ($roles as $role)
                        <option value="{{ $role->tipo }}">{{ $role->tipo }}</option>
                    @endforeach
                </x-slot>
            </x-input.select>
            <x-form.form-group labelName="Email" inputName="email" inputType="text" :inputValue="@old('email')" />
            <x-form.form-group labelName="Senha" inputName="password" inputType="password" />
            <input type="submit" class="btn btn-primary" value="Logar">
            <div class="password-register">
                <p>Esqueceu a senha?&nbsp;<a href="{{ @route('password.recovery') }}" class="text-decoration-none">clique aqui</a>
                <p>Não tem conta?&nbsp;<a href="{{ @route('cadastrar') }}" class="text-decoration-none">cadastre-se</a>
            </div>
        </x-form.default-form>

        @if (Session::has('credentials'))
            <x-toast.toast title="Credencias" info="{{ session('credentials') }}" type="error" />
        @elseif($errors->any())
            <x-toast.toast title="Erro" info="Não foi possível realizar o login" type="error" />
        @elseif(Session::has('permission'))
            <x-toast.toast title="Permissão" info="{{ session('permission') }}" type="error" />
        @endif
    </div>
@endsection
