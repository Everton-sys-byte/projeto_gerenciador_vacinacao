@extends('template.defaultForms.defaultForms')
@section('title', 'Login')

@section('content')
    <div class="form-holder container-fluid p-0 d-flex flex-row align-items-center rounded shadow-lg bg-white">
        <div class="content bg-login d-none d-xl-block" style="width:60%; height:100%"></div>
        <div class="form-wrapper">
            <x-form.default-form formAction="{{ @route('user.autenticar') }}" formMethod="POST" class="px-4" formId
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
                <p class="text-danger" style="margin-bottom:0">{{ session()->get('credentials') }}</p>
                <input type="submit" class="btn btn-primary" value="Logar">
                <div class="password-register">
                    Esqueceu a senha?&nbsp;<a href="{{ @route('password.recovery') }}" class="text-decoration-none">clique
                        aqui</a>
                    <br>
                    Não tem conta?&nbsp;<a href="{{ @route('cadastrar') }}" class="text-decoration-none">cadastre-se</a>
                </div>
            </x-form.default-form>
        </div>
    </div>
    @if (Session::has('permission'))
        <x-toast.toast title="Permissão" info="{{ session('permission') }}" type="error" />
    @endif
@endsection
