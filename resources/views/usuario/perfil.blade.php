@extends('template.defaultPages.defaultPages')
@section('title', 'Perfil')

@section('content')
    <div class="information profile container-fluid">
        <x-titles.default-title title="Perfil" />
        <x-anchor.anchor route="{{@route('user.configuration.profile')}}" type="Configurar" class="btn btn-primary mb-3"
            svg="{{ @asset('images/svgs/list/gear.svg') }}" />

        <div class="row row-cols-1 row-cols-md-2 fs-4">
            <div class="col">
                <img src="/images/avatar/{{ auth()->user()->avatar }}" alt="" class="rounded-circle"
                    style="width: 80px; height:80px">
                <span class="d-block">Nome completo: {{ auth()->user()->nome_completo }}</span>
                <span class="d-block">CPF: {{ auth()->user()->cpf }}</span>
                <span class="d-block">Email: {{ auth()->user()->email }}</span>
                <span class="d-block">Data de nascimento:{{ auth()->user()->getDataNascimento() }}</span>
                <span class="d-block">Celular:{{ auth()->user()->celular }}</span>
            </div>
            @if (!is_null(auth()->user()->endereco))
                <div class="col">
                    <span class="d-block">CEP: {{ auth()->user()->endereco->cep->cep }}</span>
                    <span class="d-block">Estado: {{ auth()->user()->endereco->cep->uf }}</span>
                    <span class="d-block">Cidade: {{ auth()->user()->endereco->cep->cidade }}</span>
                    <span class="d-block">Bairro: {{ auth()->user()->endereco->cep->bairro }}</span>
                    <span class="d-block">Logradouro: {{ auth()->user()->endereco->cep->logradouro }}</span>
                    <span class="d-block">Numero: {{ auth()->user()->endereco->numero }}</span>
                    <span class="d-block">Complemento: {{ auth()->user()->endereco->complemento }}</span>
                </div>
            @endif
        </div>
    </div>
@endsection
