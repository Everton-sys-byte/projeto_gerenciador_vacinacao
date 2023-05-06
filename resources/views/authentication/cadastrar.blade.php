@extends('template.defaultForms.defaultForms')
@section('title', 'efetuar cadastro')

@section('content')
    <div class="container-fluid position-relative d-flex flex-row p-0 vh-100">
        <div class="form-wrapper d-flex flex-column">
            <img src="{{ @asset('images/logo/cvdlogo.png') }}" alt="cvd logo" width="150px" class="mx-auto">
            <x-form.default-form formAction="{{ @route('user.cadastrar') }}" formMethod="POST" class="py-3 px-4"
                formId style="min-width: 350px">
                {{-- DEFAULT ALERT --}}
                @include('template.defaultSessionAlert.alert')
                <span class="fs-2 text-primary text-center">Efetuar cadastro</span>
                <x-form.form-group labelName="Nome completo*" inputName="nome_completo" inputType="text" :inputValue="@old('nome_completo')" />
                <x-form.form-group labelName="CPF*" inputName="cpf" inputType="text" :inputValue="@old('cpf')" />
                <x-form.form-group labelName="Email*" inputName="email" inputType="email" :inputValue="@old('email')" />
                <x-form.form-group labelName="Celular*" inputName="celular" inputType="text" :inputValue="@old('celular')" />
                <x-form.form-group labelName="Data de nascimento*" inputName="data_nascimento" inputType="date"
                    :inputValue="@old('data_nascimento')" />
                <div class="row row-cols-1 row-cols-md-2">
                    <x-form.form-group labelName="Senha*" inputName="password" inputType="password"
                        inputValue="{{ @old('password') }}" />
                    <x-form.form-group labelName="Confirmar Senha*" inputName="c_password" inputType="password"
                        inputValue="{{ @old('c_password') }}" />
                </div>
                <div class="form-group">
                    <input type="checkbox" class="check_password">
                    Mostrar senha
                </div>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <p>Já possui uma conta?&nbsp;<a href="{{ route('logar') }}" class="text-decoration-none">Efetuar login</a>
                </p>
            </x-form.default-form>
        </div>
        <div class="system-information vh-100 d-flex flex-column justify-content-center d-none d-md-flex ">
            <p class="fw-bold align-self-center"> Plataforma de saúde para os cidadãos e profissionais, uma maneira fácil e rápida de
                visualizar sua carteirinha de vacinação digital.</p>
        </div>
    </div>
@endsection
