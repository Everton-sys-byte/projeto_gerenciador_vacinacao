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
        @include('template.defaultSessionAlert.alert')
        <x-list-group.list-group>
            @foreach ($vacinas as $vacina)
                <x-card.card :cardId="$vacina->id" cardTitle="Vacina" :cardSubTitle="$vacina->nome">
                    <x-slot name="card_information">
                            {{ $vacina->descricao }} 
                    </x-slot>
                    <x-slot name="card_buttons">

                        <a href="{{ @route('package.available', ['vacina' => $vacina->id]) }}" class="btn btn-primary">Ver
                            lotes</a>

                        @if (session()->get('role') == 'profissional')
                            @can('editar-vacina')
                                <button class="btn btn-success" vacina="{{ $vacina }}" role="button"
                                    data-bs-toggle="modal" data-bs-target="#editarVacina">Editar vacina</button>
                            @endcan
                        @endif

                        @if (session()->get('role') == 'admin')
                            @can('excluir-vacina')
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluirVacina"
                                    vacina_id="{{ $vacina->id }}" vacina_nome="{{ $vacina->nome }}">Deletar
                                    vacina</button>
                            @endcan
                        @endif
                    </x-slot>
                </x-card.card>
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
