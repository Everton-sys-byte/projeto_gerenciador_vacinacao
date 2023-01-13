@extends('template.defaultPages.defaultPages')
@section('title', 'Configurar Perfil')

@section('content')
    <div class="information container-fluid p-0">
        <x-titles.default-title title="Configurar Perfil" />
        <x-form.default-form action="{{ @route('user.update.profile') }}" method="POST">
            @method('PUT')
            <x-form.form-group label_name="Nome Completo" inputType="text" inputName="nome_completo" :inputValue="auth()->user()->nome_completo" />
            <x-form.form-group label_name="Email" inputType="email" inputName="email" :inputValue="auth()->user()->email" />
            <x-form.form-group label_name="Celular" inputType="text" inputName="celular" :inputValue="auth()->user()->celular" />
            <x-form.form-group label_name="Data de nascimento" inputType="date" inputName="data_nascimento"
                :inputValue="auth()->user()->data_nascimento" />
            <input type="submit" value="Atualizar" class="btn btn-primary" />
        </x-form.default-form>
    </div>
@endsection
