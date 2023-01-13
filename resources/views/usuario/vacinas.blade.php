@extends('template.defaultPages.defaultPages')
@section('title', 'vacinas disponíveis')

@section('content')
    <div class="information container-fluid">
        <x-titles.default-title title="Vacinas Disponíveis" />
        <x-list-group.list-group>
            @foreach ($vacinas as $vacina)
                <x-card.card :cardId="$vacina->id" cardTitle="Vacina" :cardSubTitle="$vacina->nome">
                    <x-slot name="card_information">
                        {{ $vacina->descricao }}
                    </x-slot>
                    @if (session()->get('role') != 'comum')
                        <x-slot name="card_buttons">
                            <a href="{{ @route('package.available', ['vacina' => $vacina->id]) }}" class="btn btn-primary">Ver
                                lotes</a>
                        </x-slot>
                    @endif
                </x-card.card>
            @endforeach
        </x-list-group.list-group>
    </div>
@endsection
