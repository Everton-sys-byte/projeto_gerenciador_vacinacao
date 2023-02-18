@extends('template.defaultPages.defaultPages')
@section('title', 'Histórico')
@section('content')
    <div class="information container-fluid px-5">
        <x-titles.default-title title="Histórico de vacinas aplicadas" />

        {{-- HORIZONTAL NAV BAR --}}
        @include('template.horizontalNavBar.vacinacao_historico')

        {{-- TABLE --}}
        @include('template.tables.historicoVacinasAplicadas')

        {{-- MODAIS --}}
        @include('profissional.modais.registros.moreInformationRegister')
    @endsection
