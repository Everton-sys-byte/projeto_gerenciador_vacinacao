@extends('template.defaultForms.defaultForms')
@section('title', 'efetuar cadastro')

@section('content')
    <div class="page container-fluid p-3 d-flex justify-content-center align-items-center"
        style="width:100%; height:100vh; background: var(--bs-blue); background-size: 100px 50px;">

        <x-form.default-form formAction="{{ @route('user.cadastrar') }}" formMethod="POST" class="px-4 py-2"
            formId style="min-width: 450px">
            <x-form.form-group labelName="Nome completo" inputName="nome_completo" inputType="text"
                :inputValue="@old('nome_completo')" />
            <x-form.form-group labelName="CPF" inputName="cpf" inputType="text" :inputValue="@old('cpf')" />
            <x-form.form-group labelName="Email" inputName="email" inputType="email" :inputValue="@old('email')" />
            <x-form.form-group labelName="Celular" inputName="celular" inputType="text" :inputValue="@old('celular')" />
            <x-form.form-group labelName="Data de nascimento" inputName="data_nascimento" inputType="date"
                :inputValue="@old('data_nascimento')" />
            <div class="row row-cols-1 row-cols-md-2">
                <x-form.form-group labelName="Senha" inputName="password" inputType="password"
                    inputValue="{{ @old('password') }}" />
                <x-form.form-group labelName="Confirmar Senha" inputName="c_password" inputType="password"
                    inputValue="{{ @old('c_password') }}" />
            </div>
            <div class="form-group">
                <input type="checkbox" class="check_password">
                Mostrar senha
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
            <p>Já possui uma conta?&nbsp;<a href="{{ route('logar') }}" class="text-decoration-none">Efetuar login</a></p>
        </x-form.default-form>

        @if (Session::has('message'))
            <x-toast.toast title="Sucesso" info="conta cadastrada com sucesso" type="success" />
        @elseif($errors->any())
            <x-toast.toast title="Erro" info="Não foi possível cadastrar sua conta" type="error" />
        @endif
    </div>
@endsection
