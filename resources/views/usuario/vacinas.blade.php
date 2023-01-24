@extends('template.defaultPages.defaultPages')
@section('title', 'vacinas disponíveis')

@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Vacinas Disponíveis" />
        @if (session()->get('role') == 'profissional')
            @can('adicionar-vacina')
                <button class="btn btn-primary mb-3" role="button" data-bs-toggle="modal" data-bs-target="#criarVacina">Registrar
                    Vacina</button>
            @endcan
        @endif

        {{-- DEFAULT ALERT --}}
        @include('template.defaultSessionAlert.alert')
        
        <x-list-group.list-group>
            @foreach ($vacinas as $vacina)
                {{-- CARD DOS LOTES --}}
                @include('template.cards.vacina.cardVacina')
            @endforeach
        </x-list-group.list-group>
    </div>

    @if (session()->get('role') == 'profissional')
        @can('adicionar-vacina')
            @include('profissional.modais.vacinas.createVacina')
            @include('profissional.modais.vacinas.editVacina')
        @endcan
    @elseif(session()->get('role') == 'admin')
        @can('excluir-vacina')
            @include('admin.modais.vacinas.deleteVacina')
        @endcan
    @endif
@endsection
