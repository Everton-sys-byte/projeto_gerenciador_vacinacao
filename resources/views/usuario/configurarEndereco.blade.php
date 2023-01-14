@extends('template.defaultPages.defaultPages')
@section('title', 'Configurar Endereço')

@section('content')
    <div class="information container-fluid p-0 pb-1">
        <x-titles.default-title title="Configurar Endereço" />
        <x-tags.tag-bar />
        <x-form.default-form formAction="{{ @route('user.update.address') }}" formMethod="POST" formEncType=true
            class="mx-auto">
            @method('PUT')
            <x-form.form-group label_name="CEP" inputType="text" inputName="cep" :inputValue="isset(auth()->user()->endereco) ? auth()->user()->endereco->cep->cep : ''" />
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col">
                    <x-form.form-group label_name="UF" inputType="text" inputName="uf" :inputValue="isset(auth()->user()->endereco) ? auth()->user()->endereco->cep->uf : ''" inputReadOnly="true" />
                </div>
                <div class="col">
                    <x-form.form-group label_name="Cidade" inputType="text" inputName="cidade" :inputValue="isset(auth()->user()->endereco) ? auth()->user()->endereco->cep->cidade : ''"  inputReadOnly="true"/>
                </div>
                <div class="col">
                    <x-form.form-group label_name="Bairro" inputType="text" inputName="bairro" :inputValue="isset(auth()->user()->endereco) ? auth()->user()->endereco->cep->bairro : ''"  inputReadOnly="true"/>
                </div>
            </div>
            <x-form.form-group label_name="Logradouro" inputType="text" inputName="logradouro" :inputValue="isset(auth()->user()->endereco) ? auth()->user()->endereco->cep->logradouro : ''" inputReadOnly="true"/>
            <div class="row row-cols-1 row-cols-md-12">
                <div class="col-3">
                    <x-form.form-group label_name="Numero" inputType="text" inputName="numero" :inputValue="isset(auth()->user()->endereco) ? auth()->user()->endereco->numero : ''" />
                </div>
                <div class="col-9">
                    <x-form.form-group label_name="Complemento" inputType="text" inputName="complemento"
                        :inputValue="isset(auth()->user()->endereco) ? auth()->user()->endereco->complemento : ''" />
                </div>
            </div>
            <input type="submit" value="Atualizar" class="btn btn-primary" />
        </x-form.default-form>
    </div>
@endsection
