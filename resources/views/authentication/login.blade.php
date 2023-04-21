@extends('template.defaultForms.defaultForms')
@section('title', 'efetuar login')

@section('content')
    <div class="container-fluid position-relative d-flex flex-row p-0 vh-100">
        <div class="form-wrapper d-flex flex-column">
            <img src="{{ @asset('images/logo/cvdlogo.png') }}" alt="cvd logo" width="150px" class="mx-auto">
            <x-form.default-form formAction="{{ @route('user.autenticar') }}" formMethod="POST" class="py-3 px-4" formId
                style="min-width: 350px">
                {{-- DEFAULT ALERT --}}
                @include('template.defaultSessionAlert.alert')
                <span class="fs-2 text-primary text-center">Efetuar login</span>
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
                    Esqueceu a senha?&nbsp;<a href="{{ @route('password.recovery') }}" class="text-decoration-none">clique
                        aqui</a>
                    <br>
                    Não tem conta?&nbsp;<a href="{{ @route('cadastrar') }}" class="text-decoration-none">cadastre-se</a>
                </div>
            </x-form.default-form>
        </div>

        <div class="system-information vh-100 d-flex flex-column justify-content-center d-none d-md-flex ">
            <p class="fw-bold align-self-center"> Plataforma de saúde para os cidadãos e profissionais, uma maneira fácil e rápida de
                visualizar sua carteirinha de vacinação digital.</p>
        </div>
    </div>
    @if (Session::has('permission'))
        <x-toast.toast title="Permissão" info="{{ session('permission') }}" type="error" />
    @endif
@endsection
