@extends('template.defaultForms.defaultForms')
@section('title', 'recuperar senha')

@section('content')
    <div class="page container-fluid p-3 d-flex justify-content-center align-items-center"
        style="width:100%; height:100vh; background: var(--bs-blue); background-size: 100px 50px;">
        <x-form.default-form formAction="{{ @route('send.password.recovery.email') }}" formMethod="POST" class="py-3 px-4"
            style="min-width: 300px; max-width: 500px">
            {{-- DEFAULT ALERT --}}
            @include('template.defaultSessionAlert.alert')
            <article>
                Por favor, preencha o seu email corretamente, depois disso irá ser enviado uma mensagem para a recuperação
                de senha.
            </article>
            <x-form.form-group labelName="Email" inputName="email" inputType="email" inputValue="{{@old('email')}}"/>
            <input type="submit" class="btn btn-primary" value="Recuperar senha">
            <p>Clique em <a href="{{ route('logar') }}" class="text-decoration-none">Efetuar login</a> para voltar</p>
        </x-form.default-form>
    </div>
@endsection
