@extends('template.defaultPages.defaultPages')
@section('title', 'Lotes')
@section('content')
    <div class="information container-fluid px-5">
        <x-titles.default-title title="Lotes disponíveis" />

        {{-- HORIZONTAL NAV BAR --}}
        @include('template.horizontalNavBar.vacinas_lotes')

        @if (session()->get('role') == 'profissional')
            @can('adicionar-vacina')
                <button class="btn btn-primary my-1" role="button" data-bs-toggle="modal" data-bs-target="#criarLote">Registrar
                    Lotes </button>
            @endcan
        @endif

        {{-- DEFAULT ALERT --}}
        @include('template.defaultSessionAlert.alert')

        <x-list-group.list-group>
            @foreach ($lotes as $lote)
                {{-- CARD DOS LOTES --}}
                @include('template.cards.lote.cardLote')
            @endforeach
        </x-list-group.list-group>
    </div>

    @if (session()->get('role') == 'profissional')
        @can('adicionar-lote')
            @include('profissional.modais.lotes.createLote')
            @include('profissional.modais.lotes.editLote')
        @endcan
    @endif
    @if (session()->get('role') == 'admin')
        @can('excluir-lote')
            @include('admin.modais.lotes.deleteLote')
        @endcan
    @endif

@endsection
