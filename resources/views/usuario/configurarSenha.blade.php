@extends('template.defaultPages.defaultPages')
@section('title', 'Configurar senha')

@section('content')
    <div class="information container-fluid px-5">
        <x-titles.default-title title="Configurar Senha" class="text-center" />
        <x-tags.tag-bar class="mt-3" />
        @include('template.defaultSessionAlert.alert')
        <x-form.default-form formAction="{{ @route('user.update.password') }}" formMethod="POST" class="mx-auto"
            formId style="width: 100%">
            @method('PUT')
            <x-form.form-group label_name="Senha atual" inputType="password" inputName="senhaAtual" :inputValue="@old('senhaAtual')" />
            <x-form.form-group label_name="Nova senha" inputType="password" inputName="novaSenha" :inputValue="@old('novaSenha')" />
            <x-form.form-group label_name="Repetir nova senha" inputType="password" inputName="repetir_novaSenha"
                :inputValue="@old('repetir_novaSenha')" />
            <input type="submit" value="Atualizar" class="btn btn-primary" />
        </x-form.default-form>
    </div>
@endsection
