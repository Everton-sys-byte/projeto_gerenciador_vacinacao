@extends('template.defaultPages.defaultPages')
@section('title', 'Configurar Perfil')

@section('content')
    <div class="information container-fluid px-5">
        <x-titles.default-title title="Configurar Perfil" />
        <x-tags.tag-bar class="mt-3"/>
        @include('template.defaultSessionAlert.alert')
        <x-form.default-form formAction="{{ @route('user.update.profile') }}" formMethod="POST" formEncType=true
            class="mx-auto" style="width: 500px">
            @method('PUT')
            <div class="d-flex flex-column align-items-center gap-1">
                <img src="/images/avatar/{{ auth()->user()->avatar }}" alt="user avatar" width="120" height="120"
                    class="rounded-circle">
                <x-form.form-group inputType="file" inputName="avatar" />
            </div>
            <x-form.form-group label_name="Nome Completo" inputType="text" inputName="nome_completo" :inputValue="auth()->user()->nome_completo" />
            <x-form.form-group label_name="Email" inputType="email" inputName="email" :inputValue="auth()->user()->email" />
            <x-form.form-group label_name="Celular" inputType="text" inputName="celular" :inputValue="auth()->user()->celular" />
            <x-form.form-group label_name="Data de nascimento" inputType="date" inputName="data_nascimento"
                :inputValue="auth()->user()->data_nascimento" />
            <input type="submit" value="Atualizar" class="btn btn-primary" />
        </x-form.default-form>
    </div>
@endsection
